<section class="flex flex-col justify-center">
    {{-- title --}}
    <div class="text-center max-w-2xl mx-auto mb-16">
        <x-text-h2>
            Masak Hemat, Makan Enak
        </x-text-h2>
        <p class="text-lg">Semua tools yang kamu butuhkan untuk meal planning sesuai budget dan bahan yang ada
        </p>
    </div>

    {{-- cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <x-cards.feature-card class="sm:justify-center" title="Cari Berdasarkan Bahan"
            description="Masukkan bahan yang kamu punya di rumah, kami carikan resep terbaik yang bisa kamu masak.">
            <x-icons.search />
        </x-cards.feature-card>

        <x-cards.feature-card class="sm:justify-center" title="Sesuai Budget"
            description="Atur budget harianmu dan dapatkan rekomendasi resep yang pas di kantong.">
            <x-icons.wallet />
        </x-cards.feature-card>

        <x-cards.feature-card class="sm:justify-center" title="Meal Planning Mingguan"
            description="Rencanakan menu mingguan otomatis berdasarkan budget dan bahan yang tersedia.">
            <x-icons.calender />
        </x-cards.feature-card>
    </div>
</section>