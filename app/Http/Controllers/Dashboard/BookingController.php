<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Functions\ChannexService;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    protected $channexService;

    public function __construct(ChannexService $channexService)
    {
        $this->channexService = $channexService;
    }

    public function index()
    {
        $result = $this->channexService->getBookings();
        $bookings = $result['data'];
        $currentPage = $result['meta']['page'];
        $totalPages = ceil($result['meta']['total'] / $result['meta']['limit']);
        return view('dashboard.bookings.index', compact('bookings', 'currentPage', 'totalPages'));
    }

    public function show($booking_id)
    {
        $result = $this->channexService->getBooking($booking_id);

        $booking = $result['data']['attributes'];
        return view('dashboard.bookings.show', compact('booking'));
    }
}
