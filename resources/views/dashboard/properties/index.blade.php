@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.properties') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.properties.create') }}';"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create_property') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.property_title') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.Location') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.rooms') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.channels') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($properties as $property)
                        <tr id="row-{{ $property['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">{{ $property['attributes']['title'] }}
                                @if ($property['attributes']['content']['description'] == null)
                                    <a href="{{ route('dashboard.properties.edit', ['property_id' => $property['id'], 'fill_in_the_details' => true]) }}"
                                        class="text-xs block text-green-500 underline">{{ __('dashboard.Complete the details') }}</a>
                                @endif
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $property['attributes']['city'] }}, {{ $property['attributes']['country'] }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <button onclick="window.location.href = '{{ route('dashboard.rooms.index', $property['id']) }}';" 
                                    class="px-2 py-1 text-xs bg-gray-300 rounded text-black">{{ __('dashboard.rooms') }}</button>
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <button onclick="window.location.href = '{{ route('dashboard.channels.index', $property['id']) }}';" 
                                    class="px-2 py-1 text-xs bg-gray-300 rounded text-black">{{ __('dashboard.channels') }}</button>
                            </td>
                            <td class="py-2 px-4">
                                <div class="fle flex gap-2 items-center">
                                    <button
                                        onclick="window.location.href = '{{ route('dashboard.properties.edit', ['property_id' => $property['id']]) }}';"
                                        class="px-2 disableOnLoad py-1 text-xs bg-green-500 rounded text-white">{{ __('dashboard.update') }}</button>
                                    <button onclick="openModal(this)" data-modal-id="deleteProperty"
                                        data-name="{{ $property['attributes']['title'] }}" data-id="{{ $property['id'] }}"
                                        class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- {{ $properties->links() }} --}}
            </table>
            <div class="flex items-center mt-4 gap-2 text-xs">
                <!-- زر Previous -->
                @if ($currentPage > 1)
                    <a href="{{ route('dashboard.properties.index', ['page' => $currentPage - 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.previous') }}</a>
                @endif

                <!-- رقم الصفحة الحالية -->
                <span class="font-semibold text-lg">{{ $currentPage }}</span>

                <!-- زر Next -->
                @if ($currentPage < $totalPages)
                    <a href="{{ route('dashboard.properties.index', ['page' => $currentPage + 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.next') }}</a>
                @endif
            </div>

        </div>
    </div>

    <x-modal title="{{ __('dashboard.delete_property') }}" id="deleteProperty">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.delete_property_confirmation') }}</div>
                <strong id="deletePropertyName"></strong>
            </div>

            <input type="hidden" id="deletePropertyid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deletePropertyBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteProperty')"
                    class="px-2 py-1 text-xs bg-white rounded text-black ">{{ __('dashboard.close') }}</button>
            </div>
        </div>
    </x-modal>
@endsection

@push('js')
    <script>
        function openModal(button) {
            // Read data from button's data attributes
            const modalId = button.getAttribute('data-modal-id');
            const name = button.getAttribute('data-name');
            const id = button.getAttribute('data-id');

            const modal = document.getElementById(modalId);

            if (modal) {
                modal.classList.add('block');
                modal.classList.remove('hidden');
            } else {
                console.log('Modal not found:', modalId);
            }

                document.getElementById('deletePropertyName').innerHTML = name;
                document.getElementById('deletePropertyid').value = id;

            // Update on click submit function
            const btnElement = document.getElementById(modalId + 'Btn');

            if (btnElement) {
                btnElement.addEventListener('click', () => deleteProperty(id));
            } else {
                console.log('Button not found:', modalId + 'Btn');
            }
        }



        function deleteProperty(id) {
            let route = "{{ route('dashboard.properties.delete') }}";
            const formData = new FormData();
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
                        // Show success toast message
                        toast('toast-success', data.message);
                        closeModal('deleteProperty');

                        // remove the row
                        const row = document.getElementById(`row-${id}`);
                        if (row) {
                            row.parentNode.removeChild(row);
                        }
                    }
                })
        }

    </script>
@endpush
