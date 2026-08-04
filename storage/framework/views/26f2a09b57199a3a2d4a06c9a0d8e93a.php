<?php $__env->startSection('content'); ?>


<section class="relative overflow-hidden bg-emerald-950">

    
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>

    
    <div class="pointer-events-none absolute inset-0 overflow-hidden">

        <div class="absolute -right-32 -top-32 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl"></div>

        <div class="absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-emerald-300/10 blur-3xl"></div>

        <div class="absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 -translate-x-1/2 rounded-full bg-emerald-500/5 blur-3xl"></div>

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

            <span class="inline-flex rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur-sm">
                <?php echo e($unit->short_name ?: 'Unit Pendidikan'); ?>

            </span>


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




<section class="bg-slate-50 py-14 sm:py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">


        
        <div class="grid items-start gap-8 lg:grid-cols-5 lg:gap-12">


            
            <div class="lg:col-span-3">

                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->photo): ?>

                        <img
                            src="<?php echo e(Storage::url($unit->photo)); ?>"
                            alt="<?php echo e($unit->name); ?>"
                            loading="lazy"
                            decoding="async"
                            class="h-[280px] w-full object-cover sm:h-[420px] lg:h-[520px]"
                        >

                    <?php else: ?>

                        <div class="flex h-[280px] items-center justify-center bg-gradient-to-br from-emerald-800 to-emerald-950 sm:h-[420px] lg:h-[520px]">

                            <div class="text-center">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="mx-auto h-16 w-16 text-emerald-300/40"
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

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 lg:p-10">


                    
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
                        class="mt-4 flex w-full items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700"
                    >
                        ← Kembali ke Unit Pendidikan
                    </a>

                </div>

            </div>

        </div>



        
        <div class="mt-16 border-t border-slate-200 pt-16">


            
            <div class="max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                    Data Pendidikan
                </span>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Statistik <?php echo e($unit->name); ?>

                </h2>

                <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                    Informasi statistik siswa, tenaga pendidik, dan program beasiswa
                    yang tersedia pada unit pendidikan ini.
                </p>

            </div>


            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($academicYears && $academicYears->count()): ?>

                <form
                    method="GET"
                    action="<?php echo e(route('units.show', $unit)); ?>"
                    class="mt-6"
                >

                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">

                        <label
                            for="academic_year"
                            class="text-sm font-semibold text-slate-700"
                        >
                            Tahun Ajaran
                        </label>

                        <select
                            id="academic_year"
                            name="academic_year"
                            onchange="this.form.submit()"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 shadow-sm outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100 sm:w-auto"
                        >

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $academicYears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                <option
                                    value="<?php echo e($year); ?>"
                                    <?php echo e($year == ($selectedAcademicYear ?? $latestAcademicYear) ? 'selected' : ''); ?>

                                >
                                    <?php echo e($year); ?>

                                </option>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                        </select>

                    </div>

                </form>

            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>



            
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">


                
                <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

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
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-.083-.002-.166-.005-.248A6.72 6.72 0 0 0 9.75 12.75a6.72 6.72 0 0 0-5.245 6.127c-.003.082-.005.165-.005.248v.003m10.5 0a9.38 9.38 0 0 1-3.75.75 9.38 9.38 0 0 1-3.75-.75"
                                />
                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                Total Siswa
                            </p>

                            <p class="mt-1 text-2xl font-extrabold text-slate-900">
                                <?php echo e(number_format($studentStatistics['total'] ?? 0)); ?>

                            </p>

                        </div>

                    </div>

                </div>


                
                <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

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
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-.083-.002-.166-.005-.248A6.72 6.72 0 0 0 9.75 12.75a6.72 6.72 0 0 0-5.245 6.127c-.003.082-.005.165-.005.248v.003m10.5 0a9.38 9.38 0 0 1-3.75-.75"
                                />
                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                Guru
                            </p>

                            <p class="mt-1 text-2xl font-extrabold text-slate-900">
                                <?php echo e(number_format($teachers->where('type', 'teacher')->where('is_active', true)->count())); ?>

                            </p>

                        </div>

                    </div>

                </div>


                
                <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

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
                                    d="M12 6.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5ZM4.5 21a7.5 7.5 0 0 1 15 0"
                                />
                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                Karyawan / Staff
                            </p>

                            <p class="mt-1 text-2xl font-extrabold text-slate-900">
                                <?php echo e(number_format($teachers->where('type', 'staff')->where('is_active', true)->count())); ?>

                            </p>

                        </div>

                    </div>

                </div>


                
                <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

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

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                Beasiswa
                            </p>

                            <p class="mt-1 text-2xl font-extrabold text-slate-900">
                                <?php echo e(number_format($studentStatistics['scholarship'] ?? 0)); ?>

                            </p>

                        </div>

                    </div>

                </div>

            </div>



            
            <div
                class="mt-12"
                x-data="{ activeTab: 'students' }"
            >

                
                <div class="overflow-x-auto pb-2">

                    <div class="flex min-w-max rounded-2xl border border-slate-200 bg-white p-1.5 shadow-sm">

                        <button
                            type="button"
                            @click="activeTab = 'students'"
                            :class="activeTab === 'students'
                                ? 'bg-emerald-700 text-white shadow-sm'
                                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                            class="flex items-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493"
                                />
                            </svg>

                            Data Siswa

                        </button>


                        <button
                            type="button"
                            @click="activeTab = 'teachers'"
                            :class="activeTab === 'teachers'
                                ? 'bg-emerald-700 text-white shadow-sm'
                                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                            class="flex items-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 6.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5ZM4.5 21a7.5 7.5 0 0 1 15 0"
                                />
                            </svg>

                            Tenaga Pendidik

                        </button>


                        <button
                            type="button"
                            @click="activeTab = 'scholarship'"
                            :class="activeTab === 'scholarship'
                                ? 'bg-emerald-700 text-white shadow-sm'
                                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                            class="flex items-center gap-2 rounded-xl px-5 py-3 text-sm font-bold transition"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3v18m9-9H3"
                                />
                            </svg>

                            Beasiswa

                        </button>

                    </div>

                </div>



                
                <div
                    x-show="activeTab === 'students'"
                    x-transition
                    class="mt-6"
                >

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">


                        
                        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

                            <div>

                                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                    Statistik Siswa
                                </span>

                                <h3 class="mt-2 text-2xl font-bold text-slate-900">
                                    Data Siswa Berdasarkan Jurusan
                                </h3>

                                <p class="mt-2 text-sm leading-6 text-slate-500">
                                    Rekapitulasi jumlah siswa berdasarkan jurusan
                                    pada tahun ajaran yang dipilih.
                                </p>

                            </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($selectedAcademicYear ?? $latestAcademicYear): ?>

                                <span class="inline-flex w-fit rounded-full bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-700">
                                    <?php echo e($selectedAcademicYear ?? $latestAcademicYear); ?>

                                </span>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($studentData && $studentData->count()): ?>

                            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $studentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                    <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5 transition hover:border-emerald-200 hover:bg-emerald-50/40">

                                        <div class="flex items-start justify-between gap-4">

                                            <div>

                                                <h4 class="font-bold text-slate-900">
                                                    <?php echo e($data->major_name ?: 'Umum / Tanpa Jurusan'); ?>

                                                </h4>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($data->major?->short_name): ?>

                                                    <p class="mt-1 text-xs font-semibold text-emerald-600">
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


                                        <div class="mt-5 grid grid-cols-2 gap-3">

                                            <div class="rounded-xl bg-white p-3 text-center">

                                                <p class="text-xs font-medium text-slate-500">
                                                    Laki-laki
                                                </p>

                                                <p class="mt-1 font-bold text-slate-800">
                                                    <?php echo e(number_format($data->male_count ?? 0)); ?>

                                                </p>

                                            </div>


                                            <div class="rounded-xl bg-white p-3 text-center">

                                                <p class="text-xs font-medium text-slate-500">
                                                    Perempuan
                                                </p>

                                                <p class="mt-1 font-bold text-slate-800">
                                                    <?php echo e(number_format($data->female_count ?? 0)); ?>

                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                            </div>

                        <?php else: ?>

                            <div class="mt-8 rounded-2xl border border-dashed border-slate-200 bg-slate-50 p-10 text-center">

                                <p class="text-sm font-medium text-slate-500">
                                    Data siswa belum tersedia.
                                </p>

                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>

                </div>



                
                <div
                    x-show="activeTab === 'teachers'"
                    x-transition
                    class="mt-6"
                >

                    <?php

                        $activeTeachers = $teachers
                            ->where('is_active', true)
                            ->where('type', 'teacher');

                        $activeStaff = $teachers
                            ->where('is_active', true)
                            ->where('type', 'staff');

                    ?>


                    <div
                        x-data="{ educatorTab: 'all' }"
                        class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8"
                    >


                        
                        <div>

                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                Tenaga Pendidik
                            </span>

                            <h3 class="mt-2 text-2xl font-bold text-slate-900">
                                Guru & Karyawan / Staff
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Kenali tenaga pendidik dan karyawan yang berkontribusi
                                dalam kegiatan pendidikan di <?php echo e($unit->name); ?>.
                            </p>

                        </div>


                        
                        <div class="mt-6 flex flex-wrap gap-2">

                            <button
                                type="button"
                                @click="educatorTab = 'all'"
                                :class="educatorTab === 'all'
                                    ? 'bg-emerald-700 text-white'
                                    : 'bg-slate-100 text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                                class="rounded-xl px-4 py-2.5 text-sm font-bold transition"
                            >
                                Semua
                            </button>


                            <button
                                type="button"
                                @click="educatorTab = 'teacher'"
                                :class="educatorTab === 'teacher'
                                    ? 'bg-emerald-700 text-white'
                                    : 'bg-slate-100 text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                                class="rounded-xl px-4 py-2.5 text-sm font-bold transition"
                            >
                                Guru
                            </button>


                            <button
                                type="button"
                                @click="educatorTab = 'staff'"
                                :class="educatorTab === 'staff'
                                    ? 'bg-emerald-700 text-white'
                                    : 'bg-slate-100 text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'"
                                class="rounded-xl px-4 py-2.5 text-sm font-bold transition"
                            >
                                Karyawan / Staff
                            </button>

                        </div>



                        
                        <div
                            x-show="educatorTab === 'all'"
                            x-transition
                            class="mt-8"
                        >

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($teachers->where('is_active', true)->count()): ?>

                                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $teachers->where('is_active', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                        <?php echo $__env->make('partials.educator-card', [
                                            'teacher' => $teacher
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                                </div>

                            <?php else: ?>

                                <p class="py-10 text-center text-sm text-slate-500">
                                    Belum ada data tenaga pendidik.
                                </p>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>



                        
                        <div
                            x-show="educatorTab === 'teacher'"
                            x-transition
                            class="mt-8"
                        >

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($activeTeachers->count()): ?>

                                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $activeTeachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                        <?php echo $__env->make('partials.educator-card', [
                                            'teacher' => $teacher
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                                </div>

                            <?php else: ?>

                                <p class="py-10 text-center text-sm text-slate-500">
                                    Belum ada data guru.
                                </p>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>



                        
                        <div
                            x-show="educatorTab === 'staff'"
                            x-transition
                            class="mt-8"
                        >

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($activeStaff->count()): ?>

                                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $activeStaff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                        <?php echo $__env->make('partials.educator-card', [
                                            'teacher' => $teacher
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                                </div>

                            <?php else: ?>

                                <p class="py-10 text-center text-sm text-slate-500">
                                    Belum ada data karyawan / staff.
                                </p>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>

                    </div>

                </div>



                
                <div
                    x-show="activeTab === 'scholarship'"
                    x-transition
                    class="mt-6"
                >

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">


                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                            Program Beasiswa
                        </span>

                        <h3 class="mt-2 text-2xl font-bold text-slate-900">
                            Rekap Penerima Beasiswa
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Informasi jumlah penerima beasiswa berdasarkan kategori.
                        </p>


                        
                        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                                'Tahfiz' => 'Tahfiz',
                                'Akademik' => 'Akademik',
                                'Non-Akademik' => 'Non-Akademik',
                                'Yatim' => 'Yatim',
                                'Beasiswa Yayasan' => 'Yayasan'
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                <div class="rounded-2xl border border-slate-100 bg-slate-50 p-5">

                                    <p class="text-sm font-semibold text-slate-600">
                                        <?php echo e($label); ?>

                                    </p>

                                    <p class="mt-2 text-3xl font-extrabold text-emerald-700">
                                        <?php echo e(number_format($scholarships[$key] ?? 0)); ?>

                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Penerima
                                    </p>

                                </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/pages/units/show.blade.php ENDPATH**/ ?>