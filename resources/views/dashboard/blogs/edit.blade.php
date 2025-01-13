@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.blogs.index') }}"
            class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.blogs') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.edit') }} {{ $blog->title }}</div>
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
                <label for="product_id"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.product') }}</label>
                <select name="product_id" id="product_id" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    <option disabled selected value="">{{ __('dashboard.select_product') }}</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $blog->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="title"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.title') }}</label>
                <input type="text" id="title" name="title" value="{{ $blog->title }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="preview"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.preview') }}</label>
                <textarea type="text" id="preview" name="preview" rows="4"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">{!! $blog->preview !!}</textarea>
                @error('preview')
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
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-auto">
                </div>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">{{ __('dashboard.content') }}</label>
                <div id="content" name="content" dir="rtl" id="content" style="font-family: inherit"
                    class="mt-1 w-full  bg-white px-2 py-1 ">
                    {!! $blog->content !!}
                </div>
                @error('content')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <input type="hidden" name="content" id="content-input">
            </div>

            <hr class="w-full my-4 mx-auto">

            <div class="mb-4">
                <label for="meta_title"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.meta_title') }}</label>
                <input type="text" id="meta_title" name="meta_title" value="{{ $blog->meta_title }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('meta_title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="meta_description"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.meta_description') }}</label>
                <textarea name="meta_description" id="meta_description" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1">{{ $blog->meta_description }}</textarea>
                @error('meta_description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="meta_keywords"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.meta_keywords') }}</label>
                <textarea name="meta_keywords" id="meta_keywords" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1">{{ $blog->meta_keywords }}</textarea>
                @error('meta_keywords')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" onclick="appendContentToInput()"
                class="w-100 bg-[#452810] text-white rounded-lg px-3 py-1 hover:bg-[#5a3d24]">{{ __('dashboard.submit') }}</button>
        </form>
    </div>
@endsection

@push('js')

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

        var quillNews = new Quill('#content', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });


        function appendContentToInput() {
            const content = quillNews.root.innerHTML;
            document.getElementById('content-input').value = content;
        }
    </script>
@endpush
