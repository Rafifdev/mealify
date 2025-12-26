<section class="bg-primary dark:bg-primary-dark mx-0">
    {{-- Icon --}}
    <div
        class="w-20 h-20 rounded-2xl bg-backgorund-light/10 flex items-center justify-center mx-auto mb-8 animate-float">
        <x-icons.application-logo class="text-secondary-dark dark:text-secondary" width="50" height="50"/>
    </div>

    {{-- title --}}
    <div class="flex flex-col items-center mx-10 sm:mx-auto mb-16 text-center">
        <x-text-h2 class="text-secondary-dark dark:text-secondary">
            Siap Masak Hemat Hari Ini?
        </x-text-h2>
        <p class="max-w-xl text-center text-lg text-secondary-dark/80 dark:text-secondary">Mulai temukan resep sesuai
            bahan dan budget kamu. Gratis dan tanpa ribet!
        </p>

        {{-- button --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
            <x-buttons.primary-button class="bg-backgorund-light dark:bg-backgorund-darkv2 h-14 px-10">
                <p class="text-secondary dark:text-secondary-dark text-lg">
                    Mulai Cari Resep
                </p>
            </x-buttons.primary-button>
            <x-buttons.primary-button
                class="bg-backgorund-light/10 dark:bg-backgorund-dark/10 h-14 px-10 border-2 border-backgorund-light/20 hover:bg-backgorund-light/20 dark:border-backgorund-dark/20 dark:hover:bg-backgorund-dark/20">
                <p class="text-secondary-dark dark:text-secondary text-lg">
                    Pelajari Lebih Lanjut
                </p>
            </x-buttons.primary-button>
        </div>
    </div>
</section>
