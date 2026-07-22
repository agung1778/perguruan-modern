<section class="bg-gradient-to-r from-slate-900 to-blue-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center mb-14">
            <span class="text-yellow-400 font-semibold uppercase tracking-widest">
                Statistik
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mt-3">
                Perguruan Dalam Angka
            </h2>
            <p class="mt-4 text-slate-300">
                Data terbaru perkembangan Perguruan Amaliah.
            </p>
        </div>
        <?php
            $stats = $stats ?? [
                'teachers' => 0,
                'students' => 0,
                'units' => 0,
                'news' => 0,
            ];
        ?>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:-translate-y-2 transition">
                <h3 class="text-5xl font-bold text-blue-900">
                    <?php echo e(number_format($stats['teachers'])); ?>

                </h3>
                <p class="mt-3 text-slate-600 font-medium">
                    Guru
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:-translate-y-2 transition">
                <h3 class="text-5xl font-bold text-blue-900">
                    <?php echo e(number_format($stats['students'])); ?>

                </h3>
                <p class="mt-3 text-slate-600 font-medium">
                    Siswa
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:-translate-y-2 transition">
                <h3 class="text-5xl font-bold text-blue-900">
                    <?php echo e(number_format($stats['units'])); ?>

                </h3>
                <p class="mt-3 text-slate-600 font-medium">
                    Unit Pendidikan
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:-translate-y-2 transition">
                <h3 class="text-5xl font-bold text-blue-900">
                    <?php echo e(number_format($stats['news'])); ?>

                </h3>
                <p class="mt-3 text-slate-600 font-medium">
                    Berita
                </p>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/statistics.blade.php ENDPATH**/ ?>