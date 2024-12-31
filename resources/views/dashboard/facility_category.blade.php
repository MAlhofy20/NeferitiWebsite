@extends('dashboard.layout')
@section('content')
    <x-dashboard.header >
        <div class="text-xl font-bold">{{ __('dashboard.facilities_categories') }}</div>
    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->
        <div>
            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($categories as $category)
                        <tr class="border-t border-gray-200">
                            <td id="name_{{ $category->id }}" class="py-2 px-4 text-start">{{ $category->name_en . ' / ' . $category->name_ar }}</td>
                            <td class="py-2 px-4 text-start">
                                <div>
                                    <button onclick="openModal(this)"
                                    data-modal-id="editName"
                                    data-name-ar="{{ $category->name_ar }}"
                                    data-name-en="{{ $category->name_en }}"
                                    data-id="{{ $category->id }}"
                                    class="px-2 py-1 text-xs bg-gray-300 rounded text-black">{{ __('dashboard.update') }}</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-modal title="{{ __('dashboard.edit_name') }}" id="editName">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <label for="name_en" class="block opacity-50 text-sm font-medium text-gray-700">{{ __('dashboard.name_en') }}</label>
                <input type="text" id="name_en" name="name_en"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" readonly>
            </div>

            <!-- Title Arabic -->
            <div class="mb-4">
                <label for="name_ar" class="block text-sm font-medium text-gray-700">{{ __('dashboard.name_ar') }}</label>
                <input type="text" id="name_ar" name="name_ar"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" required>
                @error('name_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <input type="hidden" id="id" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="modalSubmitBtn"
                    class="disableBtn px-2 py-1 text-xs bg-black rounded text-white">{{ __('dashboard.update') }}</button>
                <button type="button" onclick="closeModal('editName')"
                    class="px-2 py-1 text-xs bg-white rounded text-black">{{ __('dashboard.close') }}</button>
            </div>
        </div>
    </x-modal>

    @include('dashboard.inc._toast')
@endsection

@push('js')
<script>
    // Function to open modal and set its content
    function openModal(button) {
        // Read data from button's data attributes
        const modalId = button.getAttribute('data-modal-id');
        const nameEn = button.getAttribute('data-name-en');
        const nameAr = button.getAttribute('data-name-ar');
        const id = button.getAttribute('data-id');
        
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('block');
            modal.classList.remove('hidden');
        }

        // Set values in the modal form
        document.getElementById('name_en').value = nameEn;
        document.getElementById('name_ar').value = nameAr;
        document.getElementById('id').value = id;

        // Update on click submit function
        document.getElementById('modalSubmitBtn').onclick = () => submitEditName(id);
    }

    // Function to submit the edit form
    function submitEditName(id) {
        let route = "{{ route('dashboard.facilities_categories.update') }}";
        const formData = new FormData();
        formData.append('name_ar', document.getElementById('name_ar').value); // Ensure this ID is correct
        formData.append('id', id);

        fetch(route, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update the corresponding element on the page
                    let columnName = document.getElementById('name_' + id);
                    if (columnName) {
                        columnName.innerHTML = data.name_en + ' / ' + data.name_ar;
                    }

                    // Clear form fields
                    document.getElementById('name_ar').value = '';
                    document.getElementById('id').value = '';

                    // Show success toast message
                    toast('toast-success', data.message);

                    // Close the modal
                    closeModal('editName');
                }
            })
            .catch(error => {
                console.error('Error:', error); // Add error handling
            });
    }
</script>
@endpush
