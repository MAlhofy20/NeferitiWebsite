<div class="flex justify-between items-center mb-5">
    <div class="flex gap-2 items-center">
        <button type="button" onclick="openNav('MainSidenav')"
            class="MainSidenav inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden ">
            <svg class="w-5 h-5 MainSidenav" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="MainSidenav"
            class="itsSideMenu  fixed z-50 inset-y-0 right-0  w-0 bg-black text-white transition-width duration-500 pt-16 overflow-y-scroll shadow-2xl">
            <a role="button" onclick="closeNav('MainSidenav')" class="absolute top-0 right-6 text-4xl">&times;</a>
            <div class="space-y-1">
                <a href="{{ route('dashboard.home') }}" class="flex items-center text-white {{ Route::currentRouteName() == 'dashboard.home' ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-house mx-2"></i>
                    {{ __('dashboard.home') }}
                </a>
                <a href="{{ route('dashboard.pomo') }}" class="flex items-center text-white {{ Route::currentRouteName() == 'dashboard.pomo' ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-stopwatch-20 mx-2"></i>
                    ادارة المهام
                </a>

                <a href="{{ route('dashboard.admin.index') }}" class="flex items-center text-white {{ Route::is('dashboard.admin.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-house mx-2"></i>
                    {{ __('dashboard.admin.index') }}
                </a>
                {{-- countries --}}
                {{-- <a href="{{ route('dashboard.countries.index') }}" class="flex items-center text-white {{ Route::is('dashboard.countries.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-globe mx-2"></i>
                    {{ __('dashboard.countries.index') }}
                </a> --}}

                {{-- products --}}
                <a href="{{ route('dashboard.products.index') }}" class="flex items-center text-white {{ Route::is('dashboard.products.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-tags mx-2"></i>
                    {{ __('dashboard.products.index') }}
                </a>
                <a href="{{ route('dashboard.partners.index') }}" class="flex items-center text-white {{ Route::is('dashboard.partners.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-handshake mx-2"></i>
                    {{ __('dashboard.partners.index') }}
                </a>

                {{-- users --}}
                {{-- <a href="{{ route('dashboard.users.index') }}" class="flex items-center text-white {{ Route::is('dashboard.users.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-users mx-2"></i>
                    {{ __('dashboard.users.index') }}
                </a> --}}

                {{-- settings --}}
                <a href="{{ route('dashboard.settings.index') }}" class="flex items-center text-white {{ Route::is('dashboard.settings.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-gear mx-2"></i>
                    {{ __('dashboard.settings.index') }}
                </a>

                {{-- Profile --}}
                <a href="{{ route('dashboard.profile') }}" class="flex items-center text-white {{ Route::is('dashboard.profile.*') ? 'bg-primary' : '' }} hover:bg-primary rounded-lg px-3 py-3">
                    <i class="fa-solid fa-user mx-2"></i>
                    {{ __('dashboard.profile') }}
                </a>
                {{-- like side bar --}}

                @if (lang('ar'))
                <a href="{{ route('lang', 'en') }}" class="flex items-center text-white bg-primary hover:bg-yellow-600 rounded-lg px-3 py-3">
                    <i class="fa-solid fa-earth-americas mx-2"></i>{{ __('dashboard.change_language') }}
                </a>
                @else
                <a href="{{ route('lang', 'ar') }}" class="flex items-center text-white bg-primary hover:bg-yellow-600 rounded-lg px-3 py-3">
                    <i class="fa-solid fa-earth-americas mx-2"></i>{{ __('dashboard.change_language') }}
                </a>
                @endif
                <a onclick="document.getElementById('logoutForm').submit()" role="button" class="flex items-center text-white bg-primary hover:bg-yellow-600 rounded-lg px-3 py-3">
                    <i class="fas fa-sign-out-alt mx-2 w-5"></i> {{ __('dashboard.logout') }}
                </a>

            </div>
        
            <form id="logoutForm" action="{{ route('dashboard.logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
        {{ $slot }}
    </div>
    <div class="hidden md:flex items-center gap-2">
        <div class="rounded-lg w-10 h-10 bg-black flex justify-center items-center">
            <i class="fas fa-bell text-2xl text-white"></i>
        </div>
        <div role="button" onclick="location.href='{{ route('dashboard.profile') }}'" class="flex items-center gap-2">
            <img src="{{ auth('admin')->user()->image ? asset(auth('admin')->user()->image) : asset('dash/images/face.jpg') }}" alt="User Avatar" class="rounded-lg w-10 h-10">
            <div>
                <p class="text-sm text-gray-500">{{ __('dashboard.welcome') }}</p>
                <span>{{ auth('admin')->user()->name }}</span>
            </div>
        </div>
    </div>
</div>
