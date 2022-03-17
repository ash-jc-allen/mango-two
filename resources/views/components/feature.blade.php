@props([
    'title',
    'text',
    'icon'
])

<div class="pt-6">
    <div class="flow-root bg-really-dark rounded-lg px-6 pb-8">
        <div class="-mt-6">
            <div>
                <span class="inline-flex items-center justify-center">
                    <img src="{{ mix('img/mango.png') }}" class="h-12 w-12" alt="Mango Two icon">
                </span>
            </div>
            <h3 class="mt-8 text-xl font-medium text-gray-200 tracking-tight">{{ $title }}</h3>
            <p class="mt-5 text-base text-gray-200">
            {{ $text }}
        </div>
    </div>
</div>
