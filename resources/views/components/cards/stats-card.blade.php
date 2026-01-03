@props([
    'title' => '',
    'description' => '',
    'number' => '',
])

<x-cards.main-card class="p-6">
    <div class="flex items-center justify-between">
        <div class="space-y-2">
            <p class="text-base font-medium text-secondary dark:text-secondary-dark capitalize">{{ $title }}</p>
            <p class="text-2xl font-bold text-secondary dark:text-secondary-dark capitalize">{{ $number }}</p>
            <p class="text-xs text-secondary/80 dark:text-secondary-dark capitalize">{{ $description }}</p>
        </div>
        <div class="rounded-full bg-primary/10 dark:bg-primary-dark/10 p-4">
            <div class="h-8 w-8 text-primary dark:text-primary-dark">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-cards.main-card>
