@props([
    'disabled' => false,
    'placeholder' => '',
    'name' => '',
    'value' => '',
    'type' => 'text',
])

<input @disabled($disabled) type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'flex h-10 w-full rounded-xl border border-[#dfdfdf] dark:border-[#525252] bg-[#f5f5f5] dark:bg-backgorund-dark px-3 py-2 text-secondary dark:text-secondary-dark focus:border-[#dfdfdf] dark:focus:border-[#525252] focus-visible:ring-2 focus-visible:ring-primary dark:focus-visible:ring-primary-dark focus-visible:ring-offset-2 dark:focus-visible:ring-offset-backgorund-dark disabled:cursor-not-allowed disabled:opacity-50 md:text-sm placeholder:text-gray-500 dark:placeholder:text-secondary-dark']) }}>
