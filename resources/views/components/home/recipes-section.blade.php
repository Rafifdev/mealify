<section>
    {{-- title --}}
    <div class="text-center max-w-2xl mx-auto mb-16">
        <x-text-h2>
            Temukan Resep Sesuai Bahan & Budget
        </x-text-h2>
        <p class="text-lg">Masukkan bahan yang kamu punya dan budget yang tersedia
        </p>
    </div>

    <div class="max-w-3xl mb-12 mx-auto">
        <div
            class="w-full p-6 rounded-3xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border border-border dark:border-border-dark mb-8 shadow-md">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                <x-inputs.text-input class="w-full md:w-1/2 rounded-xl px-4 py-6"
                    placeholder="Cari berdasarkan bahan..." />
                <x-inputs.text-input class="w-full md:w-1/4 rounded-xl px-4 py-6" placeholder="50000" type="number" />
                <x-buttons.primary-button class="w-full md:w-1/4 bg-primary dark:bg-primary-dark h-12">Cari
                    Resep</x-buttons.primary-button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mb-12">
        <x-cards.recipe-card />
        <x-cards.recipe-card />
        <x-cards.recipe-card />
        <x-cards.recipe-card />
    </div>

    <div class="text-center">
        <x-buttons.primary-button class="bg-primary dark:bg-primary-dark h-12 px-8">
            Lihat Semua Resep
        </x-buttons.primary-button>
    </div>
</section>
