<div class="bg-primary p-6 flex-col justify-between h-screen fixed hidden md:flex md:w-[250px]">
    <div>
        <div role="button" onclick="location.href='{{ route('dashboard.home') }}'"
            class="flex items-center mb-8 justify-center">
            {{-- <span class="text-xl font-bold">SPACEREMIT</span> --}}
            <img src="{{ asset('dash/images/4.png') }}">
        </div>
        <nav class="space-y-1 max-h-96 overflow-y-scroll scrollbar-hide">
            <a href="{{ route('dashboard.home') }}"
                class="flex items-center  {{ Route::currentRouteName() == 'dashboard.home' ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-house mx-2"></i>
                {{ __('dashboard.home') }}
            </a>
            <a href="{{ route('dashboard.admin.index') }}"
                class="flex items-center  {{ Route::is('dashboard.admin.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-user-tie mx-2"></i>
                {{ __('dashboard.admins') }}
            </a>
            {{-- <a href="{{ route('dashboard.countries.index') }}"
                class="flex items-center  {{ Route::is('dashboard.countries.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-globe mx-2"></i>
                {{ __('dashboard.geographical_scope') }}
            </a> --}}
            <a href="{{ route('dashboard.products.index') }}"
                class="flex items-center  {{ Route::is('dashboard.products.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-tags mx-2"></i>
                {{ __('dashboard.products') }}
            </a>
            <a href="{{ route('dashboard.projects.index') }}"
                class="flex items-center  {{ Route::is('dashboard.projects.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-building mx-2"></i>
                {{ __('dashboard.projects') }}
            </a>
            <a href="{{ route('dashboard.blogs.index') }}"
                class="flex items-center  {{ Route::is('dashboard.blogs.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-blog mx-2"></i>
                {{ __('dashboard.blogs') }}
            </a>
            <a href="{{ route('dashboard.testimonials.index') }}"
                class="flex items-center  {{ Route::is('dashboard.testimonials.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-comment mx-2"></i>
                {{ __('dashboard.testimonials') }}
            </a>
            <a href="{{ route('dashboard.partners.index') }}"
                class="flex items-center  {{ Route::is('dashboard.partners.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-handshake mx-2"></i>
                {{ __('dashboard.partners') }}
            </a>
            {{-- <a href="{{ route('dashboard.users.index') }}"
                class="flex items-center  {{ Route::is('dashboard.users.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-users mx-2"></i>
                {{ __('dashboard.users') }}
            </a> --}} 
            {{-- settings --}}
            <a href="{{ route('dashboard.settings.index') }}"
                    class="flex items-center  {{ Route::is('dashboard.settings.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                    <i class="fa-solid fa-gear mx-2"></i>
                {{ __('dashboard.settings') }}
            </a>


            <a href="{{ route('dashboard.profile') }}"
                class="flex items-center  {{ Route::is('dashboard.profile.*') ? 'bg-white' : 'text-white' }} hover:bg-secondary  rounded-lg px-3 py-3">
                <i class="fa-solid fa-user mx-2"></i>
                {{ __('dashboard.profile') }}
            </a>

        </nav>
    </div>
    <div class="space-y-1 border-gray-700 pt-4">
        @if (lang('ar'))
            <a href="{{ route('lang', 'en') }}"
                class="flex items-center  bg-white hover:bg-secondary rounded-lg px-3 py-3">
                <i class="fa-solid fa-earth-americas mx-2"></i>{{ __('dashboard.change_language') }}
            </a>
        @else
            <a href="{{ route('lang', 'ar') }}"
                class="flex items-center  bg-white hover:bg-secondary rounded-lg px-3 py-3">
                <i class="fa-solid fa-earth-americas mx-2"></i>{{ __('dashboard.change_language') }}
            </a>
        @endif
        <a onclick="document.getElementById('logoutForm').submit()" role="button"
            class="flex items-center  bg-white hover:bg-secondary rounded-lg px-3 py-3">
            <i class="fas fa-sign-out-alt mx-2 w-5"></i> {{ __('dashboard.logout') }}
        </a>

    </div>
    <form id="logoutForm" action="{{ route('dashboard.logout') }}" method="POST" class="hidden">
        @csrf
    </form>

</div>
