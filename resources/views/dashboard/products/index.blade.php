@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <div class="text-xl font-bold">{{ __('dashboard.products') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.products.create') }}';"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.image') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.slug') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.description') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.order') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.product_details') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($products as $product)
                        <tr id="row-{{ $product->id }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">  
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 rounded-lg">
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $product->name }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $product->slug }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $product->description }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 bg-blue-200 p-2 rounded-lg justify-center">
                                    <form action="{{ route('dashboard.products.up', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fa-solid fa-arrow-up"></button>
                                    </form>
                                    {{ $product->order_number }}
                                    <form action="{{ route('dashboard.products.down', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fa-solid fa-arrow-down"></button>
                                    </form>    
                                </div>
                            </td>

                            <td class="py-2 px-4 text-start items-center">
                                    <button onclick="window.location.href = '{{ route('dashboard.product_details.index', $product->id) }}';" 
                                    class="px-2 py-1 text-xs bg-gray-300 rounded text-black">{{ __('dashboard.product_details') }}</button>
                            </td>

                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 items-center">
                                    <a href="{{ route('dashboard.products.edit', $product->id) }}"
                                        class="fa-solid fa-pen-to-square hover:text-blue-500"></a>
                                    <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST"
                                        id="deleteProductForm{{ $product->id }}" class="flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <i role="button" onclick="confirmDelete('deleteProductForm{{ $product->id }}', '{{ lang() }}')"
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
