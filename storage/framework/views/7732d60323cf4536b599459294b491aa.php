
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($organizations) && $organizations->count()): ?>

<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">

    
    <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


        
        <div class="mx-auto max-w-3xl text-center">

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Struktur Organisasi

            </div>


            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                Yayasan Amaliah

            </h2>


            <div class="mt-6 flex items-center justify-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Mengenal jajaran organisasi yang mengelola dan mengembangkan
                <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>.

            </p>

        </div>


        
        <div class="relative mt-20">


            
            <?php
                $leader = $organizations->first();
                $members = $organizations->skip(1);
            ?>


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($leader): ?>

                <div class="flex justify-center">

                    <article
                        class="group relative w-full max-w-sm overflow-hidden rounded-2xl border-2 border-emerald-500 bg-white p-5 shadow-xl shadow-emerald-900/10 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl"
                    >

                        
                        <div class="absolute inset-x-0 top-0 h-1.5 bg-emerald-600"></div>


                        <div class="flex items-center gap-4">


                            
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($leader->photo)): ?>

                                <div class="h-20 w-20 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-md ring-2 ring-emerald-100">

                                    <img
                                        src="<?php echo e(Storage::url($leader->photo)); ?>"
                                        alt="<?php echo e($leader->name); ?>"
                                        class="h-full w-full object-cover"
                                    >

                                </div>

                            <?php else: ?>

                                <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-2xl font-bold text-white shadow-md">

                                    <?php echo e(strtoupper(mb_substr($leader->name, 0, 1))); ?>


                                </div>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                            
                            <div class="min-w-0">

                                <h3 class="text-lg font-extrabold text-slate-900">

                                    <?php echo e($leader->name); ?>

                                </h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($leader->position)): ?>
                                    <p class="mt-1 text-sm font-bold uppercase tracking-wide text-emerald-600">
                                        <?php echo e($leader->position); ?>

                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </article>
                </div>
                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($members->count()): ?>
                    <div class="mx-auto h-12 w-px bg-emerald-400"></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($members->count()): ?>
                <div class="relative">
                    
                    <div class="absolute left-[10%] right-[10%] top-0 hidden h-px bg-emerald-400 lg:block"></div>
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <div class="relative">
                                
                                <div class="absolute left-1/2 top-0 hidden h-8 w-px -translate-y-full bg-emerald-400 lg:block"></div>
                                
                                <article
                                    class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl hover:shadow-emerald-900/10"
                                >
                                    
                                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600"></div>
                                    <div class="flex items-center gap-4">
                                        
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->photo)): ?>
                                            <div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-md ring-2 ring-emerald-100">
                                                <img
                                                    src="<?php echo e(Storage::url($item->photo)); ?>"
                                                    alt="<?php echo e($item->name); ?>"
                                                    loading="lazy"
                                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                                >
                                            </div>
                                        <?php else: ?>
                                            <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-xl font-bold text-white shadow-md">
                                                <?php echo e(strtoupper(mb_substr($item->name, 0, 1))); ?>

                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        
                                        <div class="min-w-0 flex-1">
                                            <h3 class="truncate text-base font-extrabold text-slate-900">
                                                <?php echo e($item->name); ?>

                                            </h3>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->position)): ?>
                                                <p class="mt-1 text-xs font-bold uppercase tracking-wide text-emerald-600">
                                                    <?php echo e($item->position); ?>

                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->description)): ?>
                                                <p class="mt-2 line-clamp-2 text-xs leading-5 text-slate-500">
                                                    <?php echo e(Str::limit(
                                                        strip_tags($item->description),
                                                        80
                                                    )); ?>

                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/organization.blade.php ENDPATH**/ ?>