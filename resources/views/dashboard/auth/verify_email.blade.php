@extends('dashboard.auth.layout')

@section('content')
    <div class="h-screen md:grid grid-cols-3">
        <div class="p-5 flex items-center justify-center bg-[#472A12]">
            <form method="post" action="{{ route('register.send_otp') }}" class="w-full">
                @csrf
                <p class="text-2xl font-bold mb-10 text-white"><i class="fa-solid fa-lock ml-2"></i>{{ __('dashboard.verify_email') }}</p>

                <div class="mb-4" id="email_div">
                    <label for="otp" class="block mb-1 text-white ">{{ __('dashboard.used_email_for_otp') }}</label>
                    <div type="otp" id="otp" name="otp" class="w-full p-2 border bg-gray-100 rounded-lg">
                        {{ auth()->user()->email }}
                    </div>
                </div>

                <div class="justify-center flex flex-col">
                    <button type="submit"  class="disableBtn px-4 py-2 bg-[#FDCB16] hover:bg-[#E7D2B8] text-black rounded-lg ">{{ __('dashboard.verify') }}</button>
                    <p class="text-sm mt-2 text-white">{{ __('dashboard.edit_your_email')  }}  <span onclick="location.href='{{ route('register.edit_mail_page') }}'" class="font-semibold underline cursor-pointer mr-1">{{ __('dashboard.click_here') }}</span></p>
                </div>
            </form>
        </div>
        <div class="p-5 flex items-center justify-center col-span-2">
            <img class="w-[50%] rounded-lg" src="{{ asset('images/design/3.webp') }}">
        </div>
    </div>
@endsection