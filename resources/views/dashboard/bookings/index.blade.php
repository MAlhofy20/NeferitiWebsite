@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.bookings_list') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- جدول الحجوزات -->
        <div>
            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.ota_reservation_code') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.ota_name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.status') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.customer_username') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.interested_At') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.view') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($bookings as $booking)
                        <tr id="row-{{ $booking['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">{{ $booking['attributes']['ota_reservation_code'] }}</td>
                            <td class="py-2 px-4 text-start items-center">{{ $booking['attributes']['ota_name'] }}</td>
                            <td class="py-2 px-4 text-start items-center">{{ $booking['attributes']['status'] }}</td>
                            <td class="py-2 px-4 text-start items-center">{{ $booking['attributes']['customer']['name'] }}</td>
                            <td class="py-2 px-4 text-start items-center">{{ \Carbon\Carbon::parse($booking['attributes']['inserted_at'])->format('Y-m-d') }}</td>
                            <td class="py-2 px-4 text-start items-center">
                                <button onclick="window.location.href = '{{ route('dashboard.bookings.show', $booking['id']) }}'" 
                                    class="px-2 py-1 text-xs bg-gray-300 rounded text-black">{{ __('dashboard.view') }}</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex items-center mt-4 gap-2 text-xs">
                @if ($currentPage > 1)
                    <a href="{{ route('dashboard.bookings.index', ['page' => $currentPage - 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.previous') }}</a>
                @endif
                <span class="font-semibold text-lg">{{ $currentPage }}</span>
                @if ($currentPage < $totalPages)
                    <a href="{{ route('dashboard.bookings.index', ['page' => $currentPage + 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.next') }}</a>
                @endif
            </div>
        </div>
    </div>
@endsection
