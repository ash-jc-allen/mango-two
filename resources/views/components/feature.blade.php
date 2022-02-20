@props([
    'title',
    'text',
    'icon'
])

<div class="pt-6">
    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
        <div class="-mt-6">
            <div>
                <span class="inline-flex items-center justify-center p-3 bg-dark-orange rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cloud-upload -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                  </svg>
                </span>
            </div>
            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ $title }}</h3>
            <p class="mt-5 text-base text-gray-500">
                {{ $text }}
        </div>
    </div>
</div>
