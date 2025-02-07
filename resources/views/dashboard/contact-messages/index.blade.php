@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.contact_messages') }}">
        <div class="text-xl font-bold">{{ __('dashboard.contact_messages') }}</div>

    </x-dashboard.header>
    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Content here -->

        <table class="shadow w-full rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-start">#ID</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.name') }}</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.phone_email') }}</th>
\                    <th class="py-2 px-4 text-start">{{ __('dashboard.from') }}</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.created_at') }}</th>
                    <th class="py-2 px-4 text-start">{{ __('dashboard.actions') }}</th>
                </tr>
            </thead>
            <tbody id="tableData">
                @foreach ($messages as $message)
                    <tr id="row-{{ $message->id }}" class="border-t border-gray-200">
                        <td class="py-2 px-4 text-start">{{ $message->id }}</td>
                        <td class="py-2 px-4 text-start">
                            {{ $message->name }}
                        </td>
                        <td class="py-2 px-4 text-start">
                            {{ $message->phone_email }}
                        </td>
                        <td class="py-2 px-4 text-start">
                            {{ $message->url }}
                        </td>
                        <td class="py-2 px-4 text-start">
                            {{ $message->created_at->format('Y-m-d | H:i a') }}
                        </td>
                        <td class="py-2 px-4 flex gap-2 items-center">
                                <a class="px-2 py-1 text-xs bg-white border border-gray-300 text-black rounded-lg" href="{{ route('dashboard.contact_messages.show', $message->id) }}">{{ __('dashboard.show') }}</a>
                                <form action="{{ route('dashboard.contact_messages.destroy', $message->id) }}" method="POST" id="deleteadminForm">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete('deleteadminForm', '{{ lang() }}')" class="px-2 py-1 text-xs bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                                </form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@push('js')

@endpush
