@extends('dashboard.auth.layout')

@section('content')
    <div class="h-screen md:grid grid-cols-3">
        <div class="p-5 flex items-center justify-center bg-[#472A12]">
            <form method="post" action="{{ route('register.store') }}" class="w-full">
                @csrf
                <p class="text-2xl font-bold mb-10 text-white "><i class="fa-solid fa-lock ml-2"></i>{{ __('dashboard.create_new_account') }}</p>

                <div class="mb-4">
                    <label for="name" class="block mb-1 text-white">{{ __('dashboard.full_name') }} <span class="text-red-500">*</span></label>
                    <input type="text" id="name" value="{{ old('name') }}" name="name" class="w-full p-2 border bg-gray-100 rounded-lg" >
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block mb-1 text-white">{{ __('dashboard.phone') }}<span class="text-red-500">*</span></label>
                    <input type="text" id="phone" value="{{ old('phone') }}" name="phone" class="w-full p-2 border bg-gray-100 rounded-lg" >
                    @error('phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-1 text-white">{{ __('dashboard.email') }}<span class="text-red-500">*</span></label>
                    <input type="email" id="email" value="{{ old('email') }}" name="email" class="w-full p-2 border bg-gray-100 rounded-lg" >
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-1 text-white">{{ __('dashboard.password') }} <span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" class="w-full p-2 border bg-gray-100 rounded-lg" >
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-1 text-white">{{ __('dashboard.password_confirmation') }} <span class="text-red-500">*</span></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border bg-gray-100 rounded-lg" >
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <p class="text-sm text-white">{{ __('dashboard.password_very_note') }}</p>
                </div>


                <div class="justify-center flex flex-col">
                    <button type="submit" class="disableBtn px-4 py-2 bg-[#FDCB16] hover:bg-[#E7D2B8] text-black rounded-lg">{{ __('dashboard.register') }}</button>
                    <p class="text-sm mt-2 text-white">{{ __('dashboard.back_to_login') }}<span onclick="location.href='{{ route('login') }}'" class="font-semibold underline cursor-pointer mr-1">{{ __('dashboard.click_here') }}</span></p>
                </div>
            </form>
        </div>
        <div class="p-5 flex items-center justify-center col-span-2">
            <img class="w-[50%] rounded-lg" src="{{ asset('images/design/3.webp') }}">
        </div>
    </div>
@endsection
