@props(['title', 'text'])

<div class="">
    <h1 class="block font-bold text-3xl text-secondary dark:text-secondary-dark mb-2">
        {{ $title }}
    </h1>

    <p class="block font-medium text-secondary dark:text-secondary-dark">
        {{ $text }}
    </p>
</div>
