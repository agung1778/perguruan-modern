<section class="bg-gradient-to-r from-slate-900 to-blue-900 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-yellow-400 font-semibold uppercase tracking-widest">
                Statistik
            </span>

            <h2 class="text-4xl font-bold text-white mt-3">
                Perguruan Dalam Angka
            </h2>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                <h3 class="text-5xl font-bold text-blue-900">
                    {{ number_format($stats['teachers']) }}
                </h3>
                <p class="mt-3 text-slate-600">
                    Guru
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                <h3 class="text-5xl font-bold text-blue-900">
                    {{ number_format($stats['students']) }}
                </h3>
                <p class="mt-3 text-slate-600">
                    Siswa
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                <h3 class="text-5xl font-bold text-blue-900">
                    {{ number_format($stats['units']) }}
                </h3>
                <p class="mt-3 text-slate-600">
                    Unit Pendidikan
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                <h3 class="text-5xl font-bold text-blue-900">
                    {{ number_format($stats['news']) }}
                </h3>
                <p class="mt-3 text-slate-600">
                    Berita
                </p>
            </div>

        </div>

    </div>

</section>