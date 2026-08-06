<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"class="scroll-smooth">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title>
        <?php echo $__env->yieldContent(
            'title',
            $website?->school_name ?? config('app.name')
        ); ?>
    </title>
    <meta name="description" content="<?php echo e($website?->meta_description ?? 'Website resmi Perguruan Amaliah'); ?>">
    <meta name="robots" content="index, follow">
    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($website?->logo)): ?>
        <link rel="icon" type="image/png" href="<?php echo e(Storage::url($website->logo)); ?>">
    <?php elseif(filled($website?->favicon)): ?>
        <link rel="icon" type="image/png" href="<?php echo e(Storage::url($website->favicon)); ?>">
    <?php else: ?>
        <link rel="icon" type="image/png" href="<?php echo e(asset('logo/logo.png')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    
    
    
    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/css/app.css',
        'resources/js/app.js'
    ]); ?>
    
    <?php echo $__env->yieldPushContent('head'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    
    <?php echo $__env->make('layouts.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".gallerySwiper", {
        slidesPerView: 1,
        spaceBetween: 24,

        loop: true,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".gallery-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".gallery-next",
            prevEl: ".gallery-prev",
        },

        breakpoints: {

            640: {
                slidesPerView: 2,
            },

            1024: {
                slidesPerView: 3,
            },

        },

    });
</script>
</body>
</html><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/layouts/app.blade.php ENDPATH**/ ?>