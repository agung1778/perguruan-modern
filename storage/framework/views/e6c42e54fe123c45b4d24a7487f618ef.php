
<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">
    
    <div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/50 blur-3xl"></div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="mx-auto max-w-3xl text-center">
            
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Agenda
            </div>
            
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
                Kegiatan Mendatang
            </h2>
            
            <div class="mt-6 flex items-center justify-center gap-2">
                <span class="h-1 w-12 rounded-full bg-emerald-600"></span>
                <span class="h-1 w-4 rounded-full bg-emerald-300"></span>
            </div>

            
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                Informasi kegiatan dan agenda terbaru
                yang akan dilaksanakan oleh
                <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>.
            </p>
        </div>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($agendas) && $agendas->count()): ?>
            <div class="mt-16 space-y-5">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <article
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10 md:p-7"
                    >
                        
                        <div class="absolute left-0 top-0 h-full w-1 bg-emerald-600 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                        <div class="flex flex-col gap-7 lg:flex-row lg:items-center lg:justify-between">
                            
                            <div class="flex flex-col gap-6 sm:flex-row sm:items-start">
                                
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->date): ?>
                                    <div class="flex h-20 w-20 shrink-0 flex-col items-center justify-center rounded-2xl bg-emerald-700 text-white shadow-lg shadow-emerald-700/20 transition duration-300 group-hover:bg-emerald-800">
                                        <span class="text-2xl font-extrabold leading-none">
                                            <?php echo e($agenda->date->format('d')); ?>

                                        </span>
                                        <span class="mt-1 text-xs font-semibold uppercase tracking-wider text-emerald-100">
                                            <?php echo e($agenda->date->translatedFormat('M')); ?>

                                        </span>
                                    </div>
                                <?php else: ?>
                                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.8"
                                            stroke="currentColor"
                                            class="h-9 w-9"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                            />
                                        </svg>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                
                                <div class="min-w-0">
                                    
                                    <h3 class="text-xl font-bold leading-snug text-slate-900 transition duration-300 group-hover:text-emerald-700 md:text-2xl">
                                        <?php echo e($agenda->title); ?>

                                    </h3>
                                    
                                    <div class="mt-3 flex flex-col gap-2 text-sm text-slate-500 sm:flex-row sm:flex-wrap sm:gap-x-5">
                                        
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->date): ?>
                                            <div class="flex items-center gap-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.8"
                                                    stroke="currentColor"
                                                    class="h-4 w-4 text-emerald-600"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                                    />
                                                </svg>
                                                <span>
                                                    <?php echo e($agenda->date->translatedFormat('d F Y')); ?>

                                                </span>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->location): ?>
                                            <div class="flex items-center gap-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.8"
                                                    stroke="currentColor"
                                                    class="h-4 w-4 text-emerald-600"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                    />
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                                    />
                                                </svg>
                                                <span>
                                                    <?php echo e($agenda->location); ?>

                                                </span>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->description): ?>
                                        <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-600">
                                            <?php echo e(Str::limit(strip_tags($agenda->description), 150)); ?>

                                        </p>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="shrink-0">
                                <a
                                    href="<?php echo e(route('agenda.show', $agenda)); ?>"
                                    class="group/button inline-flex w-full items-center justify-center gap-3 rounded-xl bg-emerald-700 px-6 py-3.5 font-semibold text-white shadow-md shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-800 hover:shadow-lg hover:shadow-emerald-700/30 lg:w-auto"
                                >
                                    <span>
                                        Lihat Detail
                                    </span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-5 w-5 transition-transform duration-300 group-hover/button:translate-x-1"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
            
            <div class="mt-12 text-center">
                <a
                    href="<?php echo e(route('agenda.index')); ?>"
                    class="group inline-flex items-center gap-3 rounded-xl border-2 border-emerald-700 px-7 py-3.5 font-semibold text-emerald-700 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-700 hover:text-white hover:shadow-lg hover:shadow-emerald-700/20"
                >
                    <span>
                        Lihat Semua Agenda
                    </span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>
                </a>
            </div>
        <?php else: ?>
            
            <div class="mt-16 overflow-hidden rounded-3xl border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">
                
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.6"
                        stroke="currentColor"
                        class="h-10 w-10"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                        />
                    </svg>
                </div>
                
                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Belum Ada Agenda
                </h3>
                
                <p class="mx-auto mt-2 max-w-md text-sm leading-7 text-slate-500">
                    Belum ada kegiatan atau agenda yang tersedia saat ini.
                    Silakan kembali lagi untuk melihat informasi kegiatan terbaru.
                </p>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/agenda.blade.php ENDPATH**/ ?>