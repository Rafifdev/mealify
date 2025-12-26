@props([
    'title' => '',
    'description' => '',
])

<div
    class="group p-8 rounded-2xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border border-border dark:border-border-dark hover:shadow-xl hover:border-primary/50 dark:hover:border-primary-dark/50 transition-all duration-300 animate-fade-up">
    <div
        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
        <div class="w-6 h-6 text-primary dark:text-primary-dark">
            {{ $slot }}
        </div>
    </div>
    <h3 class="text-2xl font-bold mb-3">{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>