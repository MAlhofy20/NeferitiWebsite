@extends('dashboard.layout')
@section('content')
<x-dashboard.header>
    <a href="{{ route('dashboard.products.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.products') }}</a> |
    <a href="{{ route('dashboard.products.edit', $product) }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ $product->name }}</a> |
    <a href="{{ route('dashboard.product_details.index', $product) }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.product_details') }}</a> |
    <div class="text-xl font-bold">{{ __('dashboard.create') }}</div>
</x-dashboard.header>
<div class="flex gap-2">

        <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-2/3">

            @if ($errors->any())
                <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                    <ul class="list-disc px-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('dashboard.product_details.store', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.title') }}</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-2 ">

                    <div class="mb-4 w-full">
                        <label for="description"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.description') }}</label>
                        <textarea rows="9" name="description" id="description" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

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
    

                {{-- submit btn --}}
                <div class="flex ">
                    <button type="submit"
                        class="disableBtn px-6 py-2 bg-black rounded-lg text-white hover:bg-[#FCCA16]">{{ __('dashboard.create') }}</button>

                </div>
            </form>
        </div>

    </div>
@endsection

@push('js')

@endpush
