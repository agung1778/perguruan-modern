
<footer class="relative overflow-hidden bg-emerald-950 text-white">

    
    <div class="pointer-events-none absolute -right-40 -top-40 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute -left-40 bottom-0 h-96 w-96 rounded-full bg-green-400/5 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8">


        
        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">


            
            <div class="lg:col-span-1">

                
                <a
                    href="<?php echo e(route('home')); ?>"
                    class="inline-flex items-center"
                >

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->logo)): ?>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-white/10 bg-white/10 p-2 shadow-lg backdrop-blur-sm">

                            <img
                                src="<?php echo e(Storage::url($website->logo)); ?>"
                                class="h-full w-full object-contain"
                                alt="<?php echo e($website?->school_name ?? 'Logo Perguruan'); ?>"
                            >

                        </div>

                    <?php else: ?>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-600 text-xl font-bold text-white shadow-lg shadow-emerald-950/30">

                            PM

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </a>


                
                <h3 class="mt-6 text-xl font-bold leading-snug text-white">

                    <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>


                </h3>


                
                <p class="mt-5 text-sm leading-7 text-emerald-100/60">

                    <?php echo e(Str::limit(
                        strip_tags($website?->about ?? 'Website resmi perguruan Amaliah.'),
                        180
                    )); ?>


                </p>


                
                <div class="mt-7 flex items-center gap-2">

                    <span class="h-1 w-10 rounded-full bg-emerald-500"></span>

                    <span class="h-1 w-3 rounded-full bg-emerald-300"></span>

                </div>

            </div>


            
            <div>

                <h3 class="text-lg font-bold text-white">

                    Navigasi

                </h3>


                <div class="mt-6 h-1 w-8 rounded-full bg-emerald-500"></div>


                <ul class="mt-7 space-y-4 text-sm">

                    <li>
                        <a
                            href="<?php echo e(route('home')); ?>"
                            class="group flex items-center gap-2 text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            <span class="h-1 w-0 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-3"></span>
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php echo e(route('about')); ?>"
                            class="group flex items-center gap-2 text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            <span class="h-1 w-0 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-3"></span>
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php echo e(route('units.index')); ?>"
                            class="group flex items-center gap-2 text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            <span class="h-1 w-0 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-3"></span>
                            Unit Pendidikan
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php echo e(route('news.index')); ?>"
                            class="group flex items-center gap-2 text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            <span class="h-1 w-0 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-3"></span>
                            Berita
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php echo e(route('gallery.index')); ?>"
                            class="group flex items-center gap-2 text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            <span class="h-1 w-0 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-3"></span>
                            Galeri
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php echo e(route('ppdb.index')); ?>"
                            class="group flex items-center gap-2 font-medium text-emerald-300 transition hover:text-emerald-200"
                        >
                            <span class="h-1 w-3 rounded-full bg-emerald-500"></span>
                            PPDB
                        </a>
                    </li>

                </ul>

            </div>


            
            <div>

                <h3 class="text-lg font-bold text-white">

                    Kontak

                </h3>


                <div class="mt-6 h-1 w-8 rounded-full bg-emerald-500"></div>


                <div class="mt-7 space-y-6 text-sm">


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->address)): ?>

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/5 text-emerald-400 ring-1 ring-white/10">

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
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 10.5-7.5 10.5S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                    />
                                </svg>

                            </div>

                            <p class="leading-7 text-emerald-100/60">

                                <?php echo e($website->address); ?>


                            </p>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->phone)): ?>

                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/5 text-emerald-400 ring-1 ring-white/10">

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
                                        d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h2.386c.967 0 1.81.618 2.118 1.534l.93 2.79a2.25 2.25 0 0 1-.512 2.258l-1.4 1.4a16.5 16.5 0 0 0 6.746 6.746l1.4-1.4a2.25 2.25 0 0 1 2.258-.512l2.79.93a2.25 2.25 0 0 1 1.534 2.118V22.5c0 1.243-1.007 2.25-2.25 2.25h-.75C10.201 24.75 1.5 16.049 1.5 5.25v-.75Z"
                                    />
                                </svg>

                            </div>

                            <a
                                href="tel:<?php echo e($website->phone); ?>"
                                class="text-emerald-100/60 transition hover:text-emerald-300"
                            >

                                <?php echo e($website->phone); ?>


                            </a>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->email)): ?>

                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/5 text-emerald-400 ring-1 ring-white/10">

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
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6-9.75-6"
                                    />
                                </svg>

                            </div>

                            <a
                                href="mailto:<?php echo e($website->email); ?>"
                                class="break-all text-emerald-100/60 transition hover:text-emerald-300"
                            >

                                <?php echo e($website->email); ?>


                            </a>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>


            
            <div>

                <h3 class="text-lg font-bold text-white">

                    Ikuti Kami

                </h3>


                <div class="mt-6 h-1 w-8 rounded-full bg-emerald-500"></div>


                <p class="mt-7 text-sm leading-7 text-emerald-100/60">

                    Ikuti media sosial kami untuk mendapatkan informasi,
                    berita, dan kegiatan terbaru.

                </p>


                <div class="mt-6 flex flex-wrap gap-3">


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->facebook)): ?>

                        <a
                            href="<?php echo e($website->facebook); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Facebook"
                            class="flex h-11 items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 text-sm font-semibold text-emerald-100/70 transition hover:border-emerald-400/30 hover:bg-emerald-600 hover:text-white"
                        >

                            Facebook

                        </a>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->instagram)): ?>

                        <a
                            href="<?php echo e($website->instagram); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="flex h-11 items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 text-sm font-semibold text-emerald-100/70 transition hover:border-emerald-400/30 hover:bg-emerald-600 hover:text-white"
                        >

                            Instagram

                        </a>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->youtube)): ?>

                        <a
                            href="<?php echo e($website->youtube); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="YouTube"
                            class="flex h-11 items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 text-sm font-semibold text-emerald-100/70 transition hover:border-emerald-400/30 hover:bg-emerald-600 hover:text-white"
                        >

                            YouTube

                        </a>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>

        </div>


        
        <div class="mt-16 border-t border-white/10 pt-8">

            <div class="flex flex-col gap-4 text-sm text-emerald-100/40 md:flex-row md:items-center md:justify-between">

                <p>

                    © <?php echo e(date('Y')); ?>


                    <span class="font-medium text-emerald-100/60">

                        <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>


                    </span>

                    . All Rights Reserved.

                </p>


                <p>

                    Developed with
                    <span class="font-medium text-emerald-300">
                        Laravel
                    </span>
                    &
                    <span class="font-medium text-emerald-300">
                        Tailwind CSS
                    </span>

                </p>

            </div>

        </div>

    </div>

</footer>
<?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/layouts/partials/footer.blade.php ENDPATH**/ ?>