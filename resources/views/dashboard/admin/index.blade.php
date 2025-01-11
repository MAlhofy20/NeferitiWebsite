@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.admins') }}">
        <div class="text-xl font-bold">{{ __('dashboard.admins') }}</div>

    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->
        <button onclick="window.location.href = '{{ route('dashboard.admin.create') }}'"
            class="px-2 py-1 bg-black hover:bg-primary text-white mb-2 rounded-lg">
            {{ __('dashboard.create') }}
        </button>

        <table class="shadow w-full rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.email') }}</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                </tr>
            </thead>
            <tbody id="tableData">
                @foreach ($admins as $admin)
                    <tr id="row-{{ $admin->id }}" class="border-t border-gray-200">
                        <td class="py-2 px-4 text-start">{{ $admin->name }}</td>
                        <td class="py-2 px-4 text-start">
                            {{ $admin->email }}
                        </td>
                        <td class="py-2 px-4 flex gap-2 items-center">
                            <a href="{{ route('dashboard.admin.edit', $admin->id) }}"  class="fa-solid fa-pen-to-square hover:text-blue-500"></a>

                            @if ($admin->id != auth('admin')->user()->id)
                            <div>
                                <form action="{{ route('dashboard.admin.destroy', $admin->id) }}" method="POST" id="deleteadminForm">
                                    @csrf
                                    @method('DELETE')
                                    <i role="button" onclick="confirmDelete('deleteadminForm', '{{ lang() }}')"  class="fa-solid fa-trash hover:text-red-500"></i>
                                </form>
                                </div>
                            @endif


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@push('js')

@endpush
