@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.partners') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.partners.create') }}';"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.image') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($partners as $partner)
                        <tr id="row-{{ $partner->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">  
                                <img src="{{ asset($partner->image) }}" alt="partner-logo" class="w-20 h-20 rounded-lg">
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 items-center">
                                    <form action="{{ route('dashboard.partners.destroy', $partner->id) }}" method="POST"
                                        id="deletePartnerForm{{ $partner->id }}" class="flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <i role="button" onclick="confirmDelete('deletePartnerForm{{ $partner->id }}', '{{ lang() }}')"
                                            class="fa-solid fa-trash hover:text-red-500"></i>
                                    </form>
                                </div>

                            </td>

                        </tr>
                    @endforeach
                </tbody>

                {{-- {{ $products->links() }} --}}
            </table>
            {{-- <div class="flex items-center mt-4 gap-2 text-xs">
                <!-- زر Previous -->
                @if ($currentPage > 1)
                    <a href="{{ route('dashboard.products.index', ['page' => $currentPage - 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.previous') }}</a>
                @endif

                <!-- رقم الصفحة الحالية -->
                <span class="font-semibold text-lg">{{ $currentPage }}</span>

                <!-- زر Next -->
                @if ($currentPage < $totalPages)
                    <a href="{{ route('dashboard.products.index', ['page' => $currentPage + 1]) }}"
                        class="px-3 py-1 text-white rounded bg-gray-800">{{ __('dashboard.next') }}</a>
                @endif
            </div> --}}

        </div>
    </div>
@endsection

@push('js')
@endpush
