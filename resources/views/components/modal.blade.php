@props([
    'id' => 0,
    'title',
])

<div 
    id="{{ $id }}" 
    class="fixed inset-0 flex items-center justify-center z-50 hidden itsModal"
    aria-labelledby="modal-title" 
    role="dialog" 
    aria-modal="true">
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 text-start">
                        <div class="sm:flex">
                            <div class="mt-3 sm:ml-4 sm:mt-0 w-full">
                                <h3 class="font-semibold leading-6 text-gray-900">{{ $title }}</h3>
                                <div class="mt-2">
                                    <!-- Slot for custom content -->
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
