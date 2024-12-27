@extends('dashboard.layout')
@section('content')
<x-dashboard.header>
    <div class="text-xl font-bold">{{ __('dashboard.bookings_list') }}</div>
    <div class="text-sm text-gray-500">{{ __('dashboard.booking_details') }}</div>
</x-dashboard.header>

<div class="bg-white rounded-lg shadow p-6 h-full">
    <h1 class="text-2xl font-bold mb-4">{{ __('dashboard.booking_details') }} - {{ $booking['unique_id'] }}</h1>
    
    <div class="bg-white p-6 shadow rounded-lg">
        <h2 class="text-lg font-semibold">{{ __('dashboard.basic_info') }}</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div><strong>{{ __('dashboard.status') }}:</strong> {{ $booking['status'] }}</div>
            <div><strong>{{ __('dashboard.source_ota') }}:</strong> {{ $booking['ota_name'] }}</div>
            <div><strong>{{ __('dashboard.reservation_id') }}:</strong> {{ $booking['unique_id'] }}</div>
            <div><strong>{{ __('dashboard.booking_id') }}:</strong> {{ $booking['booking_id'] }}</div>
            <div><strong>{{ __('dashboard.booked_at') }}:</strong> {{ \Carbon\Carbon::parse($booking['inserted_at'])->format('l, F j, Y') }}</div>
            <div><strong>{{ __('dashboard.property') }}:</strong> {{ $booking['property_id'] }}</div>
        </div>

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.checkin_details') }}</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div><strong>{{ __('dashboard.checkin_date') }}:</strong> {{ $booking['arrival_date'] }}</div>
            <div><strong>{{ __('dashboard.checkout_date') }}:</strong> {{ $booking['departure_date'] }}</div>
            <div><strong>{{ __('dashboard.nights') }}:</strong> 1</div>
            <div><strong>{{ __('dashboard.rooms') }}:</strong> {{ count($booking['rooms']) }}</div>
            <div><strong>{{ __('dashboard.occupancy') }}:</strong> A: {{ $booking['occupancy']['adults'] }} C: {{ $booking['occupancy']['children'] }} I: {{ $booking['occupancy']['infants'] }}</div>
        </div>

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.customer') }}</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div><strong>{{ __('dashboard.name') }}:</strong> {{ $booking['customer']['name'] }} {{ $booking['customer']['surname'] }}</div>
            <div><strong>{{ __('dashboard.email') }}:</strong> {{ $booking['customer']['mail'] }}</div>
            <div><strong>{{ __('dashboard.phone') }}:</strong> {{ $booking['customer']['phone'] }}</div>
            <div><strong>{{ __('dashboard.country') }}:</strong> {{ $booking['customer']['country'] }}</div>
        </div>

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.room_details') }}</h2>
        @foreach($booking['rooms'] as $room)
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <h3 class="font-semibold">{{ __('dashboard.room_type') }}: {{ $room['meta']['room_type_code'] }}</h3>
            <p><strong>{{ __('dashboard.price') }}:</strong> {{ $room['amount'] }} {{ $booking['currency'] }}</p>
            <p><strong>{{ __('dashboard.meal_plan') }}:</strong> {!! nl2br(e($room['meta']['meal_plan'])) !!}</p>
            <p><strong>{{ __('dashboard.smoking_preferences') }}:</strong> {{ $room['meta']['smoking_preferences'] }}</p>
        </div>
        @endforeach

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.guarantee') }}</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div><strong>{{ __('dashboard.card_type') }}:</strong> {{ $booking['guarantee']['card_type'] }}</div>
            <div><strong>{{ __('dashboard.card_number') }}:</strong> {{ $booking['guarantee']['card_number'] }}</div>
            <div><strong>{{ __('dashboard.expiration_date') }}:</strong> {{ $booking['guarantee']['expiration_date'] }}</div>
            <div><strong>{{ __('dashboard.cardholder_name') }}:</strong> {{ $booking['guarantee']['cardholder_name'] }}</div>
        </div>

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.notes') }}</h2>
        <div class="p-4 bg-gray-50 rounded-lg mb-6">
            {!! nl2br(e($booking['notes'])) !!}
        </div>

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.price_breakdown') }}</h2>
        @foreach($booking['rooms'] as $room)
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <p><strong>{{ __('dashboard.room_price') }}:</strong> {{ $room['amount'] }} {{ $booking['currency'] }}</p>
            @foreach($room['taxes'] as $tax)
            <p><strong>{{ $tax['name'] }}:</strong> {{ $tax['total_price'] }} {{ $booking['currency'] }}</p>
            @endforeach
        </div>
        @endforeach

        <h2 class="text-lg font-semibold mb-2">{{ __('dashboard.total_amount') }}</h2>
        <div class="p-4 bg-gray-50 rounded-lg">
            <strong>{{ $booking['amount'] }} {{ $booking['currency'] }}</strong>
        </div>
    </div>
</div>
@endsection
