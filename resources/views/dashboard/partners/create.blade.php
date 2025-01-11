@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.partners.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.partners') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create') }}</div>
    </x-dashboard.header>
    <div class="flex gap-2">

        <div class="bg-white rounded-lg shadow p-6 h-full w-full">

            @if ($errors->any())
                <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                    <ul class="list-disc px-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('dashboard.partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="">
                    <div class="mb-4 w-full">
                        <label for="image"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.image') }}</label>
                        <input onchange="previewPhotos(event)" multiple type="file" id="image" name="images[]"
                            class=" mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="photosPreview" class="mb-4 w-full flex flex-wrap gap-2">
    
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
