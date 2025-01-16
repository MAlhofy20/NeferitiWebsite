@extends('dashboard.layout')

@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.home') }}</div>
    </x-dashboard.header>
    <div class="container mx-auto px-4">
        <!-- اختيار النطاق الزمني -->
        <form method="GET" action="{{ route('dashboard.home') }}" class="mb-4">
            <label for="time_range" class="block text-sm font-medium text-gray-700 mb-2">اختر النطاق الزمني:</label>
            <select name="time_range" id="time_range" class="border-gray-300 rounded-md shadow-sm w-full md:w-auto" onchange="this.form.submit()">
                <option value="day" {{ $timeRange == 'day' ? 'selected' : '' }}>آخر يوم</option>
                <option value="week" {{ $timeRange == 'week' ? 'selected' : '' }}>آخر أسبوع</option>
                <option value="month" {{ $timeRange == 'month' ? 'selected' : '' }}>آخر شهر</option>
                <option value="year" {{ $timeRange == 'year' ? 'selected' : '' }}>آخر سنة</option>
            </select>
        </form>
    
        <!-- الكاردات والشارت -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
            <!-- الكاردات -->
            <div class="flex flex-col gap-4">
                <div class="bg-white shadow rounded-lg p-4 grid grid-cols-3 items-center">
                    <div class="text-blue-500 text-center">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="col-span-2 text-right">
                        <h5 class="text-sm font-semibold text-gray-700">عدد الجلسات</h5>
                        <p class="text-2xl font-bold text-blue-500">{{ $sessionsCount }}</p>
                        <p class="text-xs text-gray-500">جلسات تم تسجيلها في النطاق الزمني</p>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-4 grid grid-cols-3 items-center">
                    <div class="text-green-500 text-center">
                        <i class="fas fa-eye fa-2x "></i>
                    </div>
                    <div class="col-span-2 text-right">
                        <h5 class="text-sm font-semibold text-gray-700">عدد الزيارات</h5>
                        <p class="text-2xl font-bold text-green-500">{{ $visitsCount }}</p>
                        <p class="text-xs text-gray-500">إجمالي زيارات الصفحات المسجلة</p>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-4 grid grid-cols-3 items-center">
                    <div class="text-purple-500 text-center">
                        <i class="fas fa-handshake fa-2x"></i>
                    </div>
                    <div class="col-span-2 text-right">
                        <h5 class="text-sm font-semibold text-gray-700">عدد العملاء المحتملين</h5>
                        <p class="text-2xl font-bold text-purple-500">{{ $potentialLeadsCount }}</p>
                        <p class="text-xs text-gray-500">عملاء محتملين تفاعلوا مع الموقع</p>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-4 grid grid-cols-3 items-center">
                    <div class="text-red-500 text-center">
                        <i class="fas fa-percentage fa-2x"></i>
                    </div>
                    <div class="col-span-2 text-right">
                        <h5 class="text-sm font-semibold text-gray-700">نسبة التحويل</h5>
                        <p class="text-2xl font-bold text-red-500">{{ $conversionRate }}%</p>
                        <p class="text-xs text-gray-500">معدل التحويل مقارنةً بالجلسات</p>
                    </div>
                </div>
            </div>
            
            <!-- الشارت -->
            <div class="col-span-2 bg-white shadow rounded-lg p-4">
                <h3 class="text-sm font-semibold text-gray-800 mb-2">إحصائيات الجلسات والعملاء المحتملين</h3>
                <canvas id="chart" style="height: 250px;"></canvas>
            </div>
        </div>
                
        <!-- الجداول -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
            <!-- جدول الصفحات الأكثر زيارة -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <h3 class="text-sm font-semibold text-gray-800 p-2">الصفحات الأكثر زيارة</h3>
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-gray-600">URL</th>
                            <th class="px-4 py-2 text-gray-600">عدد الزيارات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($topPages as $page)
                        <tr>
                            <td class="px-4 py-2 break-all">{{ $page->url }}</td>
                            <td class="px-4 py-2">{{ $page->visits_count }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center text-gray-500">لا توجد بيانات</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        
            <!-- جدول الدول والمحافظات الأكثر زيارة -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <h3 class="text-sm font-semibold text-gray-800 p-2">الدول والمحافظات الأكثر زيارة</h3>
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-gray-600">الدولة</th>
                            <th class="px-4 py-2 text-gray-600">المحافظة/المدينة</th>
                            <th class="px-4 py-2 text-gray-600">عدد الزيارات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($topLocations as $location)
                        <tr>
                            <td class="px-4 py-2">{{ $location->country ?? 'غير متوفرة' }}</td>
                            <td class="px-4 py-2">{{ $location->city ?? 'غير متوفرة' }}</td>
                            <td class="px-4 py-2">{{ $location->visits_count }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-4 py-2 text-center text-gray-500">لا توجد بيانات</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        
            <!-- جدول مصادر الزيارات الأكثر شيوعًا -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <h3 class="text-sm font-semibold text-gray-800 p-2">مصادر الزيارات الأكثر شيوعًا</h3>
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-gray-600">المصدر</th>
                            <th class="px-4 py-2 text-gray-600">عدد الزيارات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($topReferrers as $referrer)
                        <tr>
                            <td class="px-4 py-2 break-all">{{ $referrer->referrer ?? 'غير معروف' }}</td>
                            <td class="px-4 py-2">{{ $referrer->visits_count }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center text-gray-500">لا توجد بيانات</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- جدول جديد وكاردات جديدة -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <!-- جدول أهم 10 أزرار تم التفاعل معها -->
            <div class="col-span-2 bg-white shadow rounded-lg overflow-hidden">
                <h3 class="text-sm font-semibold text-gray-800 p-2">أهم 10 أزرار تم التفاعل معها</h3>
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-gray-600 text-right">اسم الزر</th>
                            <th class="px-4 py-2 text-gray-600 text-right">عدد التفاعلات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($topActions as $action)
                        <tr>
                            <td class="px-4 py-2">{{ $action->action_name }}</td>
                            <td class="px-4 py-2">
                                <span class="text-green-500 font-bold">{{ $action->actions_count }}</span></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center text-gray-500">لا توجد بيانات</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- الكاردات: زوار الويب وزوار الموبايل -->
            <div class="flex flex-col gap-4">
                <div class="bg-white shadow rounded-lg p-4">
                    <h5 class="text-sm font-semibold text-gray-700">زوار الويب</h5>
                    <p class="text-2xl font-bold text-blue-500">{{ $webVisitorsCount }}</p>
                    <p class="text-xs text-gray-500">عدد الزوار الذين استخدموا أجهزة الويب</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4">
                    <h5 class="text-sm font-semibold text-gray-700">زوار الموبايل</h5>
                    <p class="text-2xl font-bold text-green-500">{{ $mobileVisitorsCount }}</p>
                    <p class="text-xs text-gray-500">عدد الزوار الذين استخدموا أجهزة الموبايل</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($dates),
                datasets: [
                    {
                        label: 'الجلسات',
                        data: @json($sessionsData),
                        borderColor: '#3498db',
                        backgroundColor: 'rgba(52, 152, 219, 0.2)',
                        borderWidth: 2,
                        tension: 0.4
                    },
                    {
                        label: 'العملاء المحتملين',
                        data: @json($leadsData),
                        borderColor: '#e74c3c',
                        backgroundColor: 'rgba(231, 76, 60, 0.2)',
                        borderWidth: 2,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'التاريخ'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'العدد'
                        }
                    }
                }
            }
        });
    </script>
@endsection