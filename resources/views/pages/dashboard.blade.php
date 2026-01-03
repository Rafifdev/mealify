<x-app-layout>
    <x-slot name="header">
        <h1>
            Dashboard
        </h1>
    </x-slot>

    <div class="w-full p-6 flex flex-col gap-6">
        {{-- Welcome Message --}}
        <div class="text-secondary dark:text-secondary-dark">
            <h2 class="text-3xl font-bold mb-2">
                Selamat Datang! 👋
            </h2>
            <p>Rencanakan menu makanan sesuai bahan dan budget Anda</p>
        </div>

        {{-- Statistic --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
            <x-cards.stats-card title="Total Resep" number="156" description="Tersimpan di koleksi">
                <x-icons.book />
            </x-cards.stats-card>
            <x-cards.stats-card title="Total meal plan" number="18" description="Minggu ini">
                <x-icons.fork />
            </x-cards.stats-card>
            <x-cards.stats-card title="Bahan tersedia" number="24" description="Tersimpan di bahan masakan">
                <x-icons.leaf />
            </x-cards.stats-card>
            <x-cards.stats-card title="Budget mingguan" number="Rp 285.000" description="Sisa dari 500.000">
                <x-icons.wallet />
            </x-cards.stats-card>
        </div>

        {{-- Recommendation Recipes --}}
        <x-cards.main-card class="p-6 hover:border-border hover:dark:border-border-dark">
            <div class="flex items-center justify-between mb-6 ">
                <div class="flex items-center gap-2">
                    <div class="rounded-full bg-primary/10 dark:bg-primary-dark/10 p-2">
                        <x-icons.sprinkle class="h-4 w-4 text-primary dark:text-primary-dark" />
                    </div>
                    <h3
                        class="tracking-tight text-2xl font-semibold text-foreground text-secondary dark:text-secondary-dark">
                        Rekomendasi Resep</h3>
                </div>
                <x-buttons.secondary-button>Refresh</x-buttons.secondary-button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
            </div>
        </x-cards.main-card>

        {{-- Meal plan --}}
        <x-cards.main-card class="p-6 hover:border-border hover:dark:border-border-dark">
            <div class="flex items-center gap-2 mb-6">
                <div class="rounded-full bg-primary/10 dark:bg-primary-dark/10 p-2">
                    <x-icons.calender class="h-4 w-4 text-primary dark:text-primary-dark" />
                </div>
                <h3
                    class="tracking-tight text-2xl font-semibold text-foreground text-secondary dark:text-secondary-dark capitalize">
                    Meal plan minggu ini</h3>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-7 gap-5">
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
                <x-cards.meal-plan-card />
            </div>
        </x-cards.main-card>
    </div>
</x-app-layout>