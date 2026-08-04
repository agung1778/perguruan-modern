<?php $__env->startSection('content'); ?>


<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-green-900 to-emerald-800">
    
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-emerald-400/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full bg-green-300/10 blur-3xl"></div>
        <div class="absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/5 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

        
        <nav
            class="mb-8 flex flex-wrap items-center gap-2 text-sm text-emerald-100/70"
            aria-label="Breadcrumb"
        >
            <a
                href="<?php echo e(url('/')); ?>"
                class="transition hover:text-white"
            >
                Beranda
            </a>

            <span>/</span>

            <a
                href="<?php echo e(route('units.index')); ?>"
                class="transition hover:text-white"
            >
                Unit Pendidikan
            </a>

            <span>/</span>

            <span class="font-medium text-white">
                <?php echo e($unit->name); ?>

            </span>
        </nav>

        
        <div class="max-w-4xl">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->short_name): ?>
                <span class="inline-flex rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur-sm">
                    <?php echo e($unit->short_name); ?>

                </span>
            <?php else: ?>
                <span class="inline-flex rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur-sm">
                    Unit Pendidikan
                </span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                <?php echo e($unit->name); ?>

            </h1>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->description): ?>
                <p class="mt-6 max-w-3xl text-base leading-7 text-emerald-50/80 sm:text-lg sm:leading-8">
                    <?php echo e(Str::limit($unit->description, 300)); ?>

                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        </div>
    </div>
</section>



