@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.properties.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.properties') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create_property') }}</div>
    </x-dashboard.header>
    <div class="flex gap-2">

        <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-2/3">

            @if ($errors->any())
                <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                    <ul class="list-disc px-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('channex_errors'))
                <div class="border-red-500 bg-red-300 p-4 rounded border-2">
                    <ul class="list-disc px-2">
                        @foreach (session('channex_errors')['details'] as $key => $errorGroup)
                            @foreach ($errorGroup as $error)
                                <li><strong>{{ $key }}:</strong> {{ $error }}</li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('dashboard.properties.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.property_title') }}</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-2 ">

                    <div class="mb-4 w-full">
                        <label for="property_type"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.property_type') }}</label>
                        <select id="property_type" name="property_type"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2">
                            <option value="" disabled selected hidden></option>
                            @foreach ($property_types as $type)
                                <option value="{{ $type['name_en'] }}">{{ $type['name_' . lang() ?? $type['name_en']] }} </option>
                            @endforeach
                        </select>
                        @error('property_type')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 w-full">
                        <label for="currency"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.default_currency') }}</label>
                        <select id="currency" name="currency" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2">
                            <option value="" disabled selected hidden></option>
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency['code'] }}">{{ $currency['name_' . lang()]  ?? $currency['name_en'] }}
                                    ({{ $currency['code'] }})
                                </option>
                            @endforeach
                        </select>
                        @error('currency')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <hr class="w-full my-4 mx-auto">
                <p class="text-sm font-semibold mb-2">{{ __('dashboard.location') }}</p>

                <div class="flex gap-2 ">
                    <div class="mb-4 w-full">
                        <label for="country"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.country') }}</label>
                        <select id="country" name="country" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2">
                            <option value="" disabled selected hidden></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country['code'] }}">
                                    {{ $country['name_' . lang()] ?? $country['name_en'] }} ({{ $country['code'] }})
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="timezone"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.timezone') }}</label>
                        <select id="timezone" name="timezone" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2">
                            <option value="" disabled selected hidden></option>
                            @foreach ($timezones as $timezone)
                                <option value="{{ $timezone['code'] }}">
                                    {{ $timezone['name_' . lang()] ?? $timezone['name_en'] }} ({{ $timezone['code'] }})
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-2">
                    <div class="mb-4 w-full">
                        <label for="state"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.state_region') }}</label>
                        <input type="text" id="state" name="state" value="{{ old('state') }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('state')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="city"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.city') }}</label>
                        <input type="text" id="city" name="city" value="{{ old('city') }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('city')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 w-full">
                    <label for="address"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.address') }}</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex gap-2">
                    <div class="mb-4 w-full">
                        <label for="latitude"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.latitude') }}</label>
                        <input type="text" id="latitude" name="latitude" value="{{ old('latitude') }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('latitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="longitude"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.longitude') }}</label>
                        <input type="text" id="longitude" name="longitude" value="{{ old('longitude') }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('longitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div id="map" class="max-h-96 rounded-2xl"></div>

                {{-- submit btn --}}
                <div class="flex ">
                    <button type="submit"
                        class="disableBtn px-6 py-2 bg-black rounded-lg text-white hover:bg-[#FCCA16]">{{ __('dashboard.create') }}</button>

                </div>
            </form>
        </div>
        <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-1/3">
            <div class="h-3 bg-green-500 w-10 rounded">

            </div>
            @if (lang() == 'en')
                <p class="font-semibold text-gray-500">
                    Nahla system allows you to add images, descriptions, rooms, and other essential details, as well as
                    connect the property with various platforms at a later stage. This approach ensures flexibility in
                    managing your property, allowing you to complete all necessary details gradually and in a way that suits
                    your needs.
                </p>
            @else
                <p class="font-semibold text-gray-500">
                    يتيح لك نظام نحلة إضافة الصور والوصف والغرف، بالإضافة إلى باقي التفاصيل الضرورية، وربط العقار مع المنصات
                    المختلفة في مرحلة لاحقة. هذه الخطوة تضمن لك المرونة في إدارة عقارك وإكمال جميع التفاصيل المهمة بشكل
                    تدريجي ومناسب وفقًا لاحتياجاتك
                </p>
            @endif
        </div>

    </div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .select2-container--default .select2-selection--single {
            padding: .5rem;
            /* إضافة البادينج هنا */
            border-radius: 0.375rem;
            /* الحفاظ على حواف دائرية تتناسب مع Tailwind */
            background-color: #f3f4f6;
            /* اللون الخلفي المناسب لـ Tailwind */
            border: none;
            /* إزالة الإطار */
            min-height: 2.5rem;
            /* لضمان ارتفاع كافي حتى عند عدم وجود عنصر محدد */
            display: flex;
            align-items: center;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            padding-left: 0.5rem;
            /* إضافة padding للنص المختار */
            line-height: 1.25rem;
            /* محاذاة النص بشكل جيد */
            color: #374151;
            /* اللون المناسب للنص */
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #9ca3af;
            /* لون placeholder الذي يناسب Tailwind */
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                // allowClear: rue,
                width: '100%'
            });
        });
    </script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
<style>
    #map {
        height: 100vh;
        /* جعل الخريطة تأخذ ارتفاع الشاشة بالكامل */
        width: 100%;
    }
</style>


<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script>
    // تعيين المملكة العربية السعودية كدولة أساسية (إحداثيات الرياض)
    var map = L.map('map').setView([24.7136, 46.6753], 7);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var currentMarker = null;

    function onMapClick(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        
        // طباعة الإحداثيات في console
        console.log("Latitude: " + lat + ", Longitude: " + lng);

        // تعيين القيم لحقل latitude و longitude
        document.getElementsByName('latitude')[0].value = lat;
        document.getElementsByName('longitude')[0].value = lng;

        // إزالة الماركر القديم إذا كان موجودًا
        if (currentMarker) {
            map.removeLayer(currentMarker);
        }

        // إضافة ماركر جديد في الموقع الجديد
        currentMarker = L.marker([lat, lng]).addTo(map);
    }

    map.on('click', onMapClick);
</script>
@endpush
