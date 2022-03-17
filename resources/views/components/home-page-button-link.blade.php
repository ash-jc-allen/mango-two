@props([
    'href',
])

<div class="bg-gradient-to-t from-dark-orange to-light-orange p-0.5 rounded mt-4">
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-block bg-really-dark text-white py-3 px-6 rounded']) }}>
        {{ $slot }}
    </a>
</div>
