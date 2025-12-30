@props([
    'img' => 'https://placehold.co/1',
    'title' => 'Ayam Goreng Kremes',
    'ingredients' => ['ayam', 'bawang putih', 'kemiri', '1+'],
    'budget' => 'Rp 25.000',
    'time' => '45 menit',
])

<div
    {{ $attributes->merge(['class' => 'group p-8 rounded-2xl flex flex-col gap-3 bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border border-border dark:border-border-dark hover:shadow-xl hover:border-primary/50 dark:hover:border-primary-dark/50 transition-all duration-300 animate-fade-up']) }}>
    <div class="aspect-video overflow-hidden">
        <img src="{{ $img }}" alt="{{ $title }}" class="rounded-xl w-full h-full object-cover">
    </div>
    <h3 class="text-2xl font-bold">{{ $title }}</h3>
    <div>
        @foreach ($ingredients as $ing)
            <span class="text-xs px-2 py-1 rounded-full bg-neutral-400 text-secondary">{{ $ing }}</span>
        @endforeach
    </div>
    <div class="flex flex-row justify-between text-sm">
        <div class="flex flex-row items-center justify-start gap-1.5">
            <x-icons.wallet class="w-4 text-primary dark:text-primary-dark" />
            <p>{{ $budget }}</p>
        </div>
        <div class="flex flex-row items-center justify-end gap-1.5">
            <x-icons.clock class="w-4 text-primary dark:text-primary-dark" />
            <p>{{ $time }}</p>
        </div>
    </div>
    <x-buttons.secondary-button>
        Detail Resep
    </x-buttons.secondary-button>
</div>
