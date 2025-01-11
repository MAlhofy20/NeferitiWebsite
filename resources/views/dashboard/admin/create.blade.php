@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.admin.index') }}"
            class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.admins') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-2/3">
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

        <form action="{{ route('dashboard.admin.store') }}" method="POST">
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
            <div class="mb-4">
                <label for="question_en"
                    class="block text-sm font-medium text-gray-700">{{ __('dashboard.email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('dashboard.password') }}</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="w-full mt-4 bg-primary text-white rounded-lg px-3 py-1 hover:bg-secondary">{{ __('dashboard.submit') }}</button>
            </div>

        </form>

    </div>
@endsection

@push('js')
@endpush
