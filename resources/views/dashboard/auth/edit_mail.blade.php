@extends('dashboard.auth.layout')

@section('content')
    <div class="h-screen md:grid grid-cols-3">
        <div class="p-5 flex items-center justify-center bg-[#472A12]">
            <form method="post" action="{{ route('register.edit_mail') }}" class="w-full">
                @csrf
                <p class="text-2xl font-bold mb-10 text-white"><i class="fa-solid fa-lock ml-2"></i>{{ __('dashboard.edit_your_email') }}</p>

                <div class="mb-4" >
                    <label for="email" class="block mb-1 text-white ">{{ __('dashboard.email') }}</label>
                    <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="w-full p-2 border bg-gray-100 rounded-lg">
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <div class="justify-center flex flex-col">
                    <button type="submit"  class=" disableBtn px-4 py-2 bg-[#FDCB16] hover:bg-[#E7D2B8] text-black rounded-lg ">{{ __('dashboard.update') }}</button>
                </div>
            </form>
        </div>
        <div class="p-5 flex items-center justify-center col-span-2">
            <img class="w-[50%] rounded-lg" src="{{ asset('images/design/3.webp') }}">
        </div>
    </div>
@endsection