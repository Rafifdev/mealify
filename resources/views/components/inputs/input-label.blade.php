@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-secondary dark:text-secondary-dark']) }}>
    {{ $value ?? $slot }}
</label>
