@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
