@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="{{ __('dashboard.contact_message_details') }}">
        <div class="text-xl font-bold">{{ __('dashboard.contact_message_details') }}</div>
    </x-dashboard.header>

    <div class="bg-white rounded-lg shadow p-6 h-full">
        <!-- Card Design -->
        <div class="max-w-2xl mx-auto">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                <!-- User Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-1">{{ __('dashboard.name') }}</label>
                    <div class="mt-1">
                        <span class="text-gray-400">{{ $message->name }}</span>
                    </div>
                </div>

                <!-- Email Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-1">{{ __('dashboard.email') }}</label>
                    <div class="mt-1">
                        <span class="text-gray-400">{{ $message->phone_email }}</span>
                    </div>
                </div>

                <!-- Subject Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-1">{{ __('dashboard.subject') }}</label>
                    <div class="mt-1">
                        <p class="text-gray-900 font-semibold">{{ $message->subject }}</p>
                    </div>
                </div>

                <!-- Message Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-1">{{ __('dashboard.message') }}</label>
                    <div class="mt-1">
                        <p class="text-gray-700 bg-gray-100 p-4 rounded-lg whitespace-pre-line">{{ $message->message }}</p>
                    </div>
                </div>

                <!-- Created At Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-500 mb-1">{{ __('dashboard.created_at') }}</label>
                    <div class="mt-1">
                        <p class="text-gray-600">{{ $message->created_at->format('Y-m-d | H:i a') }}</p>
                    </div>
                </div>

                <!-- Actions Section -->
                <div class="flex justify-end gap-2">
                    <form action="{{ route('dashboard.contact_messages.destroy', $message->id) }}" method="POST" id="deleteadminForm">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete('deleteadminForm', '{{ lang() }}')" class="px-2 py-1 bg-red-500 rounded text-white">{{ __('dashboard.delete') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
