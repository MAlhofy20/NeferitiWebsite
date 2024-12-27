@extends('dashboard.auth.layout')

@section('content')
<div class="h-screen md:grid grid-cols-3">
    <div class="p-5 flex items-center justify-center bg-[#472A12]">
        <form method="post" action="{{ route('login.check') }}" class="w-full">
            @csrf
            <p class="text-2xl font-bold mb-10 text-white"><i class="fa-solid fa-lock ml-2"></i>{{ __('dashboard.login') }}</p>

            <div class="mb-4">
                <label for="email" class="block mb-1 text-white ">{{ __('dashboard.email') }}</label>
                <input type="email" id="email" name="email" class="w-full p-2 border bg-gray-100 rounded-lg">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 text-white">{{ __('dashboard.password') }}</label>
                <input type="password" id="password" name="password" class="w-full p-2 border bg-gray-100 rounded-lg">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <p class="text-sm text-white">{{ __('dashboard.forget_password?') }}<span class="font-semibold underline cursor-pointer">{{ __('dashboard.click_here') }}</span></p>
            </div>

            <div class="mb-4">
                {{-- remember me --}}
                <div class="flex gap-3">
                    <input type="checkbox" id="remember" name="remember" >
                    <label for="remember" class="block text-sm text-white">{{ __('dashboard.remember_me') }}</label>
                </div>
            </div>

            <div class="justify-center flex flex-col">
                <button type="submit"  class="disableBtn px-4 py-2 bg-[#FDCB16] hover:bg-[#E7D2B8] text-black rounded-lg ">{{ __('dashboard.login') }}</button>
                <p class="text-sm mt-2 text-white">{{ __('dashboard.need_an_account') }} <span onclick="location.href='{{ route('register') }}'" class="font-semibold underline cursor-pointer mr-1">{{ __('dashboard.click_here') }}</span></p>
            </div>
        </form>
    </div>
    <div class="p-5 flex items-center justify-center col-span-2">
        <img class="w-[50%] rounded-lg" src="{{ asset('images/design/2.webp') }}">
    </div>
</div>
@endsection
