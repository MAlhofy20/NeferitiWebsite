@extends('dashboard.auth.layout')

@section('content')
<div class="h-screen md:grid grid-cols-3">
    <div class="p-5 flex items-center justify-center shadow-2xl bg-gradient-to-bl from-[#b9fffa]  via-transparent">
        <form method="post" action="{{ route('login.check') }}" class="w-full">
            @csrf
            <p class="text-2xl font-bold mb-10 text-black"><i class="fa-solid fa-lock ml-2"></i>{{ __('dashboard.login') }}</p>

            <div class="mb-4">
                <label for="email" class="block mb-1 text-black ">{{ __('dashboard.email') }}</label>
                <input type="email" id="email" name="email" class="w-full p-2 border bg-gray-100 rounded-lg">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 text-black">{{ __('dashboard.password') }}</label>
                <input type="password" id="password" name="password" class="w-full p-2 border bg-gray-100 rounded-lg">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                {{-- remember me --}}
                <div class="flex gap-3">
                    <input type="checkbox" id="remember" name="remember" >
                    <label for="remember" class="block text-sm text-black">{{ __('dashboard.remember_me') }}</label>
                </div>
            </div>

            <div class="justify-center flex flex-col">
                <button type="submit"  class="disableBtn px-4 py-2  bg-primary hover:bg-secondary text-white rounded-lg ">{{ __('dashboard.login') }}</button>
            </div>
        </form>
    </div>
    <div class="p-5 flex items-center justify-center col-span-2 bg-primary">
        <img class="w-[50%] rounded-lg" src="{{ asset('dash/images/4.png') }}">
    </div>
</div>
@endsection
