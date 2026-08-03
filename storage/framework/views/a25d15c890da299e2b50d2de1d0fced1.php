
<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">
    
    <div class="pointer-events-none absolute -left-32 top-20 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-green-100/50 blur-3xl"></div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">
            
            <div>
                
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Tentang Kami
                </div>
                
                <h2 class="max-w-2xl text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>

                </h2>

                
                <div class="mt-6 flex items-center gap-2">
                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
                </div>
                
                <div class="mt-7 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->about): ?>
                        <?php echo nl2br(e($website->about)); ?>

                    <?php else: ?>
                        <p>
                            Informasi tentang perguruan belum tersedia.
                        </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                
                <div class="mt-9">
                    <a
                        href="<?php echo e(route('about')); ?>"
                        class="group inline-flex items-center gap-3 rounded-xl bg-emerald-700 px-7 py-3.5 font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-1 hover:bg-emerald-800 hover:shadow-xl hover:shadow-emerald-700/30"
                    >
                        <span>
                            Mengenal Kami Lebih Dekat
                        </span>
                        <span class="text-lg transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>
                    </a>
                </div>
            </div>

            
            <div class="relative">
                
                <div class="absolute -inset-4 rounded-[2rem] bg-emerald-100/70 blur-sm"></div>
                
                <div class="relative overflow-hidden rounded-3xl border border-emerald-100 bg-white shadow-2xl shadow-emerald-900/10">
                    
                    <div class="h-1.5 w-full bg-gradient-to-r from-emerald-700 via-emerald-500 to-green-400"></div>
                    <div class="p-7 sm:p-9 lg:p-10">
                        
                        <div>
                            <div class="flex items-center gap-4">
                                
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-700 shadow-sm">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-7 w-7"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                        />
                                    </svg>
                                </div>
                                
                                <div>
                                    <span class="text-sm font-semibold uppercase tracking-wider text-emerald-600">
                                        Arah Kami
                                    </span>
                                    <h3 class="mt-1 text-2xl font-bold text-slate-900">
                                        Visi
                                    </h3>
                                </div>
                            </div>
                            
                            <div class="mt-6 rounded-2xl bg-slate-50 p-5 text-base leading-8 text-slate-600">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->vision): ?>
                                    <?php echo nl2br(e($website->vision)); ?>

                                <?php else: ?>
                                    <p>
                                        Visi belum tersedia.
                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="my-8 flex items-center gap-3">
                            <div class="h-px flex-1 bg-slate-200"></div>
                            <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                            <div class="h-px flex-1 bg-slate-200"></div>
                        </div>

                        
                        <div>
                            <div class="flex items-center gap-4">
                                
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700 shadow-sm">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-7 w-7"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.75v10.5M6.75 12h10.5"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4.5 4.5h15v15h-15z"
                                        />
                                    </svg>
                                </div>
                                
                                <div>
                                    <span class="text-sm font-semibold uppercase tracking-wider text-green-600">
                                        Langkah Kami
                                    </span>
                                    <h3 class="mt-1 text-2xl font-bold text-slate-900">
                                        Misi
                                    </h3>
                                </div>
                            </div>
                            
                            <div class="mt-6 rounded-2xl bg-slate-50 p-5 text-base leading-8 text-slate-600">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->mission): ?>
                                    <?php echo nl2br(e($website->mission)); ?>

                                <?php else: ?>
                                    <p>
                                        Misi belum tersedia.
                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/about.blade.php ENDPATH**/ ?>