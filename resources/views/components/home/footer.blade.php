<section>
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-8">
        <div class="flex flex-col gap-3 ">
            <div class="flex felx-row items-center gap-3">
                <x-icons.application-logo
                    class="bg-primary h-10 w-10 flex items-center justify-center text-secondary-dark rounded-xl" />
                <p class="text-xl font-bold">Mealify</p>
            </div>
            <p class="text-sm">Platform meal planning berbasis resep dan budget. Masak enak tanpa boros!</p>
            <div class="flex flex-row gap-5">
                <div
                    class="text-primary dark:text-primary-dark border-2 border-primary dark:border-primary-dark h-10 w-10 flex items-center justify-center rounded-xl hover:bg-primary dark:hover:bg-primary-dark transition-all duration-300 hover:text-secondary-dark dark:hover:text-secondary">
                    <x-icons.instagram class="w-24 h-24" />
                </div>
                <div
                    class="text-primary dark:text-primary-dark border-2 border-primary dark:border-primary-dark h-10 w-10 flex items-center justify-center rounded-xl hover:bg-primary dark:hover:bg-primary-dark transition-all duration-300 hover:text-secondary-dark dark:hover:text-secondary">
                    <x-icons.instagram class="w-24 h-24" />
                </div>
                <div
                    class="text-primary dark:text-primary-dark border-2 border-primary dark:border-primary-dark h-10 w-10 flex items-center justify-center rounded-xl hover:bg-primary dark:hover:bg-primary-dark transition-all duration-300 hover:text-secondary-dark dark:hover:text-secondary">
                    <x-icons.instagram class="w-24 h-24" />
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <h4 class="text-lg font-bold">Fitur</h4>
            <ul class="text-sm flex flex-col gap-3">
                <li>
                    Cari resep
                </li>
                <li>
                    Meal planning
                </li>
                <li>
                    Kalkulator budget
                </li>
                <li>
                    Daftar belanja
                </li>
            </ul>
        </div>

        <div class="flex flex-col gap-4">
            <h4 class="text-lg font-bold">Kategori Resep</h4>
            <ul class="text-sm flex flex-col gap-3">
                <li>
                    Masakan Indonesia
                </li>
                <li>
                    Meu Hemat
                </li>
                <li>
                    Masakan Cepat
                </li>
                <li>
                    Vegetarian
                </li>
            </ul>
        </div>

        <div class="flex flex-col gap-4">
            <h4 class="text-lg font-bold">Bantuan</h4>
            <ul class="text-sm flex flex-col gap-3">
                <li>
                    FAQ
                </li>
                <li>
                    Kontak
                </li>
                <li>
                    Privacy Policy
                </li>
                <li>
                    Terms of Service
                </li>
                <div class="mt-3 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-mail w-4 h-4">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                    <span>hello@mealify.id</span>
                </div>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <div class="mt-12 w-full h-0.5 border-t border-secondary/20 dark:border-secondary-dark/20"></div>
        <p class="mt-8 text-sm">© {{ now()->year   }} Mealify. All rights reserved.</p>
    </div>
</section>
