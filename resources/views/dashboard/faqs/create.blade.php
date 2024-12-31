@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.faqs.index') }}"
            class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.faqs') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create_faq') }}</div>
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

        <form action="{{ route('dashboard.faqs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="question_ar"
                    class="block text-sm font-medium text-gray-700">{{ __('userarea.question_ar') }}</label>
                <input type="text" id="question_ar" name="question_ar" value="{{ old('question_ar') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('question_ar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="question_en"
                    class="block text-sm font-medium text-gray-700">{{ __('userarea.question_en') }}</label>
                <input type="text" id="question_en" name="question_en" value="{{ old('question_en') }}"
                    class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                @error('question_en')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="answer_ar" class="block text-sm font-medium text-gray-700">{{ __('userarea.answer_ar') }}</label>
                <textarea id="answer_ar" name="answer_ar" rows="3" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">{{ old('answer_ar') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="answer_en" class="block text-sm font-medium text-gray-700">{{ __('userarea.answer_en') }}</label>
                <textarea id="answer_en" name="answer_en" rows="3" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">{{ old('answer_en') }}</textarea>
            </div>
            <div class="mb-4">
                <button type="submit"
                class="w-100 mt-10 bg-[#452810] text-white rounded-lg px-3 py-1 hover:bg-[#5a3d24]">{{ __('dashboard.submit') }}</button>
            </div>

        </form>

    </div>
@endsection

@push('js')
@endpush
