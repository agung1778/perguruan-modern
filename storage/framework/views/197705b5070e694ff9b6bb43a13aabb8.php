<?php $__env->startSection('content'); ?>


<section class="relative isolate overflow-hidden bg-slate-950">

<div class="pointer-events-none absolute inset-0">
    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-600/20 blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-teal-700/20 blur-3xl"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-emerald-950 to-slate-950"></div>
</div>


<div class="relative mx-auto max-w-7xl px-5 py-24 sm:px-6 sm:py-28 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-4xl text-center text-white">
        
        <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-500/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-300 backdrop-blur-sm sm:text-sm">
            Tentang Kami
        </span>
        
        <h1 class="mt-7 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
            Mengenal
            <span class="text-emerald-400">
                Perguruan Amaliah
            </span>
        </h1>
        
        <p class="mx-auto mt-7 max-w-3xl text-base leading-8 text-slate-300 sm:text-lg">
            Mengenal lebih dekat sejarah, visi, misi, serta komitmen
            Perguruan Amaliah dalam membangun generasi yang unggul,
            berkarakter, berprestasi, dan berintegritas.
        </p>
        
        <div class="mx-auto mt-10 flex items-center justify-center gap-3">
            <span class="h-px w-12 bg-emerald-500/40"></span>
            <span class="h-2 w-2 rounded-full bg-amber-400"></span>
            <span class="h-px w-12 bg-emerald-500/40"></span>
        </div>
    </div>
</div>
</section>



<section class="bg-white py-20 sm:py-24 lg:py-28">
<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
    <div class="grid items-start gap-14 lg:grid-cols-2 lg:gap-24">
        
        <div class="relative">
            
            <span class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-[0.15em] text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                Sejarah
            </span>
            
            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Perjalanan
                <span class="text-emerald-700">
                    Perguruan Amaliah
                </span>
            </h2>
            
            <div class="mt-7 h-1 w-20 rounded-full bg-amber-500"></div>
            
            <div class="mt-8 text-base leading-8 text-slate-600">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($website?->history)): ?>
                    <?php echo nl2br(e($website->history)); ?>

                <?php else: ?>
                    <p>
                        Informasi sejarah perguruan belum tersedia.
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
        
        <div class="space-y-6">
            
            <div class="group rounded-3xl border border-emerald-100 bg-emerald-50/60 p-7 transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-lg sm:p-8">
                <div class="flex items-start gap-5">
                    
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-700 text-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.644C3.423 7.51 7.36 4.5 12 4.5c4.64 0 8.577 3.01 9.964 7.178.07.21.07.434 0 .644C20.577 16.49 16.64 19.5 12 19.5c-4.64 0-8.577-3.01-9.964-7.178Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <h3 class="text-2xl font-bold text-emerald-950">
                            Visi
                        </h3>
                        <p class="mt-3 text-base leading-8 text-slate-600">
                            <?php echo e($website?->vision ?? 'Visi belum tersedia.'); ?>

                        </p>
                    </div>
                </div>
            </div>
            
            <div class="group rounded-3xl border border-slate-200 bg-slate-50 p-7 transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-lg sm:p-8">
                <div class="flex items-start gap-5">
                    
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-700 text-white shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 2.25 2.25L15 9.75"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <h3 class="text-2xl font-bold text-emerald-950">
                            Misi
                        </h3>
                        <div class="mt-3 text-base leading-8 text-slate-600">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($website?->mission)): ?>
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



<section class="bg-slate-50 py-20 sm:py-24">
<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
    
    <div class="mx-auto max-w-3xl text-center">
        <span class="font-bold uppercase tracking-[0.15em] text-emerald-700">
            Komitmen Kami
        </span>
        <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
            Membangun Generasi Masa Depan
        </h2>
        <p class="mt-5 leading-8 text-slate-600">
            Perguruan Amaliah berkomitmen memberikan pendidikan yang
            mengembangkan potensi peserta didik secara akademik maupun
            karakter untuk menghadapi masa depan.
        </p>
    </div>
    
    <div class="mt-14 grid gap-6 md:grid-cols-3">
        
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14.25a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25 6 21l6-3 6 3-1.5-6.75"/>
                </svg>
            </div>
            <h3 class="mt-6 text-xl font-bold text-slate-900">
                Pendidikan Berkualitas
            </h3>
            <p class="mt-3 leading-7 text-slate-600">
                Mendorong proses pembelajaran yang berkualitas dan relevan
                dengan kebutuhan peserta didik.
            </p>
        </div>
        
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4.5 6v5.25c0 4.67 3.2 8.88 7.5 9.75 4.3-.87 7.5-5.08 7.5-9.75V6L12 3Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                </svg>
            </div>
            <h3 class="mt-6 text-xl font-bold text-slate-900">
                Pembentukan Karakter
            </h3>
            <p class="mt-3 leading-7 text-slate-600">
                Menanamkan nilai karakter, integritas, kedisiplinan, dan
                tanggung jawab dalam kehidupan sehari-hari.
            </p>
        </div>
        
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-teal-50 text-teal-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.5 12 3l9 10.5"/>
                    <path stroke-linecap="round" stroke-linejoin="round"d="M5.25 11.25V21h13.5v-9.75"/>
                </svg>
            </div>
            <h3 class="mt-6 text-xl font-bold text-slate-900">
                Pengembangan Potensi
            </h3>
            <p class="mt-3 leading-7 text-slate-600">
                Memberikan ruang bagi peserta didik untuk mengembangkan
                bakat, minat, kreativitas, dan prestasi.
            </p>
        </div>
    </div>
</div>

</section>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($leaders) && $leaders->count()): ?>


<?php echo $__env->make('sections.foundation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($organizations) && $organizations->count()): ?>


<?php echo $__env->make('sections.organization', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/pages/about.blade.php ENDPATH**/ ?>