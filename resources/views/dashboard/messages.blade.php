@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.messages') }}">
        <div class="text-xl font-bold">{{ __('dashboard.messages') }}</div>
    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->
        <div class="overflow-y-scroll">
            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.email') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.subject') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.see_message') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($messages as $message)
                        <tr id="row-{{ $message->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start">{{ $message->name }}</td>
                            <td class="py-2 px-4 text-start">{{ $message->email }}</td>
                            <td class="py-2 px-4 text-start">{{ $message->subject }}</td>
                            <td class="py-2 px-4 text-start">
                                <button onclick="openModal(this)" data-modal-id="messageModal" data-message="{{ $message->message }}" class="px-2 py-1 text-xs bg-yellow-500 rounded text-white">{{ __('dashboard.message') }}</button>
                            </td>
                            <td class="py-2 px-4 flex gap-2">
                                <div>
                                    <button onclick="openModal(this)" data-modal-id="deleteMessage"
                                        data-name="{{ $message->name }}" data-id="{{ $message->id }}"
                                        class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $messages->links() }}
            </table>
        </div>
    </div>

    <x-modal title="{{ __('dashboard.message') }}" id="messageModal">
        <div id="message">


        </div>
        <button type="button" onclick="closeModal('messageModal')"
        class="px-2 py-1 text-xs rounded text-black bg-gray-200">{{ __('dashboard.close') }}</button>
    </x-modal>
    <x-modal title="{{ __('dashboard.delete_message') }}" id="deleteMessage">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.delete_message_confirmation') }}</div>
                <strong id="deleteMessageName"></strong>
            </div>

            <input type="hidden" id="deleteMessageid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deleteMessageBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteMessage')"
                    class="px-2 py-1 text-xs bg-white rounded text-black ">{{ __('dashboard.close') }}</button>
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
            const name = button.getAttribute('data-name');
            const id = button.getAttribute('data-id');

            const modal = document.getElementById(modalId);

            if (modal) {
                modal.classList.add('block');
                modal.classList.remove('hidden');
            }else{
                console.log('Modal not found:', modalId);
            }

            // Set values in the modal form
            if (modalId === 'deleteMessage') {
                document.getElementById('deleteMessageName').innerHTML = name;
                document.getElementById('deleteMessageid').value = id;
            } else if(modalId === 'messageModal') {
                document.getElementById('message').innerHTML = button.getAttribute('data-message');
            }

            // Update on click submit function
            const btnElement = document.getElementById(modalId + 'Btn');

            if (btnElement) {
                btnElement.addEventListener('click', () => submit(modalId, id));
                console.log(btnElement);
            } else {
                console.log('Button not found:', modalId + 'Btn');
            }
        }

        // Function to submit the edit form
        function submit(modalId, id) {
            console.log('Submit called with:', modalId, id);
            if (modalId === 'deleteMessage') {
                deleteMessage(id);
            }
        }

        function deleteMessage(id) {
            let route = "{{ route('dashboard.messages.delete') }}";
            const formData = new FormData();
            formData.append('id', id);
            
            fetch(route, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    method: 'post',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    
                    if (data.success) {
                        // Show success toast message
                        toast('toast-success', data.message);
                        closeModal('deleteMessage');
                        
                        // remove the row
                        const row = document.getElementById(`row-${id}`);
                        if (row) {
                            row.parentNode.removeChild(row);
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error); // Add error handling
                });
        }
    </script>

@endpush
