@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.users') }}">
        <div class="text-xl font-bold">{{ __('dashboard.users') }}</div>

    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->
        <div>
            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.email') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.phone') }}</th>
                        <th class="py-2 px-4 text-start">group_id</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.expiry_date_dashboard') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($users as $user)
                        <tr id="row-{{ $user->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start">{{ $user->name }}</td>
                            <td class="py-2 px-4 text-start">
                                @if ($user->email_verified_at != null)
                                    <i class="fa-regular fa-circle-check text-green-500"></i>
                                @endif
                                {{ $user->email }}
                            </td>
                            <td class="py-2 px-4 text-start">
                                {{ $user->phone }}
                            </td>
                            <td class="py-2 px-4 text-start">
                                {{ $user->group_id }}
                            </td>
                            <td class="py-2 px-4 text-start">
                                {{ $user->expiry_date }}
                                <button onclick="openModal(this)" data-modal-id="expiryDate" data-expiry-date="{{ $user->expiry_date }}" data-id="{{ $user->id }}" class="px-2 py-1 text-xs bg-yellow-500 rounded text-white">{{ __('dashboard.edit_expiry_date') }}</button>
                                @if($user->expiry_date < date('Y-m-d'))
                                <span class="px-2 text-xs bg-red-500 rounded text-white">{{ __('dashboard.expired') }}</span>
                                @endif
                            </td>
                            <td class="py-2 px-4 flex gap-2">
                                <div>
                                    <button onclick="openModal(this)" data-modal-id="deleteUser"
                                        data-name="{{ $user->name }}" data-id="{{ $user->id }}"
                                        class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                </div>
                                <div>
                                    @if ($user->is_blocked == 0)
                                        <button onclick="openModal(this)" data-modal-id="blockUser"
                                            data-blockUnBlockBtn="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-id="{{ $user->id }}"
                                            class="px-2 disableOnLoad py-1 text-xs bg-stone-500 rounded text-white">{{ __('dashboard.block') }}</button>
                                    @else
                                        <button onclick="openModal(this)" data-modal-id="unBlockUser"
                                            data-blockUnBlockBtn="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-id="{{ $user->id }}"
                                            class="px-2 py-1 text-xs bg-green-500 rounded text-white">{{ __('dashboard.unblock') }}</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{ $users->links() }}
            </table>
        </div>
    </div>

    <x-modal title="{{ __('dashboard.edit_expiry_date') }}" id="expiryDate">
        <div>
            <form action="{{ route('dashboard.users.update_expiry_date') }}" method="POST" id="expiryDateForm">
                @csrf
                <input type="hidden" id="expiryDateid" name="id">
                <!-- Expiry Date -->
                <div class="mb-4">
                    <label for="expiry_date" class="block text-sm font-medium text-gray-700">{{ __('dashboard.expiry_date') }}</label>
                    <input type="text" id="expiry_date" name="expiry_date" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                </div>
                <div class="flex justify-between border-t border-gray-300 pt-2">
                    <button type="submit" id="expiryDateBtn"
                        class="disableBtn px-2 py-1 text-xs bg-[#5a5a5a] rounded text-white disableOnLoad">{{ __('dashboard.submit') }}</button>
                    <button type="button" onclick="closeModal('expiryDate')"
                        class="px-2 py-1 text-xs bg-white rounded text-black ">{{ __('dashboard.close') }}</button>
                </div>    
            </form>
        </div>
    </x-modal>
    <x-modal title="{{ __('dashboard.delete_user') }}" id="deleteUser">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.delete_user_confirmation') }}</div>
                <strong id="deleteUserName"></strong>
            </div>

            <input type="hidden" id="deleteUserid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deleteUserBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteUser')"
                    class="px-2 py-1 text-xs bg-white rounded text-black ">{{ __('dashboard.close') }}</button>
            </div>
        </div>
    </x-modal>
    <x-modal title="{{ __('dashboard.block_user') }}" id="blockUser">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.block_user_confirmation') }}</div>
                <strong id="blockUserName"></strong>
            </div>

            <input type="hidden" id="blockUserid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="blockUserBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.block') }}</button>
                <button type="button" onclick="closeModal('blockUser')"
                    class="px-2 py-1 text-xs bg-white rounded text-black">{{ __('dashboard.close') }}</button>
            </div>
        </div>
    </x-modal>
    <x-modal title="{{ __('dashboard.unblock_user') }}" id="unBlockUser">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.unblock_user_confirmation') }}</div>
                <strong id="unBlockUserName"></strong>
            </div>

            <input type="hidden" id="unBlockUserid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="unBlockUserBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.unblock') }}</button>
                <button type="button" onclick="closeModal('unBlockUser')"
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
            if (modalId === 'deleteUser') {
                document.getElementById('deleteUserName').innerHTML = name;
                document.getElementById('deleteUserid').value = id;
            } else if (modalId === 'blockUser') {
                document.getElementById('blockUserName').innerHTML = name;
                document.getElementById('blockUserid').value = id;
            } else if (modalId === 'unBlockUser') {
                document.getElementById('unBlockUserName').innerHTML = name;
                document.getElementById('unBlockUserid').value = id;
            } else if(modalId === 'expiryDate') {
                let startDatePicker = flatpickr("#expiry_date", {
                    dateFormat: "Y-m-d",
                });

                let expiryDate = button.getAttribute('data-expiry-date');
                startDatePicker.setDate(expiryDate, true); // تعيين التاريخ مباشرة باستخدام Flatpickr
                document.getElementById('expiryDateid').value = id;
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
            if (modalId === 'deleteUser') {
                deleteUser(id);
            } else if (modalId === 'blockUser') {
                blockUser(id);
            } else if (modalId === 'unBlockUser') {
                unBlockUser(id);
            }
        }

        function deleteUser(id) {
            let route = "{{ route('dashboard.users.delete') }}";
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
                        closeModal('deleteUser');

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

        function blockUser(id) {
            let route = "{{ route('dashboard.users.block') }}";
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
                        closeModal('blockUser');

                        var button = document.querySelector('button[data-blockUnBlockBtn="' + id + '"]');

                        if (button) {
                            // تبديل الـ data-modal-id
                            button.setAttribute('data-modal-id', 'unBlockUser');

                            // تبديل الكلاس (لون الزر)
                            button.classList.remove('bg-stone-500');
                            button.classList.add('bg-green-500');

                            // تبديل النص الداخلي
                            button.textContent = '{{ __('dashboard.unblock') }}';

                            // تبديل الـ onclick ليبقى على نفس الدالة مع الخصائص الجديدة
                            button.setAttribute('onclick', 'openModal(this)');
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error); // Add error handling
                });
        }

        function unBlockUser(id) {
            let route = "{{ route('dashboard.users.unblock') }}";
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
                        closeModal('unBlockUser');

                        var button = document.querySelector('button[data-blockUnBlockBtn="' + id + '"]');

                        if (button) {
                            // تبديل الـ data-modal-id
                            button.setAttribute('data-modal-id', 'blockUser');

                            // تبديل الكلاس (لون الزر)
                            button.classList.remove('bg-green-500');
                            button.classList.add('bg-stone-500');

                            // تبديل النص الداخلي
                            button.textContent = '{{ __('dashboard.block') }}';

                            // تبديل الـ onclick ليبقى على نفس الدالة مع الخصائص الجديدة
                            button.setAttribute('onclick', 'openModal(this)');
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error); // Add error handling
                });
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        let startDatePicker = flatpickr("#expiry_date", {
            dateFormat: "Y-m-d",
        });

    });

</script> --}}

@endpush
