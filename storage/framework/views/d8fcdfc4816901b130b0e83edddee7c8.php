<?php $__env->startSection('content'); ?>



<section class="relative isolate overflow-hidden bg-slate-950">


<div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>


<div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>
<div class="pointer-events-none absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>


<div
    class="pointer-events-none absolute inset-0 opacity-[0.04]"
    style="background-image: linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px); background-size: 40px 40px;"
></div>


<div class="relative mx-auto max-w-7xl px-5 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">

    <div class="mx-auto max-w-3xl text-center">

        
        <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-300 backdrop-blur-sm sm:text-sm">
            Informasi & Berita
        </span>

        
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
            Berita Perguruan
        </h1>

        
        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-slate-300 sm:text-lg sm:leading-8">
            Dapatkan informasi terbaru mengenai kegiatan,
            prestasi, pengumuman, dan perkembangan
            Perguruan Amaliah.
        </p>

    </div>

</div>

</section>



<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">

<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    <div class="grid gap-10 lg:grid-cols-4 lg:gap-12">


        
        <div class="lg:col-span-3">

            
            <div class="mb-8 flex flex-col gap-3 sm:mb-10 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <span class="text-sm font-bold uppercase tracking-widest text-emerald-700">
                        Informasi Terbaru
                    </span>

                    <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Berita Terkini
                    </h2>

                </div>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->count()): ?>
                    <span class="text-sm text-slate-500">
                        Menampilkan <?php echo e($news->count()); ?> berita
                    </span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->count()): ?>

                
                <div class="grid gap-6 sm:grid-cols-2 xl:gap-8">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                        <article
                            class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                        >

                            
                            <a
                                href="<?php echo e(route('news.show', ['news' => $item])); ?>"
                                class="relative block aspect-[16/10] overflow-hidden bg-slate-100"
                            >

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->thumbnail): ?>

                                    <img
                                        src="<?php echo e(Storage::url($item->thumbnail)); ?>"
                                        alt="<?php echo e($item->title); ?>"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-full w-full object-cover transition duration-500 ease-out group-hover:scale-105"
                                    >

                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent opacity-70"></div>

                                <?php else: ?>

                                    <div class="flex h-full items-center justify-center bg-slate-100">

                                        <div class="text-center">

                                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.6"
                                                    stroke="currentColor"
                                                    class="h-7 w-7"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M4 16.5 8.5 12l3 3 2.5-2.5 6 6"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M19 19H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2Z"
                                                    />
                                                </svg>

                                            </div>

                                            <span class="mt-3 block text-sm font-medium text-slate-500">
                                                Tidak Ada Gambar
                                            </span>

                                        </div>

                                    </div>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </a>


                            
                            <div class="flex flex-1 flex-col p-6 sm:p-7">

                                
                                <div class="flex flex-wrap items-center gap-3">

                                    
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->category): ?>

                                        <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-700 ring-1 ring-emerald-100">
                                            <?php echo e($item->category->name); ?>

                                        </span>

                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    
                                    <div class="flex items-center gap-1.5 text-xs font-medium text-slate-400">

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
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z"
                                            />
                                        </svg>

                                        <time datetime="<?php echo e($item->created_at->toDateString()); ?>">
                                            <?php echo e($item->created_at->translatedFormat('d F Y')); ?>

                                        </time>

                                    </div>

                                </div>


                                
                                <h2 class="mt-4 text-xl font-bold leading-snug tracking-tight text-slate-900 transition duration-200 group-hover:text-emerald-700 sm:text-2xl">

                                    <a href="<?php echo e(route('news.show', ['news' => $item])); ?>">
                                        <?php echo e($item->title); ?>

                                    </a>

                                </h2>


                                
                                <p class="mt-4 line-clamp-3 text-sm leading-7 text-slate-600 sm:text-base">

                                    <?php echo e(Str::limit(strip_tags($item->content), 140)); ?>


                                </p>


                                
                                <div class="mt-auto pt-6">

                                    <a
                                        href="<?php echo e(route('news.show', ['news' => $item])); ?>"
                                        class="inline-flex items-center gap-2 text-sm font-bold text-emerald-700 transition hover:text-emerald-900"
                                    >

                                        Baca Selengkapnya

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"
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


                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->hasPages()): ?>

                    <div class="mt-10 flex justify-center sm:mt-12">

                        <?php echo e($news->links()); ?>


                    </div>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


            <?php else: ?>

                
                <div class="rounded-3xl border border-slate-200 bg-white px-6 py-20 text-center shadow-sm sm:px-10">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.6"
                            stroke="currentColor"
                            class="h-9 w-9"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6h16M4 10h16M4 14h10M4 18h7"
                            />
                        </svg>

                    </div>

                    <h2 class="mt-6 text-2xl font-bold tracking-tight text-slate-900">
                        Belum Ada Berita
                    </h2>

                    <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500 sm:text-base">
                        Berita dan informasi terbaru akan muncul
                        setelah ditambahkan melalui dashboard admin.
                    </p>

                </div>

            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        </div>


        
        <aside class="lg:col-span-1">

            <div class="lg:sticky lg:top-24">

                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    
                    <div class="border-b border-slate-100 bg-slate-50/70 p-6 sm:p-7">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white shadow-sm">

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
                                        d="M4 6h16M4 10h16M4 14h10M4 18h7"
                                    />
                                </svg>

                            </div>

                            <div>

                                <p class="text-xs font-bold uppercase tracking-widest text-emerald-700">
                                    Navigasi
                                </p>

                                <h3 class="mt-1 text-lg font-bold text-slate-900">
                                    Kategori Berita
                                </h3>

                            </div>

                        </div>

                    </div>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($categories->count()): ?>

                        <ul class="divide-y divide-slate-100 p-2">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                                <li>

                                    <a
                                        href="<?php echo e(route('news.index', ['category' => $category->id])); ?>"
                                        class="group flex items-center justify-between rounded-2xl px-4 py-3.5 text-sm font-semibold text-slate-600 transition duration-200 hover:bg-emerald-50 hover:text-emerald-700"
                                    >

                                        <span>
                                            <?php echo e($category->name); ?>

                                        </span>

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            class="h-4 w-4 text-slate-300 transition duration-200 group-hover:translate-x-1 group-hover:text-emerald-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                            />
                                        </svg>

                                    </a>

                                </li>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                        </ul>

                    <?php else: ?>

                        <div class="p-6 sm:p-7">

                            <p class="text-sm leading-6 text-slate-500">
                                Belum ada kategori berita yang tersedia.
                            </p>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>

        </aside>

    </div>

</div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/pages/news/index.blade.php ENDPATH**/ ?>