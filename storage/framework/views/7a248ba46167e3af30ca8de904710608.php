<?php $__env->startSection('content'); ?>



<section class="relative overflow-hidden bg-slate-950 py-20 sm:py-24 lg:py-28">


<div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>


<div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

<div class="pointer-events-none absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-teal-400/10 blur-3xl"></div>

<div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.06),transparent_60%)]"></div>



<div class="relative mx-auto max-w-7xl px-5 text-center sm:px-6 lg:px-8">

    <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-300 backdrop-blur-sm sm:text-sm">
        Dokumentasi Perguruan
    </span>

    <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
        Galeri Perguruan
    </h1>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-slate-300 sm:text-lg sm:leading-8">
        Jelajahi berbagai dokumentasi kegiatan, prestasi,
        dan momen berharga dari keluarga besar Perguruan Amaliah.
    </p>

</div>

</section>



<section class="bg-slate-50 py-20 sm:py-24 lg:py-28">

<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    
    <div class="mx-auto mb-14 max-w-3xl text-center">

        <span class="text-sm font-bold uppercase tracking-[0.2em] text-emerald-700">
            Dokumentasi
        </span>

        <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
            Momen dan Kegiatan Kami
        </h2>

        <p class="mt-4 text-base leading-7 text-slate-600 sm:text-lg">
            Lihat berbagai dokumentasi kegiatan dan aktivitas
            yang menjadi bagian dari perjalanan Perguruan Amaliah.
        </p>

    </div>


    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($albums->count()): ?>

        
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                <?php
                    $cover = $album->photos->first();
                ?>

                
                <article
                    class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl"
                >

                    
                    <a
                        href="<?php echo e(route('gallery.show', $album)); ?>"
                        class="relative block aspect-[4/3] overflow-hidden bg-slate-100"
                    >

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cover && filled($cover->photo)): ?>

                            <img
                                src="<?php echo e(Storage::url($cover->photo)); ?>"
                                alt="<?php echo e($album->title); ?>"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                            >

                            
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent opacity-70 transition duration-300 group-hover:opacity-90"></div>

                            
                            <div class="absolute bottom-5 left-5">

                                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold text-white backdrop-blur-md">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-4 w-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 15.75 7.41 10.59a2.25 2.25 0 0 1 3.18 0l5.16 5.16m-1.5-1.5 1.41-1.41a2.25 2.25 0 0 1 3.18 0l2.16 2.16M3.75 6.75h.008v.008H3.75V6.75Z"
                                        />
                                    </svg>

                                    Lihat Album
                                </span>

                            </div>

                        <?php else: ?>

                            <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-50 to-slate-100">

                                <div class="text-center">

                                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-sm">

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
                                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008v.008H13.5V3.75Z"
                                            />
                                        </svg>

                                    </div>

                                    <p class="mt-4 text-sm font-semibold text-slate-500">
                                        Belum Ada Foto
                                    </p>

                                </div>

                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </a>


                    
                    <div class="flex flex-1 flex-col p-7">

                        <div class="flex-1">

                            <h2 class="text-xl font-bold leading-snug text-slate-900 transition duration-300 group-hover:text-emerald-700">
                                <?php echo e($album->title); ?>

                            </h2>

                            <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">

                                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.7"
                                        stroke="currentColor"
                                        class="h-4 w-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008v.008H13.5V3.75Z"
                                        />
                                    </svg>

                                </span>

                                <span class="font-medium">
                                    <?php echo e($album->photos->count()); ?> Foto Dokumentasi
                                </span>

                            </div>

                        </div>


                        
                        <div class="mt-7 border-t border-slate-100 pt-6">

                            <a
                                href="<?php echo e(route('gallery.show', $album)); ?>"
                                class="inline-flex items-center gap-2 text-sm font-bold text-emerald-700 transition hover:text-emerald-900"
                            >

                                Lihat Selengkapnya

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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


        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($albums->hasPages()): ?>

            <div class="mt-14 flex justify-center">

                <?php echo e($albums->links()); ?>


            </div>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <?php else: ?>

        
        <div class="mx-auto max-w-2xl rounded-3xl border border-slate-200 bg-white px-6 py-20 text-center shadow-sm">

            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-10 w-10"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008v.008H13.5V3.75Z"
                    />
                </svg>

            </div>

            <h2 class="mt-6 text-2xl font-bold text-slate-900">
                Belum Ada Album Galeri
            </h2>

            <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
                Album dokumentasi kegiatan akan muncul setelah
                ditambahkan melalui dashboard administrator.
            </p>

        </div>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/pages/gallery/index.blade.php ENDPATH**/ ?>