@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.properties.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.properties') }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.edit_property') }}</div>
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
                        @foreach (session('channex_errors')['details'] ?? session('channex_errors') as $key => $errorGroup)
                            @if (session('channex_errors')['details'] ?? false)
                                @foreach ($errorGroup as $error)
                                    <li><strong>{{ $key }}:</strong> {{ $error }}</li>
                                @endforeach
                            @else
                                <li>{{ $errorGroup }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('dashboard.properties.update', $property['attributes']['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- استخدم طريقة PUT لتحديث البيانات --}}
                <div class="mb-4">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.property_title') }}</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $property['attributes']['title']) }}"
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
                                <option value="{{ $type['name_en'] }}" @if (old('property_type', $property['attributes']['property_type']) == $type['name_en']) selected @endif>
                                    {{ $type['name_' . lang()] ?? $type['name_en'] }} 
                                </option>
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
                                <option value="{{ $currency['code'] }}" @if (old('currency', $property['attributes']['currency']) == $currency['code']) selected @endif>
                                    {{ $currency['name_' . lang()] ?? $currency['name_en'] }} ({{ $currency['code'] }})
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
                                <option value="{{ $country['code'] }}" @if (old('country', $property['attributes']['country']) == $country['code']) selected @endif>
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
                                <option value="{{ $timezone['code'] }}" @if (old('timezone', $property['attributes']['timezone']) == $timezone['code']) selected @endif>
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
                        <input type="text" id="state" name="state" value="{{ old('state', $property['attributes']['state']) }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('state')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="city"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.city') }}</label>
                        <input type="text" id="city" name="city" value="{{ old('city', $property['attributes']['city']) }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('city')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 w-full">
                    <label for="address"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.address') }}</label>
                    <input type="text" id="address" name="address" value="{{ old('address', $property['attributes']['address']) }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex gap-2">
                    <div class="mb-4 w-full">
                        <label for="latitude"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.latitude') }}</label>
                        <input type="text" id="latitude" name="latitude" value="{{ old('latitude', $property['attributes']['latitude']) }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('latitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label for="longitude"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.longitude') }}</label>
                        <input type="text" id="longitude" name="longitude" value="{{ old('longitude', $property['attributes']['longitude']) }}"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('longitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <hr class="w-full my-4 mx-auto">
                <p class="text-sm font-semibold mb-2">{{ __('dashboard.price_setting') }}</p>


                <hr class="w-full my-4 mx-auto">
                @if (request('fill_in_the_details'))
                    <p id="fill_in_the_details" class="text-green-500 ">{{ __('dashboard.Complete the details') }}</p>
                @endif
                <p class="text-sm font-semibold mb-2">{{ __('dashboard.content') }}</p>
        
                <div class="flex gap-2">
                    <div class="mb-4 w-full">
                        <label for="logo"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.property_logo') }}</label>
                        <input onchange="previewLogo(event)" type="file" id="logo" name="logo_url"
                            class=" mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('logo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="logoPreview" class="mb-4 w-full ">
                        @if($property['attributes']['logo_url'])
                            <div class="mb-4">
                                <img src="{{ $property['attributes']['logo_url'] }}" alt="loading.." class="w-32 h-32 object-cover rounded mx-auto">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mb-4 w-full">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.description') }}</label>
                    <textarea id="description" name="description" rows="3"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-2 hover:shadow outline-none focus:shadow">{{ old('description', $property['attributes']['content']['description']) }}</textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                {{-- facilities --}}
                <div class="mb-4 w-full">
                    <div class="mb-4 w-full">
                        <label for="facility"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.facilities_of_property') }}</label>
                        <select id="facility" name="facilities[]" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2" multiple>
                            @foreach ($facilities_categories as $category)
                                <option class="select2-results__option select2-results__option--group bg-gray-300 text-center" label="{{ $category['name_' . lang()] }}"></option>
                                @foreach ($category['facilities'] as $facility)
                                    <option value="{{ $facility['channex_id'] }}"
                                    @if (in_array($facility['channex_id'], old('facilities', collect($property['relationships']['facilities']['data'])->pluck('id')->toArray()))) selected @endif>
                                        {{ $facility['name_' . lang()] ?? $facility['name_en'] }}
                                    </option>
                                @endforeach
                                
                            @endforeach
                        </select>
                        @error('country')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 w-full">
                    <label for="important_information"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.important_information') }}</label>
                    <textarea id="important_information" name="important_information" rows="3"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-2 hover:shadow outline-none focus:shadow">{{ old('important_information', $property['attributes']['content']['important_information']) }}</textarea>
                        <p class="text-xs text-gray-500">{{ __('dashboard.Will be included into Booking confirmation emails.') }}</p>
                    @error('important_information')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="mb-4 w-full">
                        <label for="photos" class="block text-sm font-medium text-gray-700">{{ __('dashboard.property_photos') }}</label>
                        <input type="file" id="photos" name="photos[]" multiple onchange="previewPhotos(event)"
                            class=" mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('photos')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <div id="photosPreview" class="mb-4 mt-1 w-full grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 justify-center">
                            @if(isset($property['attributes']['content']['photos']) && is_array($property['attributes']['content']['photos']))
                                @foreach ($property['attributes']['content']['photos'] as $photo)
                                    <div class="mb-4" id="div-{{ $photo['id'] }}">
                                        <img src="{{ $photo['url'] }}" alt="Current Photo" class="w-[200px] h-[200px] object-cover rounded mx-auto">
                                        <button type="button" onclick="deletePhoto('{{ $photo['id'] }}')" class="disableBtn w-full px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                    </div>
                                @endforeach
                            @endif

                            <!-- Preview images will be displayed here -->
                        </div>    
                    </div>
                </div>
                {{-- submit btn --}}
                <div class="flex">
                    <button type="submit"
                        class="disableBtn px-6 py-2 bg-black rounded-lg text-white hover:bg-[#FCCA16]">{{ __('dashboard.update') }}</button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-1/3">
            <div class="h-3 bg-green-500 w-10 rounded">

            </div>
            @if (lang() == 'en')
                <p class="font-semibold text-gray-500">
                    On this page, you can update the property's details, including images, services, and other essential information. You have the freedom to make adjustments as needed, ensuring that the property data accurately reflects its current state and meets your needs.    
                </p>
            @else
                <p class="font-semibold text-gray-500">
                    في هذه الصفحة، يمكنك تحديث تفاصيل العقار، بما في ذلك الصور والخدمات وغيرها من المعلومات الأساسية. لديك الحرية في إجراء التعديلات حسب الحاجة، مما يضمن أن بيانات العقار تعكس حالته الحالية وتلبية احتياجاتك.    
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
                closeOnSelect: false,
                width: '100%'
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7AFj6_m1LaRIONxiDzjJfCsRgIT16K7Y" async defer></script>
    <style>
        #map {
            height: 100vh;
            /* جعل الخريطة تأخذ ارتفاع الشاشة بالكامل */
            width: 100%;
        }
    </style>

    <script>
        function initMap() {
            // إعداد الخريطة
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 51.5285582,
                    lng: -0.2416781
                }, // يمكنك تغيير الإحداثيات هنا لموقع افتراضي
                zoom: 8,
            });

            // إضافة Marker (Pin) على الخريطة
            const marker = new google.maps.Marker({
                position: {
                    lat: 51.5285582,
                    lng: -0.2416781
                }, // نفس الإحداثيات الافتراضية
                map: map,
                draggable: true, // السماح بسحب الـ Marker
            });

            // إضافة مستمع للأحداث عندما يتم تحريك الـ Marker
            marker.addListener('dragend', function(event) {
                const lat = event.latLng.lat();
                const lng = event.latLng.lng();
                console.log("Latitude: " + lat + ", Longitude: " + lng);
            });
        }

        // عند تحميل الصفحة، تفعيل الخريطة
        window.onload = initMap;
    </script>

    <script>
        function previewLogo(event) {
            const previewDiv = document.getElementById('logoPreview');
            const file = event.target.files[0];
            
            // Check if a file was selected
            if (file) {
                const reader = new FileReader();
                
                // Set up the FileReader event
                reader.onload = function(e) {
                    // Create an image element
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Selected Logo';
                    img.className = 'w-[200px] h-[200px] object-cover rounded mx-auto';
                    
                    // Clear the current preview and add the new image
                    previewDiv.innerHTML = '';
                    previewDiv.appendChild(img);
                };
                
                // Read the file as a data URL
                reader.readAsDataURL(file);
            } else {
                // If no file selected, clear the preview
                previewDiv.innerHTML = '';
                @if($property['attributes']['logo_url'])
                    const img = document.createElement('img');
                    img.src = "{{ $property['attributes']['logo_url'] }}";
                    img.alt = 'Current Logo';
                    img.className = 'w-32 h-32 object-cover rounded mx-auto';
                    previewDiv.appendChild(img);
                @endif
            }
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var element = document.getElementById('fill_in_the_details');
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>

<script>
    function deletePhoto(photoId) {
        let url_delete = `{{ route('dashboard.properties.delete_image', ['image_id' => ':photoId']) }}`;
        url_delete = url_delete.replace(':photoId', photoId);
        fetch(url_delete, {
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const photoContainer = document.getElementById('div-' + photoId);
                if (photoContainer) {
                    photoContainer.remove();
                    toast('toast-success', data.message);
                }
            }
        })
        .catch(error => {
            console.error('Error:', error); // Add error handling
        });
    }
</script>
@endpush
