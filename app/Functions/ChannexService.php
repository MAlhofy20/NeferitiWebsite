<?php

namespace App\Functions;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ChannexService
{
    protected $apiBaseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiBaseUrl = "https://staging.channex.io/api/v1";
        $this->apiKey = "uBGh921sy7CoSU8A8BS5m6UiF0nVm896IDARxUB9I89gvMEd5U0q0E0d8jxC9hog";
    }

    public function getPropertyFacilities()
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/property_facilities/options");

        return $response->json();
    }

    public function getRoomFacilities()
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/room_facilities/options");

        return $response->json();
    }

    public function createGroup($title)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/groups", [
            'group' => [
                'title' => $title,
            ],
        ]);

        return $response->json();
    }

    public function inviteUserToGroup($groupId, $userEmail, $role = 'user', $overrides = [])
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])
            ->post("{$this->apiBaseUrl}/group_users", [
                'invite' => [
                    'group_id' => $groupId,
                    'user_email' => $userEmail,
                    'role' => $role,
                    'overrides' => $overrides,
                ],
            ]);

        return $response->json();
    }

    public function createProperty(array $propertyData)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/properties", [
            'property' => $propertyData,
        ]);

        return $response->json();
    }

    public function getPropertiesByGroup($groupId, $page = 1)
    {
        // إرسال الطلب إلى API مع رقم الصفحة المحدد
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/properties?group_id={$groupId}&pagination[page]={$page}");
    
        return $response->json();
    }

    public function getPropertyById($propertyId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/properties/{$propertyId}");
        return $response->json();
    }

    public function updateProperty(array $propertyData, $propertyId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->put("{$this->apiBaseUrl}/properties/{$propertyId}", [
            'property' => $propertyData,
        ]);

        return $response->json();
    }

    public function deleteProperty($propertyId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->delete("{$this->apiBaseUrl}/properties/{$propertyId}");
        return $response->json();
    }

    public function getPhotoById($photoId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/photos/{$photoId}");
        return $response->json();
    }

    public function deletePhoto($photoId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->delete("{$this->apiBaseUrl}/photos/{$photoId}");
        return $response->json();
    }

    public function generateChannelsToken($groupId, $propertyId, $username)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/auth/one_time_token", [
                'group_id' => $groupId,
                'property_id' => $propertyId,
                'username' => $username,
        ]);

        return $response->json();
    }

    public function getRoomsByGroupId($propertyId, $page = 1)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/room_types?filter[property_id]={$propertyId}&pagination[page]={$page}");
    
        return $response->json();
    }

    public function createRoom(array $roomData)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/room_types", [
            'room_type' => $roomData,
        ]);

        return $response->json();
    }

    public function getRoomById($roomId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/room_types/{$roomId}");
        return $response->json();
    }

    public function updateRoom(array $roomData, $roomId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->put("{$this->apiBaseUrl}/room_types/{$roomId}", [
            'room_type' => $roomData,
        ]);

        return $response->json();
    }

    public function deleteRoom($roomId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->delete("{$this->apiBaseUrl}/room_types/{$roomId}");
        
        return $response->json();
    }

    public function createRatePlan(array $ratePlanData)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/rate_plans", [
            'rate_plan' => $ratePlanData,
        ]);

        return $response->json();
    }

    public function getRatePlanByRoomId($roomId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/rate_plans?filter[room_type_id]={$roomId}");
        return $response->json();
    }

    public function updateRatePlan(array $ratePlanData, $ratePlanId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->put("{$this->apiBaseUrl}/rate_plans/{$ratePlanId}", [
            'rate_plan' => $ratePlanData,
        ]);
        return $response->json();
    }

    public function deleteRatePlan($ratePlanId)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->delete("{$this->apiBaseUrl}/rate_plans/{$ratePlanId}");
        return $response->json();
    }

    public function getBookings($page = 1)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/bookings?pagination[page]={$page}");
        
        return $response->json();
    }

    public function getBooking($booking_id)
    {
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->apiBaseUrl}/bookings/{$booking_id}");
        
        return $response->json();

    }

    public function updateAvailability($roomTypeId, $propertyId, $availability, $startDate, $endDate)
    {
        $availability = intval($availability);
        $response = Http::withHeaders([
            'user-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/availability", [
            'values' => [
                [
                    'property_id' => $propertyId,
                    'room_type_id' => $roomTypeId,
                    'date_from' => $startDate,
                    'date_to' => $endDate,
                    'availability' => $availability,
                ]
            ]
        ]);
    // تسجيل البيانات في الـ log
    Log::info('Test Case: Full Sync Availability Update', [
        'Test Case Number' => 1, // يمكنك تحديث رقم الحالة
        'API Endpoint' => "POST: {$this->apiBaseUrl}/availability",
        'UTC Timestamp' => now()->toDateTimeString(),
        'Response ID' => $response['data'][0]['id'] ?? 'No ID returned',
    ]);
        return $response->json();
    }

    

}
