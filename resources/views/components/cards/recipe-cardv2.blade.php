@props([
    'img' => 'https://placehold.co/1',
    'title' => 'Ayam Goreng Kremes',
    'ingredients' => ['ayam', 'bawang putih', 'kemiri', '1+'],
    'budget' => 'Rp 25.000',
    'time' => '45 menit',
])

<div
    class="rounded-lg border border-border dark:border-border-dark overflow-hidden bg-backgorund-lightv2 dark:bg-backgorund-darkv2 drop-shadow-md transition-all cursor-pointer group">
    <div class="relative aspect-[4/3] overflow-hidden">
        <img src="{{ $img }}" alt="{{ $title }}"
            class="h-full w-full object-cover transition-transform group-hover:scale-105">
    </div>
    <div class="p-4">
        <h3 class="font-semibold text-secondary dark:text-secondary-dark line-clamp-1 mb-2">{{ $title }}</h3>
        <div class="flex flex-wrap gap-1 mb-3">
            @foreach ($ingredients as $ing)
                <span
                    class="text-xs px-2.5 py-0.5 rounded-full bg-transparent text-secondary dark:text-secondary-dark border border-border dark:border-border-dark">{{ $ing }}</span>
            @endforeach
        </div>
        <div class="flex flex-row justify-between text-sm">
            <div class="flex flex-row items-center justify-start gap-1.5">
                <x-icons.clock class="w-4 text-secondary dark:text-secondary-dark" />
                <p class="text-secondary dark:text-secondary-dark">{{ $time }}</p>
            </div>
            <div class="flex flex-row items-center justify-end gap-1.5">
                <x-icons.wallet class="w-4 text-primary dark:text-primary-dark" />
                <p class="text-primary dark:text-primary-dark">{{ $budget }}</p>
            </div>
        </div>
    </div>
</div>
