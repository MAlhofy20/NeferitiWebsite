@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.blogs.index') }}"
            class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.blogs') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create_blog') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->
        @if ($errors->any())
            <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                <ul class="list-disc px-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title_ar"
                    class="block text-sm font-medium text-gray-700">{{ __('userarea.blog_title_ar') }}</label>
                <input type="text" id="title_ar" name="title_ar" value="{{ old('title_ar') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('title_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="title_en"
                    class="block text-sm font-medium text-gray-700">{{ __('userarea.blog_title_en') }}</label>
                <input type="text" id="title_en" name="title_en" value="{{ old('title_en') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('title_en')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-2">
                <div class="mb-4 w-full">
                    <label for="image"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.image') }}</label>
                    <input onchange="previewImage(event)" type="file" id="image" name="image"
                        class=" mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div id="imgPreview" class="mb-4 w-full ">

                </div>
            </div>

            <div class="mb-4">
                <label for="content_ar" class="block text-sm font-medium text-gray-700">{{ __('userarea.content_ar') }}</label>
                <div id="content_ar" name="content_ar" dir="rtl" id="content_ar" style="font-family: inherit"
                    class="mt-1 w-full  bg-white px-2 py-1 ">
                    {!! old('content_ar') !!}
                </div>
                @error('content_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <input type="hidden" name="content_ar" id="content-input_ar">
            </div>

            <div class="mb-4">
                <label for="content_en" class="block text-sm font-medium text-gray-700">{{ __('userarea.content_en') }}</label>
                <div id="content_en" name="content_en" dir="rtl" id="content_en" style="font-family: inherit"
                    class="mt-1 w-full  bg-white px-2 py-1 ">
                    {!! old('content_en') !!}
                </div>
                @error('content_en')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <input type="hidden" name="content_en" id="content-input_en">
            </div>

            <button type="submit" onclick="appendContentToInput()"
                class="w-100 bg-[#452810] text-white rounded-lg px-3 py-1 hover:bg-[#5a3d24]">{{ __('dashboard.submit') }}</button>

        </form>

    </div>
@endsection

@push('js')
    <script>
        function previewImage(event) {
            const previewDiv = document.getElementById('imgPreview');
            const file = event.target.files[0];

            // Check if a file was selected
            const reader = new FileReader();

            // Set up the FileReader event
            reader.onload = function(e) {
                // Create an image element
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Selected Image';
                img.className = 'w-[200px] h-[200px] object-cover rounded mx-auto';

                // Clear the current preview and add the new image
                previewDiv.innerHTML = '';
                previewDiv.appendChild(img);
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    </script>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['link', 'image', 'video', 'formula'], // Keep 'image' here
            [{
                'header': [1, 2, false] // Adding options for h1 and h2
            }],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'direction': 'rtl'
            }], // text direction
        ];

        var quillNews_ar = new Quill('#content_ar', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
        var quillNews_en = new Quill('#content_en', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        function limitImages(quill) {
            const Delta = Quill.import('delta');
            const imageButton = quill.getModule('toolbar').container.querySelector('button.ql-image');

            function updateImageButton() {
                const images = quill.root.querySelectorAll('img');
                if (images.length >= 5) {
                    imageButton.style.display = 'none';
                } else {
                    imageButton.style.display = 'inline-block';
                }
            }

            quill.clipboard.addMatcher('IMG', function(node, delta) {
                const images = quill.root.querySelectorAll('img');
                if (images.length >= 5) {
                    alert('You can only upload up to 5 images.');
                    return new Delta();
                }
                updateImageButton();
                return delta;
            });

            quill.root.addEventListener('paste', function(e) {
                const clipboardData = (e.clipboardData || window.clipboardData);
                const items = clipboardData.items;
                for (let i = 0; i < items.length; i++) {
                    if (items[i].type.indexOf('image') !== -1) {
                        e.preventDefault();
                        alert('Pasting images is not allowed.');
                        break;
                    }
                }
            });

            quill.on('text-change', updateImageButton);

            updateImageButton(); // Initial check
        }

        limitImages(quillNews_ar);
        limitImages(quillNews_en);



        function appendContentToInput() {
            const content_ar = quillNews_ar.root.innerHTML;
            const content_en = quillNews_en.root.innerHTML;
            document.getElementById('content-input_ar').value = content_ar;
            document.getElementById('content-input_en').value = content_en;
        }
    </script>
@endpush
