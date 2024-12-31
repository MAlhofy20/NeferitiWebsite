@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.gallery') }}">
        <div class="text-xl font-bold">{{ __('dashboard.gallery') }}</div>
    </x-dashboard.header>
    
    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-2">
        <!-- Add New Image Section -->
        <div class="col-span-1 bg-white rounded-lg shadow p-6 max-h-96">
            <form action="{{ route('dashboard.slider_images.store') }}" method="POST" id="addImageForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="type" class="block text-sm font-medium">{{ __('dashboard.type') }}</label>
                    <select id="type" name="type" class="w-full mt-1 block border-gray-300 rounded-md bg-gray-200 py-1 px-2">
                        <option value="" hidden disabled selected >{{ __('dashboard.select') }}</option>
                        <option value="channel">{{ __('dashboard.channel') }}</option>
                        <option value="partner">{{ __('dashboard.partner') }}</option>
                        <option value="journal">{{ __('dashboard.journal') }}</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium">{{ __('dashboard.add_image') }}</label>
                    <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-200 py-1 px-2">
                </div>
                <div class="mb-4">
                    <img id="imagePreview" class="mt-2 w-24 h-16 object-cover hidden">
                </div>
                <div class="mb-4">
                    <button type="submit" id="addImageBtn" class="px-4 py-2 bg-[#452810] text-white rounded">{{ __('dashboard.submit') }}</button>
                </div>
            </form>

                @if ($errors->any())
                    <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                        <ul class="list-disc px-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        
        </div>

        <!-- Images Table -->
        <div class="col-span-1 bg-white rounded-lg shadow p-6 h-full ">
            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">#</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.image') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.type') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($slider_images as $slider_image)
                        <tr id="row-{{ $slider_image->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 text-start">
                                <img src="{{ $slider_image->image }}" class="w-24 h-24 object-cover">
                            </td>
                            <td class="py-2 px-4 text-start">
                                {{ __('dashboard.'.$slider_image->type) }}
                            </td>
                            <td class="py-2 px-4 gap-2">
                                <button onclick="openModal(this)" data-modal-id="deleteImg" data-src="{{ $slider_image->image }}" data-id="{{ $slider_image->id }}" class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Image Modal -->
    <x-modal title="{{ __('dashboard.delete_image') }}" id="deleteImg">
        <div>
            <div>{{ __('dashboard.delete_image_confirmation') }}</div>
            <img id="deleteImagePreview" class="w-24 h-24 object-cover mt-4">
            <input type="hidden" id="deleteImageId">
            <div class="flex justify-between border-t border-gray-300 pt-2">
                <button type="button" id="deleteImageBtn" class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                <button type="button" onclick="closeModal('deleteImg')" class="px-2 py-1 text-xs bg-white rounded text-black ">{{ __('dashboard.close') }}</button>
            </div>
        </div>
    </x-modal>

    @include('dashboard.inc._toast')
@endsection

@push('js')
<script>
    // Function to preview image before upload
    document.getElementById('image').addEventListener('change', function(event) {
        const image = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            preview.src = e.target.result;
            preview.classList.remove('hidden');
        };

        if (image) {
            reader.readAsDataURL(image);
        }
    });

    // Function to open modal and set image details for deletion
    function openModal(button) {
        const modalId = button.getAttribute('data-modal-id');
        const imageSrc = button.getAttribute('data-src');
        const id = button.getAttribute('data-id');

        const modal = document.getElementById(modalId);
        modal.classList.add('block');
        modal.classList.remove('hidden');

        if (modalId === 'deleteImg') {
            document.getElementById('deleteImagePreview').src = imageSrc;
            document.getElementById('deleteImageId').value = id;
        }
    }

    // Function to delete image
    document.getElementById('deleteImageBtn').addEventListener('click', function() {
        const id = document.getElementById('deleteImageId').value;

        fetch("{{ route('dashboard.slider_images.delete') }}", {
            method: "Delete",
            body: JSON.stringify({ id: id }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                toast('toast-success', data.message);
                document.getElementById(`row-${id}`).remove();
                closeModal('deleteImg');
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Close modal function
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
        modal.classList.remove('block');
    }
</script>
@endpush
