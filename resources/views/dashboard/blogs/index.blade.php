@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.blogs') }}</div>
    </x-dashboard.header>


    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.blogs.create') }}'"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create_blog') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.blog_title') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.created_at') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($blogs as $blog)
                        <tr id="row-{{ $blog['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">
                                <p>{{ $blog->title_ar }}</p>
                                <p>{{ $blog->title_en }}</p>
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $blog->created_at->format('Y-m-d H:i') }}
                            </td>
                            <td class="py-2 px-4">
                                <div class="fle flex gap-2 items-center">
                                    <button
                                        onclick="window.location.href = '{{ route('dashboard.blogs.edit', $blog->id) }}'"
                                        class="px-2 disableOnLoad py-1 text-xs bg-green-500 rounded text-white">{{ __('dashboard.update') }}</button>
                                    <button onclick="openModal(this)" data-modal-id="deleteBlog"
                                        data-name="{{ $blog->title }}" data-id="{{ $blog->id }}"
                                        class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- {{ $properties->links() }} --}}
            </table>

        </div>
    </div>

    <x-modal title="{{ __('dashboard.delete_blog') }}" id="deleteBlog">
        <div>
            <!-- Title English -->
            <div class="mb-4">
                <div>{{ __('dashboard.delete_blog_confirmation') }}</div>
                <strong id="deleteBlogName"></strong>
            </div>

            <input type="hidden" id="deleteBlogid" name="id">

            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deleteBlogBtn"
                    class="disableBtn px-2 py-1 text-xs bg-red-500 rounded text-white disableOnLoad">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteBlog')"
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

                document.getElementById('deleteBlogName').innerHTML = name;
                document.getElementById('deleteBlogid').value = id;

            // Update on click submit function
            const btnElement = document.getElementById(modalId + 'Btn');

            if (btnElement) {
                btnElement.addEventListener('click', () => deleteBlog(id));
            } else {
                console.log('Button not found:', modalId + 'Btn');
            }
        }



        function deleteBlog(id) {
            let route = "{{ route('dashboard.blogs.delete', ':id') }}";
            route = route.replace(':id', id);
            const formData = new FormData();
            formData.append('id', id);
            
            fetch(route, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    method: 'DELETE',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    
                    if (data.success) {
                        // Show success toast message
                        toast('toast-success', data.message);
                        closeModal('deleteBlog');

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
