<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Country;
use App\Models\Currency;
use App\Models\Timezone;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Functions\ChannexService;
use App\Functions\Upload;
use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\FacilityCategory;

class PropertyController extends Controller
{

    private $channexService;

    public function __construct(ChannexService $channexService)
    {
        $this->channexService = $channexService;
    }

    public function index()
    {
        $response = $this->channexService->getPropertiesByGroup(auth()->user()->group_id, request('page') ?? null); // صفحة 2 على سبيل المثال
        $currentPage = $response['meta']['page'];
        $totalPages = ceil($response['meta']['total'] / $response['meta']['limit']);
        return view('dashboard.properties.index', [
            'properties' => $response['data'],
            'currentPage' => $currentPage,
            'totalPages' => $totalPages
        ]);
    }

    public function create()
    {
        $currencies = Currency::OrderBy('name_'.lang())->get();
        $property_types = PropertyType::orderBy('name_'.lang())->get();
        $countries = Country::orderBy('name_'.lang())->get();
        $timezones = Timezone::orderBy('name_'.lang())->get();
        return view('dashboard.properties.create', compact('currencies', 'property_types', 'countries', 'timezones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'currency' => 'required|exists:currencies,code',
            'country' => 'required|exists:countries,code',
            'state' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',

            'timezone' => 'required|exists:timezones,code',
            'property_type' => 'required|exists:property_types,name_en',
        ]);
        
        $propertyData = [
            'title' => $request->input('title'),
            'currency' => $request->input('currency'),
            'email' => auth()->user()->email,
            'phone' => auth()->user()->phone,
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'timezone' => $request->input('timezone'),
            'property_type' => $request->input('property_type'),
            'group_id' => auth()->user()->group_id,
        ];        
        $response = $this->channexService->createProperty($propertyData);

        if ($response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            return redirect()->back()->with('channex_errors', $response['errors']);
        }
        return redirect()->route('dashboard.properties.index')->with('success', __('dashboard.property created successfully'));
    }

    public function edit($propery_id)
    {
        $currencies = Currency::OrderBy('name_'.lang())->get();
        $property_types = PropertyType::orderBy('name_'.lang())->get();
        $countries = Country::orderBy('name_'.lang())->get();
        $timezones = Timezone::orderBy('name_'.lang())->get();
        $property = $this->channexService->getPropertyById($propery_id)['data'];
        $facilities_categories = FacilityCategory::whereHas('facilities', function($q){
            $q->where('type', 'property');
        })->get();
        // dd($property, request('fill_in_the_details'));
        return view('dashboard.properties.edit', compact('property', 'currencies', 'property_types', 'countries', 'timezones', 'facilities_categories'));
    }

    public function update(Request $request, $propery_id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'currency' => 'required|exists:currencies,code',
            'country' => 'required|exists:countries,code',
            'state' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',

            'timezone' => 'required|exists:timezones,code',
            'property_type' => 'required|exists:property_types,name_en',
            'min_price' => 'nullable|numeric|between:0,9999999.99', // تعديل هنا
            'max_price' => 'nullable|numeric|between:0,9999999.99', // تعديل هنا
            'logo_url' => 'nullable|image',
            'facilities' => 'nullable|array',
            'photos' => 'nullable|array'
        ]);
        $propertyData = [
            'title' => $request->input('title'),
            'currency' => $request->input('currency'),
            'email' => auth()->user()->email,
            'phone' => auth()->user()->phone,
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'timezone' => $request->input('timezone'),
            'property_type' => $request->input('property_type'),
            'group_id' => auth()->user()->group_id,
            'logo_url' => $request->file('logo_url') ? asset(Upload::UploadFile($request->file('logo_url'), 'properties_logos')) : null,
            'facilities' => $request->input('facilities'),
            'content' => [
                'important_information' => $request->input('important_information'),
                'description' => $request->input('description'),
                'photos' => $this->processPhotos($request->file('photos'))      
            ]
        ];
        $response = $this->channexService->updateProperty($propertyData, $propery_id);
        if ($response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            // dd($response['errors']);
            return redirect()->back()->with('channex_errors', $response['errors']);
        }
        return redirect()->back()->with('success', __('dashboard.property updated successfully'));
    }

    private function processPhotos($photos)
    {
        $photoData = [];
        if ($photos) {
            foreach ($photos as $i => $photo) {
                $photoData[] = [
                    'url' => asset(Upload::UploadFile($photo, 'properties_photos')),
                    'position' => $i, // You might want to handle positions if needed
                ];
            }
        }
        return $photoData;
    }

    public function delete(Request $request)
    {
        // الحصول على بيانات العقار
        $property = $this->channexService->getPropertyById($request->id);
    
        // حذف الشعار إذا كان موجودًا
        if (!empty($property['attributes']['logo_url'])) {
            Upload::deleteImage($property['attributes']['logo_url']);
        }
    
        // حذف الصور الموجودة في 'content' تحت 'photos'
        if (!empty($property['attributes']['content']['photos'])) {
            foreach ($property['attributes']['content']['photos'] as $photo) {
                Upload::deleteImage($photo['url']);
            }
        }
    
        // حذف العقار
        $this->channexService->deleteProperty($request->id);
    
        // إرسال استجابة للمستخدم
        return response()->json([
            'success' => true,
            'message' =>  __('dashboard.property deleted successfully'),
        ]);
    }

    public function delete_image(Request $request, $photo_id)
    {
        $photo = $this->channexService->getPhotoById($photo_id);
        $response = $this->channexService->deletePhoto($photo_id);
        if ($response['errors'] ?? false) {
            // تخزين الأخطاء في الجلسة
            // dd($response['errors']);
            return redirect()->back()->with('channex_errors', $response['errors']);
        }
        // dd($photo)  ;
        Upload::deleteImage($photo['data']['attributes']['url']);
        return response()->json([
            'success' => true,
            'message' =>  __('dashboard.image deleted successfully'),
        ]);
    }
}
