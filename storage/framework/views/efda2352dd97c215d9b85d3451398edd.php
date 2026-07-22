<header x-data="{ open:false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
<div class="max-w-7xl mx-auto">
    
    <div class="flex items-center justify-between h-20 px-6">
        
        <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->logo): ?>
                <img src="<?php echo e(Storage::url($website->logo)); ?>" class="h-14 w-14 object-contain" alt="<?php echo e($website->school_name); ?>">
            <?php else: ?>
                <div class="h-14 w-14 rounded-full bg-blue-900 flex items-center justify-center text-white font-bold">
                    PM
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div>
                <h1 class="font-bold text-lg text-blue-900">
                    <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>

                </h1>
                <p class="text-xs text-slate-500">
                    Website Resmi
                </p>
            </div>
        </a>
        
        <nav class="hidden lg:flex items-center gap-8">
            <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900'); ?>">
                Beranda
            </a>
            <a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900'); ?>">
                Tentang
            </a>
            <a href="<?php echo e(route('units.index')); ?>" class="<?php echo e(request()->routeIs('units.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900'); ?>">
                Unit Pendidikan
            </a>
            <a href="<?php echo e(route('news.index')); ?>" class="<?php echo e(request()->routeIs('news.*') ? 'text-blue-900 font-semibold'  : 'hover:text-blue-900'); ?>">
                Berita
            </a>
            <a href="<?php echo e(route('agenda.index')); ?>" class="<?php echo e(request()->routeIs('agenda.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900'); ?>">
                Agenda
            </a>
            <a href="<?php echo e(route('gallery.index')); ?>" class="<?php echo e(request()->routeIs('gallery.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900'); ?>">
                Galeri
            </a>
            <a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'text-blue-900 font-semibold'  : 'hover:text-blue-900'); ?>">
                Kontak
            </a>
            <a href="<?php echo e(route('ppdb.index')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'text-blue-900 font-semibold'  : 'hover:text-blue-900'); ?>">
                PPDB
            </a>
        </nav>
        
        <button class="lg:hidden text-2xl" @click="open=!open">
            ☰
        </button>
    </div>
</div>

    <div x-show="open" x-transition @click.outside="open=false" class="lg:hidden border-t bg-white">
        <div class="flex flex-col p-6 gap-5">
            <a href="<?php echo e(route('home')); ?>">
                Beranda
            </a>
            <a href="<?php echo e(route('about')); ?>">
                Tentang
            </a>
            <a href="<?php echo e(route('units.index')); ?>">
                Unit Pendidikan
            </a>
            <a href="<?php echo e(route('news.index')); ?>">
                Berita
            </a>
            <a href="<?php echo e(route('agenda.index')); ?>">
                Agenda
            </a>
            <a href="<?php echo e(route('gallery.index')); ?>">
                Galeri
            </a>
            <a href="<?php echo e(route('contact')); ?>">
                Kontak
            </a>
            <a href="<?php echo e(route('ppdb.index')); ?>">
                PPDB
            </a>
        </div>
    </div>
</header><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>