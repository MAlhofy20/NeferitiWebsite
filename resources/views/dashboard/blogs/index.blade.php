@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.blogs') }}</div>
    </x-dashboard.header>


    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.blogs.create') }}'"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create_blog') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.title') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.product') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.status') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.created_at') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($blogs as $blog)
                        <tr id="row-{{ $blog['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">
                                <p>{{ $blog->title }}</p>
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                @if ($blog->product)
                                    <a href="{{ route('dashboard.products.edit', $blog->product->id) }}"
                                        class="text-blue-500 hover:text-blue-700">{{ $blog->product?->name }}
                                    </a>
                                @else
                                    عام
                                @endif
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $blog->status ? __('dashboard.active') : __('dashboard.inactive') }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $blog->created_at->format('Y-m-d H:i') }}
                            </td>
                            <td class="py-2 px-4 flex gap-2 items-center">
                                <a href="{{ route('dashboard.blogs.edit', $blog->id) }}"
                                    class="fa-solid fa-pen-to-square hover:text-blue-500"></a>
                                <div>
                                    <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST"
                                        id="deleteBlogForm">
                                        @csrf
                                        @method('DELETE')
                                        <i role="button" onclick="confirmDelete('deleteBlogForm', '{{ lang() }}')"
                                            class="fa-solid fa-trash hover:text-red-500"></i>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- {{ $properties->links() }} --}}
            </table>

        </div>
    </div>
@endsection

@push('js')

@endpush
