@extends('dashboard.layout')
@section('content')
    <x-dashboard.header >
        <div class="text-xl font-bold">{{ __('dashboard.profile') }}</div>
    </x-dashboard.header>
    @if ($errors->any())
        <div id="error-alert"
            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 transition-opacity duration-500 ease-in-out">
            <strong class="font-bold">هناك بعض الأخطاء:</strong>
            <ul class="mt-2 list-disc pl-5 mr-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-white rounded-lg shadow p-6 h-full grid grid-cols-1 md:grid-cols-2">
        <div class=" w-full ">
            <form id="updateProfile" method="POST" action="{{ route('dashboard.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الإسم    </label>
                    <input class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" type="text" id="name" value="{{ $user->name }}" name="name">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">البريد الإلكتروني</label>
                    <input class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" type="email" id="email" value="{{ $user->email }}" name="email">
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>  
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">كلمة المرور</label>
                    <input class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" type="password" id="password" name="password" autocomplete="off>
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تأكيد كلمة المرور</label>
                    <input class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" type="password" id="password_confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الصورة الشخصية</label>
                    <input onchange="previewImage(event)" accept="image/*" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow" type="file" id="image" name="image">
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <button onclick="document.getElementById('updateProfile').submit()" type="button"
                    id="addEditSubmitBtn"
                    class="disableBtn mt-3 inline-flex bg-black text-white px-4 py-2 rounded-lg shadow-sm hover:bg-gray-600 font-semibold ">اضافة</button>
                </div>
            </form>
        </div>
        <div class="w-full flex justify-center items-center " id="imgPreview">
            @if ($user->image)
                <img src="{{ asset($user->image) }}" class="w-64 h-64 rounded-2xl">
            @else
                <img src="{{ asset('images/unknowing_face.jpg') }}" class="w-64 h-64 rounded-2xl">
            @endif
        </div>
    </div>

@endsection