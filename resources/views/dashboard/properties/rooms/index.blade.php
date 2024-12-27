@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.properties.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.properties') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.rooms') }} ({{ $property['title'] }})</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.rooms.create', $property['id']) }}';"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create_room_type') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.room_kind') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.count_of_rooms') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($rooms as $room)
                        <tr id="row-{{ $room['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">{{ $room['attributes']['title'] }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $room['attributes']['count_of_rooms'] }}
                            </td>
                            <td class="py-2 px-4">
                                <div class="fle flex gap-2 items-center">
                                    <button
                                        onclick="window.location.href = '{{ route('dashboard.rooms.edit', ['property_id' => $property['id'], 'room_id' => $room['id']]) }}';"
                                        class="px-2 disableOnLoad py-1 text-xs bg-green-500 rounded text-white">{{ __('dashboard.update') }}</button>
                                    <button onclick="openModal(this)" data-modal-id="deleteRoom"
                                        data-name="{{ $room['attributes']['title'] }}" data-id="{{ $room['id'] }}"
                                        class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="flex items-center mt-4 gap-2 text-xs">
                <!-- زر Previous -->
                @if ($currentPage > 1)
                    <a href="{{ route('dashboard.rooms.index', ['property_id' => $property['id'], 'page' => $currentPage - 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.previous') }}</a>
                @endif

                <!-- رقم الصفحة الحالية -->
                <span class="font-semibold text-lg">{{ $currentPage }}</span>

                <!-- زر Next -->
                @if ($currentPage < $totalPages)
                    <a href="{{ route('dashboard.rooms.index', ['property_id' => $property['id'], 'page' => $currentPage + 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.next') }}</a>
                @endif
            </div>

        </div>
    </div>

    <x-modal title="{{ __('dashboard.delete_room') }}" id="deleteRoom">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.delete_room_confirmation') }}</div>
                <strong id="deleteRoomName"></strong>
            </div>

            <input type="hidden" id="deleteRoomid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deleteRoomBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteRoom')"
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

                document.getElementById('deleteRoomName').innerHTML = name;
                document.getElementById('deleteRoomid').value = id;

            // Update on click submit function
            const btnElement = document.getElementById(modalId + 'Btn');

            if (btnElement) {
                btnElement.addEventListener('click', () => deleteRoom(id));
            } else {
                console.log('Button not found:', modalId + 'Btn');
            }
        }



        function deleteRoom(id) {
            let route = "{{ route('dashboard.rooms.delete') }}";
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
                        closeModal('deleteRoom');

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
