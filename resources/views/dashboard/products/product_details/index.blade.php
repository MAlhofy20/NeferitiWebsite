@extends('dashboard.layout')
@section('content')
    <x-dashboard.header>
        <a href="{{ route('dashboard.products.index') }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ __('dashboard.products') }}</a> |
        <a href="{{ route('dashboard.products.edit', $product) }}" class="text-xl font-bold text-gray-500 hover:underline hover:text-gray-800">{{ $product->name }}</a> |
        <div class="text-xl font-bold">{{ __('dashboard.product_details') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <button onclick="window.location.href = '{{ route('dashboard.product_details.create', $product) }}'"
            class="px-2 py-1 bg-black hover:bg-[#472A12] text-white mb-2 rounded-lg">
            {{ __('dashboard.create') }}
        </button>

        <!-- Content here -->
        <div>

            <table class="shadow w-full rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-start">{{ __('dashboard.image') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.title') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.description') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.order') }}</th>
                        <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                    @foreach ($product_details as $product_detail)
                        <tr id="row-{{ $product_detail['id'] }}" class="border-t border-gray-200">
                            <td class="py-2 px-4 text-start items-center">  
                                <img src="{{ asset($product_detail->image) }}" alt="{{ $product_detail->title }}" class="w-20 h-20 rounded-lg">
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $product_detail->title }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                {{ $product_detail->description }}
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 bg-blue-200 p-2 rounded-lg justify-center">
                                    <form action="{{ route('dashboard.product_details.up', $product_detail->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fa-solid fa-arrow-up"></button>
                                    </form>
                                    {{ $product_detail->order_number }}
                                    <form action="{{ route('dashboard.product_details.down', $product_detail->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="fa-solid fa-arrow-down"></button>
                                    </form>    
                                </div>
                            </td>
                            <td class="py-2 px-4 text-start items-center">
                                <div class="flex gap-2 items-center">
                                    <a href="{{ route('dashboard.product_details.edit', $product_detail) }}"
                                        class="fa-solid fa-pen-to-square hover:text-blue-500"></a>
                                    <form action="{{ route('dashboard.product_details.destroy', $product_detail) }}" method="POST"
                                        id="deleteProductDetailForm{{ $product_detail->id }}" class="flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <i role="button" onclick="confirmDelete('deleteProductDetailForm{{ $product_detail->id }}', '{{ lang() }}')"
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

