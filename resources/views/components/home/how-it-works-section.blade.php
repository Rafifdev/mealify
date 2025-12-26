<section class="bg-primary dark:bg-primary-dark mx-0">
    {{-- title --}}
    <div class="text-center max-w-2xl mx-auto mb-16">
        <x-text-h2 class="text-secondary-dark dark:text-secondary">
            Meal Planning
        </x-text-h2>
        <p class="text-lg text-secondary-dark dark:text-secondary">Dari bahan di dapur sampai menjadi meal plan mingguan
        </p>
    </div>

    {{-- steps --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mx-10 lg:mx-20">

        <div class="flex flex-col justify-center items-center mb-6 sm:mb-0">
            <div
                class="w-24 h-24 rounded-2xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 shadow-xl flex items-center justify-center mb-6 mx-auto group-hover:scale-105 transition-transform relative">

                <div class="absolute -top-2 -right-5">
                    <span
                        class="py-2 px-3 rounded-full bg-backgorund-darkv2 dark:bg-backgorund-lightv2 text-secondary-dark dark:text-secondary text-lg">1</span>
                </div>
                <x-icons.search class="w-10 h-10 text-primary dark:text-primary-dark" />
            </div>
            <div class="flex flex-col justify-center items-center">
                <x-text-h3 class="text-secondary-dark dark:text-secondary mb-3">Masukan Bahan</x-text-h3>
                <p class="mx-4 text-secondary-dark/80 dark:text-secondary text-center max-w-md">Ketik bahan-bahan yang
                    kamu punya di rumah atau yang ingin kamu gunakan</p>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center mb-6 sm:mb-0">
            <div
                class="w-24 h-24 rounded-2xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 shadow-xl flex items-center justify-center mb-6 mx-auto group-hover:scale-105 transition-transform relative">
                <div class="absolute -top-2 -right-5">
                    <span
                        class="py-2 px-3 rounded-full bg-backgorund-darkv2 dark:bg-backgorund-lightv2 text-secondary-dark dark:text-secondary text-lg">2</span>
                </div>
                <x-icons.wallet class="w-10 h-10 text-primary dark:text-primary-dark" />
            </div>
            <div class="flex flex-col justify-center items-center">
                <x-text-h3 class="text-secondary-dark dark:text-secondary mb-3">Atur Budget</x-text-h3>
                <p class="mx-4 text-secondary-dark/80 dark:text-secondary text-center max-w-md">Tentukan budget harian
                    atau mingguan untuk belanja dan masak</p>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center mb-6 sm:mb-0">
            <div
                class="w-24 h-24 rounded-2xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 shadow-xl flex items-center justify-center mb-6 mx-auto group-hover:scale-105 transition-transform relative">
                <div class="absolute -top-2 -right-5">
                    <span
                        class="py-2 px-3 rounded-full bg-backgorund-darkv2 dark:bg-backgorund-lightv2 text-secondary-dark dark:text-secondary text-lg">3</span>
                </div>
                <x-icons.chef-hat class="w-10 h-10 text-primary dark:text-primary-dark" />
            </div>
            <div class="flex flex-col justify-center items-center">
                <x-text-h3 class="text-secondary-dark dark:text-secondary mb-3">Pilih Resep</x-text-h3>
                <p class="mx-4 text-secondary-dark/80 dark:text-secondary text-center max-w-md">Dapatkan rekomendasi
                    resep yang sesuai dengan bahan dan budget kamu</p>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center mb-6 sm:mb-0">
            <div
                class="w-24 h-24 rounded-2xl bg-backgorund-lightv2 dark:bg-backgorund-darkv2 shadow-xl flex items-center justify-center mb-6 mx-auto group-hover:scale-105 transition-transform relative">
                <div class="absolute -top-2 -right-5">
                    <span
                        class="py-2 px-3 rounded-full bg-backgorund-darkv2 dark:bg-backgorund-lightv2 text-secondary-dark dark:text-secondary text-lg">4</span>
                </div>
                <x-icons.calender class="w-10 h-10 text-primary dark:text-primary-dark" />
            </div>
            <div class="flex flex-col justify-center items-center">
                <x-text-h3 class="text-secondary-dark dark:text-secondary mb-3">Buat Meal Plan</x-text-h3>
                <p class="mx-4 text-secondary-dark/80 dark:text-secondary text-center max-w-md">Susun jadwal masak
                    mingguan dan dapatkan daftar belanja otomatis</p>
            </div>
        </div>

    </div>
</section>
