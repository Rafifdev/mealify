<div
    {{ $attributes->merge(['class' => 'rounded-2xl p-4 bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border border-border dark:border-border-dark hover:shadow-xl hover:border-primary/50 dark:hover:border-primary-dark/50 transition-all duration-300 animate-fade-up shadow-md']) }}>
    {{ $slot }}
</div>
