@extends('dashboard.layout')
@section('content')
    
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.external_pages') }}</div>
    </x-dashboard.header>


    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.external_pages.create') }}'"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create_external_page') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200"></tr>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.title') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.link') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($pages as $page)
                        <tr id="row-{{ $page['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">
                                <p>{{ $page->title_ar }}</p>
                                <p>{{ $page->title_en }}</p>
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $page->link }}
                            </td>
                            <td class="py-2 px-4">
                                <div class="flex gap-2 items-center">
                                    <button
                                        onclick="window.location.href = '{{ route('dashboard.external_pages.edit', $page->id) }}'"
                                        class="px-2 disableOnLoad py-1 text-xs bg-green-500 rounded text-white">{{ __('dashboard.update') }}</button>
                                        <div>
                                            <form action="{{ route('dashboard.external_pages.delete', $page->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                            </form>

                                        </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection