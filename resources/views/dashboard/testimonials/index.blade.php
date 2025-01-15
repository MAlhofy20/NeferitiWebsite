@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.testimonials') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.testimonials.create') }}';"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.message') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($testimonials as $testimonial)
                        <tr id="row-{{ $testimonial->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">
                                {{ $testimonial->name }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $testimonial->description }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 items-center">
                                    <form action="{{ route('dashboard.testimonials.destroy', $testimonial->id) }}" method="POST"
                                        id="deleteTestimonialForm{{ $testimonial->id }}" class="flex items-center">
                                        @csrf
                                        @method('DELETE')   
                                        <i role="button" onclick="confirmDelete('deleteTestimonialForm{{ $testimonial->id }}', '{{ lang() }}')"
                                            class="fa-solid fa-trash hover:text-red-500"></i>
                                    </form>
                                </div>

                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
@endsection

@push('js')
@endpush
