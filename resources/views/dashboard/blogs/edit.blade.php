@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.blogs.index') }}"
            class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.blogs') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.edit_blog') }}</div>
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

        <form action="{{ route('dashboard.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title_ar" class="block text-sm font-medium text-gray-700">{{ __('userarea.blog_title_ar') }}</label>
                <input type="text" id="title_ar" name="title_ar" value="{{ old('title_ar', $blog->title_ar) }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('title_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="title_en" class="block text-sm font-medium text-gray-700">{{ __('userarea.blog_title_en') }}</label>
                <input type="text" id="title_en" name="title_en" value="{{ old('title_en', $blog->title_en) }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('title_en')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-2">
                <div class="mb-4 w-full">
                    <label for="image" class="block text-sm font-medium text-gray-700">{{ __('dashboard.image') }}</label>
                    <input onchange="previewImage(event)" type="file" id="image" name="image"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div id="imgPreview" class="mb-4 w-full">
                    @if ($blog->image)
                        <img src="{{ asset($blog->image) }}" alt="Current Image"
                            class="w-[200px] h-[200px] object-cover rounded mx-auto">
                    @endif
                </div>
            </div>

            <div class="mb-4">
                <label for="content_ar" class="block text-sm font-medium text-gray-700">{{ __('userarea.content_ar') }}</label>
                <div id="content_ar" name="content_ar" dir="rtl" style="font-family: inherit"
                    class="mt-1 w-full bg-white px-2 py-1">
                    {!! old('content_ar', $blog->content_ar) !!}
                </div>
                @error('content_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <input type="hidden" name="content_ar" id="content-input-ar">
            </div>

            <div class="mb-4">
                <label for="content_en" class="block text-sm font-medium text-gray-700">{{ __('userarea.content_en') }}</label>
                <div id="content_en" name="content_en" dir="rtl" style="font-family: inherit"
                    class="mt-1 w-full bg-white px-2 py-1">
                    {!! old('content_en', $blog->content_en) !!}
                </div>
                @error('content_en')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <input type="hidden" name="content_en" id="content-input-en">
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

            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Selected Image';
                img.className = 'w-[200px] h-[200px] object-cover rounded mx-auto';

                previewDiv.innerHTML = '';
                previewDiv.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    </script>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['link', 'image', 'video', 'formula'],
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

        function appendContentToInput() {
            const content_ar = quillNews_ar.root.innerHTML;
            const content_en = quillNews_en.root.innerHTML;
            document.getElementById('content-input-ar').value = content_ar;
            document.getElementById('content-input-en').value = content_en;
        }
    </script>
@endpush
