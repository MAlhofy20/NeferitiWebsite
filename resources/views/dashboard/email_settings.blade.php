@extends('dashboard.layout')

@section('content')
    <x-dashboard.header >
        <div class="text-xl font-bold">{{ __('dashboard.email_settings') }}</div>
    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-1/2">
        <!-- Content here -->
        <div >
            <form method="post" action="{{ route('dashboard.email_settings.update') }}" class="w-full">
                @csrf
                <p class="text-2xl font-bold mb-10 text-black"><i class="fa-solid fa-envelope mx-2"></i>{{ __('dashboard.email_settings') }}</p>

                @foreach ($settings as $setting)
                    <div class="mb-4">
                        <label for="{{ $setting->key }}" class="block mb-1 text-black">{{ $setting->key }}</label>
                        <input type="text" id="{{ $setting->key }}" name="{{ $setting->key }}" value="{{ $setting->value }}"
                            class="w-full p-2 border bg-gray-100 rounded-lg">
                    </div>
                @endforeach

                <div class="justify-center flex flex-col"></div>
                    <button type="submit"  class="disableBtn px-4 py-2 bg-[#FDCB16] hover:bg-[#E7D2B8] text-black rounded-lg ">{{ __('dashboard.update') }}</button>
                </div>

            </form>
        </div>
    </div>
    @endsection
