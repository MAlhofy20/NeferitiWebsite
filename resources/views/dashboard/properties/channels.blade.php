@extends('dashboard.layout')

@section('content')
<x-dashboard.header>
    <a href="{{ route('dashboard.properties.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.properties') }}</a> |
    <div class="text-xl font-bold">{{ __('dashboard.channels') }} ({{ $property['title'] }})</div>
</x-dashboard.header>

<div>
    <iframe 
        src="https://staging.channex.io/auth/exchange?oauth_session_key={{ $token }}&app_mode=headless&redirect_to=/channels&property_id={{ $property['id'] }}"
        style="width: 100%; height: 600px; border: none;">
    </iframe>
</div>
@endsection