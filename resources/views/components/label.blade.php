@props(['value'])

<label {{ $attributes->merge(['class' => 'block ml-3 font-bold text-sm text-gray-900 tracking-wide']) }}>
    {{ $value ?? $slot }}
</label>

