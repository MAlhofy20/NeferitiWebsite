<?php

namespace App\Http\Controllers\Dashboard;

use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Models\FacilityCategory;
use App\Functions\ChannexService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    private $channexService;

    public function __construct(ChannexService $channexService)
    {
        $this->channexService = $channexService;
    }

    public function index($propertyId)
    {
        $response = $this->channexService->getRoomsByGroupId($propertyId);
        $currentPage = $response['meta']['page'];
        $totalPages = ceil($response['meta']['total'] / $response['meta']['limit']);

        $property = $this->channexService->getPropertyById($propertyId);
        return view('dashboard.properties.rooms.index', [
            'rooms' => $response['data'],
            'property' => $property['data']['attributes'],
            'currentPage' => $currentPage,
            'totalPages' => $totalPages
        ]);
    }


    public function create($propertyId)
    {
        $property = $this->channexService->getPropertyById($propertyId)['data']['attributes'];
        $facilities_categories = FacilityCategory::whereHas('facilities', function($q){
            $q->where('type', 'room');
        })->get();
        return view('dashboard.properties.rooms.create', compact('property', 'facilities_categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'room_kind' => 'required',
            'capacity' => 'nullable|numeric',
            'occ_adults' => 'nullable|numeric',
            'occ_children' => 'nullable|numeric',
            'occ_infants' => 'nullable|numeric',
            'description' => 'nullable|max:1000',
            'facilities' => 'nullable|array',
            'photos' => 'nullable|array',
            'price' => 'required|numeric|between:0,9999999.99', // تعديل هنا
        ]);

        $roomData = [
            'property_id' => $request->input('property_id'),
            'title' => $request->input('title'),
            'count_of_rooms' => $request->input('count_of_rooms'),
            'room_kind' => $request->input('room_kind'),
            'capacity' => $request->input('capacity'),
            'occ_adults' => $request->input('occ_adults'),
            'default_occupancy' => $request->input('occ_adults'),
            'occ_children' => $request->input('occ_children'),
            'occ_infants' => $request->input('occ_infants'),
            'facilities' => $request->input('facilities'),
            'content' => [
                'description' => $request->input('description'),
                'photos' => $this->processPhotos($request->file('photos'))      
            ]
        ];

        $room_response = $this->channexService->createRoom($roomData);

        if ($room_response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            // dd($room_response['errors']);
            return redirect()->back()->with('channex_errors', $room_response['errors']);
        }

        $ratePlanData = [
            'title' => $request->input('title'),
            'property_id' => $room_response['data']['relationships']['property']['data']['id'], // not exist in blade
            'room_type_id' => $room_response['data']['id'], // not exist in blade
            'options' => [
                [
                    'occupancy' => $roomData['default_occupancy'],
                    'is_primary' => true,
                    'rate' => $request->input('price'),  
                ]
            ],
        ];
        
        $rate_response = $this->channexService->createRatePlan($ratePlanData);
        if ($rate_response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            // dd($rate_response['errors']);
            return redirect()->back()->with('channex_errors', $rate_response['errors']);
        }

        $availability_response = $this->channexService->updateAvailability(
            $room_response['data']['id'], // Room Type ID
            $room_response['data']['relationships']['property']['data']['id'],
            $request->input('count_of_rooms'), // عدد الغرف المتاحة
            now()->format('Y-m-d'),
            now()->addDays(500)->format('Y-m-d') // 500 يوم
        );


        if ($availability_response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            // dd($availability_response['errors']);
            return redirect()->back()->with('channex_errors', $availability_response['errors']);
        }

        return redirect()->route('dashboard.rooms.index', $request->input('property_id'))->with('success', __('dashboard.room created successfully'));
    }


    public function edit($propertyId, $roomId)
    {
        $room = $this->channexService->getRoomById($roomId)['data'];
        $property = $this->channexService->getPropertyById($propertyId)['data']['attributes'];
        $facilities_categories = FacilityCategory::whereHas('facilities', function($q){
            $q->where('type', 'room');
        })->get();
        $ratePlan = $this->channexService->getRatePlanByRoomId($roomId);
        $price = $ratePlan['data'][0]['attributes']['options'][0]['rate'] ?? null;
        return view('dashboard.properties.rooms.edit', compact('room', 'property', 'facilities_categories', 'price'));
    }


    public function update(Request $request, $propertyId, $roomId)
    {
        $request->validate([
            'title' => 'required|max:255',
            'room_kind' => 'required',
            'capacity' => 'nullable|numeric',
            'occ_adults' => 'nullable|numeric',
            'occ_children' => 'nullable|numeric',
            'occ_infants' => 'nullable|numeric',
            'description' => 'nullable|max:1000',
            'facilities' => 'nullable|array',
            'photos' => 'nullable|array',
            'price' => 'required|numeric|between:0,9999999.99', // تعديل هنا
        ]);

        $roomData = [
            'title' => $request->input('title'),
            'count_of_rooms' => $request->input('count_of_rooms'),
            'room_kind' => $request->input('room_kind'),
            'capacity' => $request->input('capacity'),
            'occ_adults' => $request->input('occ_adults'),
            'default_occupancy' => $request->input('occ_adults'),
            'occ_children' => $request->input('occ_children'),
            'occ_infants' => $request->input('occ_infants'),
            'facilities' => $request->input('facilities'),
            'content' => [
                'description' => $request->input('description'),
                'photos' => $this->processPhotos($request->file('photos'))      
            ]
        ];

        $response = $this->channexService->updateRoom($roomData, $roomId);

        Log::info('Update Room', [
            'Endpoint' => "PUT: room_types/{$roomId}",
            'UTC Timestamp' => now()->toDateTimeString(),
            'Response ID' => $response['data']['id'] ?? 'No ID returned',
        ]);

        if ($response['errors'] ?? false) {
            return redirect()->back()->with('channex_errors', $response['errors']);
        }

        $ratePlan = $this->channexService->getRatePlanByRoomId($roomId);
        Log::info('get rate plan', [
            'Endpoint' => "GET: /rate_plans?filter[room_type_id]={$roomId}",
            'UTC Timestamp' => now()->toDateTimeString(),
            'Response ID' => $response['data']['id'] ?? 'No ID returned',
        ]);

        if (!empty($ratePlan['data'][0]['id'])) {
            $this->channexService->deleteRatePlan($ratePlan['data'][0]['id']);
            Log::info('delete rate plan', [
                'Endpoint' => "DELETe : rate_plans/{$ratePlan['data'][0]['id']}",
                'UTC Timestamp' => now()->toDateTimeString(),
                'Response ID' => $response['data']['id'] ?? 'No ID returned',
            ]);
    
        }

        $ratePlanData = [
            'title' => $request->input('title'),
            'property_id' => $response['data']['relationships']['property']['data']['id'], // not exist in blade
            'room_type_id' => $response['data']['id'], // not exist in blade
            'options' => [
                [
                    'occupancy' => $roomData['default_occupancy'],
                    'is_primary' => true,
                    'rate' => $request->input('price'),  
                ]
            ],
        ];


        $response2 = $this->channexService->createRatePlan($ratePlanData);
        if ($response2['errors'] ?? false) {
            return redirect()->back()->with('channex_errors', $response2['errors']);
        }
        Log::info('Create new rate plan', [
            'Endpoint' => "POST: rate_plans",
            'UTC Timestamp' => now()->toDateTimeString(),
            'Response ID' => $response2['data']['id'] ?? 'No ID returned',
        ]);

        return redirect()->route('dashboard.rooms.index', $request->input('property_id'))->with('success', __('dashboard.room updated successfully'));
    }

    private function processPhotos($photos)
    {
        $photoData = [];
        if ($photos) {
            foreach ($photos as $i => $photo) {
                $photoData[] = [
                    'url' => asset(Upload::UploadFile($photo, 'rooms_photos')),
                    'position' => $i, // You might want to handle positions if needed
                    "kind"=> "photo",
                ];
            }
        }

        return $photoData;
    }


    public function delete(Request $request)
    {
        $room = $this->channexService->deleteRoom($request->input('id'));

        if (!empty($room['attributes']['content']['photos'])) {
            foreach ($room['attributes']['content']['photos'] as $photo) {
                Upload::deleteImage($photo['url']);
            }
        }

        return response()->json([
            'success' => true,
            'message' =>  __('dashboard.room deleted successfully'),
        ]);

    }




}
