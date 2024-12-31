@extends('dashboard.layout')

@section('content')

<x-dashboard.header>
    <a href="{{ route('dashboard.external_pages.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.external_pages') }}</a> |
    <div class="text-xl font-bold">{{ __('dashboard.create_external_page') }}</div>
</x-dashboard.header>

<div class="grid sm:grid-cols-1 md:grid-cols-2 gap-2">

    <div class="col-span-1 bg-white rounded-lg shadow p-6 h-full">

        <!-- Content here -->

        <form action="{{ route('dashboard.external_pages.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    {{ __('dashboard.title_ar') }}
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title_ar" name="title_ar" type="text" placeholder="{{ __('dashboard.title_ar') }}"
                    value="{{ old('title_ar') }}">

                @error('title_ar')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    {{ __('dashboard.title_en') }}
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title_en" name="title_en" type="text" placeholder="{{ __('dashboard.title_en') }}"
                    value="{{ old('title_en') }}">

                @error('title_en')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                    {{ __('dashboard.link') }}
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="link" name="link" type="text" placeholder="{{ __('dashboard.link') }}"
                    value="{{ old('link') }}"
                    oninput="testLink()">

                @error('link')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>  
            
            {{-- submit btn --}}
            <div class="flex items-center justify-end">
                <button
                    class="bg-black hover:bg-[#472A12] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    {{ __('dashboard.create') }}
                </button>
            </div>

        </form>

    </div>

    <div class="col-span-1 bg-white rounded-lg shadow p-6 h-full">

        <p class="font-semibold">اختبار حالة الظهور في موقعنا</p>
        <p class="text-xs">قم بوضع الرابط لبدأ الاختبار</p>
        <iframe id="iframe_test" hidden src="" style="width:100%; height:600px; border:none;"></iframe>
    </div>
</div>
@endsection
@push('js')
<script>
    function testLink() {
    var link = document.getElementById('link').value;
    var iframe = document.getElementById('iframe_test');
    
    if (!link) {
        iframe.hidden = true; // اخفاء الـ iframe لو مفيش رابط
        return;
    }

    // عرض الـ iframe مع الرابط
    iframe.src = link;
    iframe.hidden = false;
}

</script>
@endpush