<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

        
        <div class="grid items-start gap-8 lg:grid-cols-5 lg:gap-12">

            
            <div class="lg:col-span-3">

                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm sm:rounded-3xl">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->photo): ?>

                        <img
                            src="<?php echo e(Storage::url($unit->photo)); ?>"
                            alt="<?php echo e($unit->name); ?>"
                            loading="lazy"
                            decoding="async"
                            class="h-[280px] w-full object-cover sm:h-[420px] lg:h-[520px]"
                        >

                    <?php else: ?>

                        <div class="flex h-[280px] items-center justify-center bg-gradient-to-br from-emerald-800 to-green-950 sm:h-[420px] lg:h-[520px]">

                            <div class="text-center">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="mx-auto h-16 w-16 text-emerald-300/50"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3.75 21h16.5M4.5 3h15A1.5 1.5 0 0 1 21 4.5v13.125A1.875 1.875 0 0 1 19.125 19.5H4.875A1.875 1.875 0 0 1 3 17.625V4.5A1.5 1.5 0 0 1 4.5 3Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M7.5 7.5h9M7.5 11.25h9M7.5 15h5.25"
                                    />
                                </svg>

                                <p class="mt-4 text-sm font-medium text-emerald-100/70">
                                    Foto unit belum tersedia
                                </p>

                            </div>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>


            
            <div class="lg:col-span-2">

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8 lg:p-10">

                    
                    <div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->logo): ?>

                            <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-2xl border border-emerald-100 bg-emerald-50 p-3 sm:h-24 sm:w-24">

                                <img
                                    src="<?php echo e(Storage::url($unit->logo)); ?>"
                                    alt="Logo <?php echo e($unit->name); ?>"
                                    loading="lazy"
                                    decoding="async"
                                    class="h-full w-full object-contain"
                                >

                            </div>

                        <?php else: ?>

                            <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 sm:h-24 sm:w-24">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-10 w-10 text-emerald-600"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 3v18M3 9h18M5 21h14M5 9V5.25A2.25 2.25 0 0 1 7.25 3h9.5A2.25 2.25 0 0 1 19 5.25V9"
                                    />
                                </svg>

                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>


                    
                    <div class="mt-7">

                        <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                            Tentang Unit
                        </span>

                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                            <?php echo e($unit->name); ?>

                        </h2>

                    </div>


                    
                    <div class="mt-6 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->description): ?>

                            <?php echo nl2br(e($unit->description)); ?>


                        <?php else: ?>

                            <p class="text-slate-500">
                                Informasi mengenai unit pendidikan belum tersedia.
                            </p>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->website): ?>

                        <div class="mt-8 border-t border-slate-100 pt-8">

                            <p class="mb-3 text-sm font-semibold text-slate-700">
                                Website Resmi
                            </p>

                            <a
                                href="<?php echo e($unit->website); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                            >
                                <span>
                                    Kunjungi Website Sekolah
                                </span>

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                    />
                                </svg>

                            </a>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <a
                        href="<?php echo e(route('units.index')); ?>"
                        class="mt-4 flex w-full items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                    >
                        ← Kembali ke Unit Pendidikan
                    </a>

                </div>

            </div>

        </div>


        
        <div class="mt-12 border-t border-slate-200 pt-12 sm:mt-16 sm:pt-16">

            
            <div class="max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                    Data Pendidikan
                </span>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Statistik Siswa & Guru
                </h2>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($academicYears && $academicYears->count()): ?>

                    <form method="GET" action="<?php echo e(route('units.show', $unit)); ?>" class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <label for="academic_year" class="text-sm font-semibold text-emerald-700">
                            Pilih Tahun Ajaran
                        </label>

                        <select
                            id="academic_year"
                            name="academic_year"
                            onchange="this.form.submit()"
                            class="min-w-56 rounded-xl border border-emerald-200 bg-white px-4 py-2 text-sm font-semibold text-slate-800 outline-none transition focus:border-emerald-500"
                        >
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $academicYears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <option value="<?php echo e($year); ?>" <?php echo e($year == ($selectedAcademicYear ?? $latestAcademicYear) ? 'selected' : ''); ?>>
                                    <?php echo e($year); ?>

                                </option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                    </form>

                    <div class="mt-4 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.8"
                            stroke="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.5 1.5 0 0 1 18.75 20.25H5.25a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5Z"
                            />
                        </svg>

                        Data Siswa Tahun Ajaran <?php echo e($selectedAcademicYear ?? $latestAcademicYear); ?>


                    </div>

                <?php else: ?>

                    <p class="mt-5 text-sm font-medium text-slate-500">
                        Data siswa belum tersedia.
                    </p>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                    Statistik siswa merupakan hasil agregasi seluruh data jurusan
                    pada tahun ajaran <?php echo e($selectedAcademicYear ?? $latestAcademicYear ?? 'terbaru'); ?> untuk <?php echo e($unit->name); ?>.
                </p>

            </div>


            
            <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">

                
                <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-.083-.002-.166-.005-.248A6.72 6.72 0 0 0 9.75 12.75a6.72 6.72 0 0 0-5.245 6.127c-.003.082-.005.165-.005.248v.003m10.5 0a9.38 9.38 0 0 1-3.75.75 9.38 9.38 0 0 1-3.75-.75m7.5 0a24.255 24.255 0 0 1-7.5 0M12 12.75a3.375 3.375 0 1 0 0-6.75 3.375 3.375 0 0 0 0 6.75Z"
                            />
                        </svg>

                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-emerald-600">
                        Total Siswa
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-slate-900">
                        <?php echo e(number_format($studentStatistics['total'] ?? 0)); ?>

                    </p>

                </div>


                
                <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5.25 20.25a6.75 6.75 0 0 1 13.5 0"
                            />

                        </svg>

                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-blue-600">
                        Laki-laki
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-slate-900">
                        <?php echo e(number_format($studentStatistics['male'] ?? 0)); ?>

                    </p>

                </div>


                
                <div class="rounded-2xl border border-pink-100 bg-white p-6 shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-pink-50 text-pink-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 14.25a4.125 4.125 0 1 0 0-8.25 4.125 4.125 0 0 0 0 8.25Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 14.25V21m-3.75-3.75h7.5"
                            />

                        </svg>

                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-pink-600">
                        Perempuan
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-slate-900">
                        <?php echo e(number_format($studentStatistics['female'] ?? 0)); ?>

                    </p>

                </div>


                
                <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-green-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.75-.952 4.125 4.125 0 0 0-7.533-2.493M18 18.72v-.003c0-.083-.002-.166-.005-.248A6.72 6.72 0 0 0 12.75 12.75a6.72 6.72 0 0 0-5.245 6.127c-.003.082-.005.165-.005.248v.003m10.5 0a24.255 24.255 0 0 1-7.5 0M15.75 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z"
                            />
                        </svg>

                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-green-600">
                        Total Guru
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-slate-900">
                        <?php echo e(number_format($unit->teachers_count ?? $teachers->count())); ?>

                    </p>

                </div>


                
                <div class="rounded-2xl border border-amber-100 bg-white p-6 shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-700">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v18m9-9H3"
                            />

                        </svg>

                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-wider text-amber-600">
                        Penerima Beasiswa
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-slate-900">
                        <?php echo e(number_format($studentStatistics['scholarship'] ?? 0)); ?>

                    </p>

                </div>

            </div>


            
            <div class="mt-12">

                <div class="mb-6">

                    <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                        Rincian Siswa
                    </span>

                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Data Siswa Berdasarkan Jurusan
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Data berikut merupakan statistik siswa berdasarkan jurusan
                        pada tahun ajaran <?php echo e($latestAcademicYear ?? 'terbaru'); ?>.
                    </p>

                </div>


                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($studentData && $studentData->count()): ?>

                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                        
                        <div class="hidden overflow-x-auto md:block">

                            <table class="w-full text-left">

                                <thead class="bg-emerald-950 text-white">

                                    <tr>

                                        <th class="px-6 py-4 text-sm font-bold">
                                            Jurusan
                                        </th>

                                        <th class="px-6 py-4 text-center text-sm font-bold">
                                            Laki-laki
                                        </th>

                                        <th class="px-6 py-4 text-center text-sm font-bold">
                                            Perempuan
                                        </th>

                                        <th class="px-6 py-4 text-center text-sm font-bold">
                                            Total
                                        </th>

                                    </tr>

                                </thead>

                                <tbody class="divide-y divide-slate-100">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $studentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                        <tr class="transition hover:bg-emerald-50/50">

                                            <td class="px-6 py-5">

                                                <div class="font-semibold text-slate-900">

                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($data->major_name): ?>
                                                        <?php echo e($data->major_name); ?>

                                                    <?php else: ?>
                                                        Umum / Tanpa Jurusan
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </div>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($data->major?->short_name): ?>

                                                    <div class="mt-1 text-xs font-medium text-emerald-600">
                                                        <?php echo e($data->major->short_name); ?>

                                                    </div>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            </td>


                                            <td class="px-6 py-5 text-center font-semibold text-blue-700">
                                                <?php echo e(number_format($data->male_count ?? 0)); ?>

                                            </td>


                                            <td class="px-6 py-5 text-center font-semibold text-pink-700">
                                                <?php echo e(number_format($data->female_count ?? 0)); ?>

                                            </td>


                                            <td class="px-6 py-5 text-center">

                                                <span class="inline-flex rounded-full bg-emerald-50 px-4 py-2 text-sm font-bold text-emerald-700">
                                                    <?php echo e(number_format($data->total_count ?? 0)); ?>

                                                </span>

                                            </td>

                                        </tr>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                                </tbody>


                                
                                <tfoot class="border-t-2 border-emerald-200 bg-emerald-50">

                                    <tr>

                                        <td class="px-6 py-5 text-sm font-extrabold uppercase text-emerald-900">
                                            Total
                                        </td>

                                        <td class="px-6 py-5 text-center text-lg font-extrabold text-blue-700">
                                            <?php echo e(number_format($studentStatistics['male'] ?? 0)); ?>

                                        </td>

                                        <td class="px-6 py-5 text-center text-lg font-extrabold text-pink-700">
                                            <?php echo e(number_format($studentStatistics['female'] ?? 0)); ?>

                                        </td>

                                        <td class="px-6 py-5 text-center text-lg font-extrabold text-emerald-800">
                                            <?php echo e(number_format($studentStatistics['total'] ?? 0)); ?>

                                        </td>

                                    </tr>

                                </tfoot>

                            </table>

                        </div>


                        
                        <div class="divide-y divide-slate-100 md:hidden">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $studentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                <div class="p-5">

                                    <div class="flex items-center justify-between gap-4">

                                        <div>

                                            <h4 class="font-bold text-slate-900">

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($data->major_name): ?>
                                                    <?php echo e($data->major_name); ?>

                                                <?php else: ?>
                                                    Umum / Tanpa Jurusan
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            </h4>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($data->major?->short_name): ?>

                                                <p class="mt-1 text-xs font-medium text-emerald-600">
                                                    <?php echo e($data->major->short_name); ?>

                                                </p>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        </div>

                                        <div class="text-right">

                                            <p class="text-xs text-slate-500">
                                                Total
                                            </p>

                                            <p class="text-xl font-extrabold text-emerald-700">
                                                <?php echo e(number_format($data->total_count ?? 0)); ?>

                                            </p>

                                        </div>

                                    </div>


                                    <div class="mt-4 grid grid-cols-2 gap-3">

                                        <div class="rounded-xl bg-blue-50 p-3 text-center">

                                            <p class="text-xs font-medium text-blue-600">
                                                Laki-laki
                                            </p>

                                            <p class="mt-1 text-lg font-bold text-blue-700">
                                                <?php echo e(number_format($data->male_count ?? 0)); ?>

                                            </p>

                                        </div>


                                        <div class="rounded-xl bg-pink-50 p-3 text-center">

                                            <p class="text-xs font-medium text-pink-600">
                                                Perempuan
                                            </p>

                                            <p class="mt-1 text-lg font-bold text-pink-700">
                                                <?php echo e(number_format($data->female_count ?? 0)); ?>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>


                            
                            <div class="bg-emerald-50 p-5">

                                <p class="font-extrabold uppercase text-emerald-900">
                                    Total Semua Jurusan
                                </p>

                                <div class="mt-4 grid grid-cols-3 gap-2">

                                    <div class="text-center">

                                        <p class="text-xs text-blue-600">
                                            Laki-laki
                                        </p>

                                        <p class="mt-1 font-extrabold text-blue-700">
                                            <?php echo e(number_format($studentStatistics['male'] ?? 0)); ?>

                                        </p>

                                    </div>


                                    <div class="text-center">

                                        <p class="text-xs text-pink-600">
                                            Perempuan
                                        </p>

                                        <p class="mt-1 font-extrabold text-pink-700">
                                            <?php echo e(number_format($studentStatistics['female'] ?? 0)); ?>

                                        </p>

                                    </div>


                                    <div class="text-center">

                                        <p class="text-xs text-emerald-600">
                                            Total
                                        </p>

                                        <p class="mt-1 font-extrabold text-emerald-800">
                                            <?php echo e(number_format($studentStatistics['total'] ?? 0)); ?>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                <?php else: ?>

                    
                    <div class="rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-12 text-center">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-8 w-8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 6v6l4 2"
                                />

                            </svg>

                        </div>

                        <h4 class="mt-5 font-bold text-slate-900">
                            Data Siswa Belum Tersedia
                        </h4>

                        <p class="mt-2 text-sm text-slate-500">
                            Belum ada data statistik siswa untuk unit pendidikan ini.
                        </p>

                    </div>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>


            
            <div class="mt-12">

                <div class="mb-6">

                    <span class="text-sm font-bold uppercase tracking-wider text-amber-600">
                        Program Beasiswa
                    </span>

                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Rekap Penerima Beasiswa
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Data beasiswa merupakan gabungan seluruh jurusan
                        pada tahun ajaran terbaru.
                    </p>

                </div>


                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-5">

                    
                    <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                        <p class="text-sm font-semibold text-emerald-600">
                            Tahfiz
                        </p>

                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <?php echo e(number_format($scholarships['Tahfiz'] ?? 0)); ?>

                        </p>

                    </div>


                    
                    <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-sm">

                        <p class="text-sm font-semibold text-blue-600">
                            Akademik
                        </p>

                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <?php echo e(number_format($scholarships['Akademik'] ?? 0)); ?>

                        </p>

                    </div>


                    
                    <div class="rounded-2xl border border-purple-100 bg-white p-6 shadow-sm">

                        <p class="text-sm font-semibold text-purple-600">
                            Non-Akademik
                        </p>

                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <?php echo e(number_format($scholarships['Non-Akademik'] ?? 0)); ?>

                        </p>

                    </div>


                    
                    <div class="rounded-2xl border border-pink-100 bg-white p-6 shadow-sm">

                        <p class="text-sm font-semibold text-pink-600">
                            Yatim
                        </p>

                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <?php echo e(number_format($scholarships['Yatim'] ?? 0)); ?>

                        </p>

                    </div>


                    
                    <div class="rounded-2xl border border-amber-100 bg-white p-6 shadow-sm">

                        <p class="text-sm font-semibold text-amber-600">
                            Yayasan
                        </p>

                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <?php echo e(number_format($scholarships['Beasiswa Yayasan'] ?? 0)); ?>

                        </p>

                    </div>

                </div>


                
                <div class="mt-6 rounded-2xl border border-amber-200 bg-gradient-to-r from-amber-50 to-yellow-50 p-6 shadow-sm sm:p-8">

                    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

                        <div>

                            <p class="text-sm font-bold uppercase tracking-wider text-amber-700">
                                Total Penerima Beasiswa
                            </p>

                            <p class="mt-2 text-sm text-slate-600">
                                Jumlah seluruh kategori beasiswa dari semua jurusan.
                            </p>

                        </div>

                        <div class="text-left sm:text-right">

                            <p class="text-4xl font-extrabold text-amber-800">
                                <?php echo e(number_format($studentStatistics['scholarship'] ?? 0)); ?>

                            </p>

                            <p class="mt-1 text-sm font-medium text-amber-700">
                                Penerima Beasiswa
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            
            <div class="mt-12">

                <div class="mb-6">

                    <span class="text-sm font-bold uppercase tracking-wider text-green-600">
                        Tenaga Pendidik
                    </span>

                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Rincian Guru
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Daftar tenaga pendidik yang terdaftar pada <?php echo e($unit->name); ?>.
                    </p>

                </div>


                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($teachers && $teachers->count()): ?>

                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                        <div class="divide-y divide-slate-100">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $teachers->groupBy('status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $statusTeachers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                <div class="flex items-center justify-between gap-4 px-6 py-5">

                                    <div>

                                        <p class="font-semibold text-slate-800">
                                            <?php echo e($status ?: 'Status Belum Ditentukan'); ?>

                                        </p>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Status tenaga pendidik
                                        </p>

                                    </div>

                                    <span class="shrink-0 rounded-full bg-green-50 px-4 py-2 text-sm font-bold text-green-700">
                                        <?php echo e(number_format($statusTeachers->count())); ?> Guru
                                    </span>

                                </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                        </div>

                    </div>

                <?php else: ?>

                    <div class="rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-10 text-center">

                        <p class="text-sm text-slate-500">
                            Belum ada data guru yang tersedia.
                        </p>

                    </div>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>

        </div>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/pages/units/show.blade.php ENDPATH**/ ?>