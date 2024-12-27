@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.properties.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.properties') }}</a> |
        <a href="{{ route('dashboard.rooms.index', $property['id']) }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.rooms') }} ({{ $property['title'] }})</a> |
        <div class="text-xl font-bold">{{ __('dashboard.create_room_type') }}</div>
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

            <form action="{{ route('dashboard.rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="property_id" value="{{ $property['id'] }}">
                <div class="mb-4">
                    <label for="title"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.room_title') }}</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-2 ">
                    <div class="mb-4 w-full">
                        <label for="room_kind"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.room_kind') }}</label>
                        <select onchange="changeRoomKind(this.value)" id="room_kind" name="room_kind"
                            class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1">
                            <option value="" disabled selected hidden></option>
                            @foreach (['room', 'dorm'] as $type)
                                <option {{ old('room_kind') == $type ? 'selected' : '' }} value="{{ $type }}">{{ __('dashboard.' . $type) }} </option>
                            @endforeach
                        </select>
                        @error('room_kind')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 w-full">
                        <label for="count_of_rooms"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.count_of_rooms') }}</label>
                            <input type="number" id="count_of_rooms" name="count_of_rooms" value="{{ old('count_of_rooms') }}"
                            class="numbers_only mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
    
                        @error('count_of_rooms')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div id="capacityDiv" class="hidden mb-4 w-full">
                        <label for="capacity"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.capacity') }}</label>
                            <input type="number" id="capacity" name="capacity" value="{{ old('capacity') }}"
                            class="numbers_only mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        <small class="text-gray-500 text-xs">{{ __('dashboard.capacity_note') }}</small>
                        @error('capacity')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <hr class="w-full my-4 mx-auto">
                <p class="text-sm font-semibold mb-2">{{ __('dashboard.Occupancy settings') }}</p>
                <div class="space-y-2 mb-2">
                    <p class="text-gray-500 text-xs">
                        {{ __('dashboard.occupancy_settings_note') }}
                    </p>
                    <p class="text-gray-500 text-xs">{{ __('dashboard.occupancy_settings_note_example') }}</p>    
                </div>
                <div class="mb-4 w-full">
                    <label for="occ_adults"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.occ_adults') }}</label>
                        <input type="number" id="occ_adults" name="occ_adults" value="{{ old('occ_adults') }}"
                        class="numbers_only mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        <small class="text-gray-500 text-xs">{{ __('dashboard.occ_adults_note') }}</small>

                    @error('occ_adults')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 w-full">
                    <label for="occ_children"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.occ_children') }}</label>
                        <input type="number" id="occ_children" name="occ_children" value="{{ old('occ_children', 0) }}"
                        class="numbers_only mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        <small class="text-gray-500 text-xs">{{ __('dashboard.occ_children_note') }}</small>

                    @error('occ_children')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 w-full">
                    <label for="occ_infants"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.occ_infants') }}</label>
                        <input type="number" id="occ_infants" name="occ_infants" value="{{ old('occ_infants', 0) }}"
                        class="numbers_only mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    <small class="text-gray-500 text-xs">{{ __('dashboard.occ_infants_note') }}</small>
                    @error('occ_infants')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 w-full">
                    <label for="price"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.price') }}</label>
                    <input type="text" id="price" name="price" value="{{ old('price') }}"
                        class="decimal_number mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                    @error('price')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <hr class="w-full my-4 mx-auto">
                <p class="text-sm font-semibold mb-2">{{ __('dashboard.content') }}</p>

                <div class="mb-4 w-full">
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">{{ __('dashboard.description') }}</label>
                    <textarea id="description" name="description" rows="3"
                        class="mt-1 w-full rounded-md bg-gray-100 px-2 py-2 hover:shadow outline-none focus:shadow">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                {{-- facilities --}}
                <div class="mb-4 w-full">
                    <div class="mb-4 w-full">
                        <label for="facility"
                            class="block text-sm font-medium text-gray-700">{{ __('dashboard.facilities_of_room') }}</label>
                        <select id="facility" name="facilities[]" class="mt-1 w-full rounded-md bg-gray-100 px-2 py-1 select2" multiple>
                            @foreach ($facilities_categories as $category)
                                <option class="select2-results__option select2-results__option--group bg-gray-300 text-center" label="{{ $category['name_' . lang()] }}"></option>
                                @foreach ($category['facilities'] as $facility)
                                    <option value="{{ $facility['channex_id'] }}">
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

                <div>
                    <div class="mb-4 w-full">
                        <label for="photos" class="block text-sm font-medium text-gray-700">{{ __('dashboard.room_photos') }}</label>
                        <input type="file" id="photos" name="photos[]" multiple onchange="previewPhotos(event)"
                            class=" mt-1 w-full rounded-md bg-gray-100 px-2 py-1 hover:shadow outline-none focus:shadow">
                        @error('photos')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <div id="photosPreview" class="mb-4 mt-1 w-full grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 justify-center">
                            @if(isset($property['attributes']['content']['photos']) && is_array($property['attributes']['content']['photos']))
                                @foreach ($property['attributes']['content']['photos'] as $photo)
                                    <div class="mb-4" id="div-{{ $photo['id'] }}">
                                        <img src="{{ $photo['url'] }}" alt="loading.." class="w-[200px] h-[200px] object-cover rounded mx-auto">
                                        <button type="button" onclick="deletePhoto('{{ $photo['id'] }}')" class="disableBtn w-full px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                    </div>
                                @endforeach
                            @endif

                            <!-- Preview images will be displayed here -->
                        </div>    
                    </div>
                </div>

                {{-- submit btn --}}
                <div class="flex ">
                    <button type="submit"
                        class="disableBtn px-6 py-2 bg-black rounded-lg text-white hover:bg-[#FCCA16]">{{ __('dashboard.create') }}</button>

                </div>
            </form>
        </div>
        {{-- <div class="bg-white rounded-lg shadow p-6 h-full w-full md:w-1/3">
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
        </div> --}}

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


    <script>
        // check exist room kind
        $(document).ready(function() {
            let room_kind = $('#room_kind').val();
            changeRoomKind(room_kind);
        });
        function changeRoomKind(value) {
            if (value == 'dorm') {
                document.getElementById('capacityDiv').classList.remove('hidden');
            }else{
                document.getElementById('capacityDiv').classList.add('hidden');
            }
        }
    </script>
@endpush
