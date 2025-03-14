@extends('dashboard.layout')
@section('content')
<x-dashboard.header>
    <a href="{{ route('dashboard.testimonials.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.testimonials') }}</a> |
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
            <form action="{{ route('dashboard.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.name') }}</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- textarea for description --}}
                <div class="mb-4">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.description') }}</label>
                    <textarea id="description" name="description" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow"></textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
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
