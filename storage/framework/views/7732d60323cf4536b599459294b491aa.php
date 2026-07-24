
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


            
            <div class="mt-6 flex justify-center items-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Mengenal jajaran organisasi yang mengelola dan mengembangkan
                <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>.

            </p>

        </div>


        
        <div class="mt-16 grid gap-7 sm:grid-cols-2 lg:grid-cols-4">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>

                
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 text-center shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                >

                    
                    <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>


                    
                    <div class="relative mx-auto w-fit">

                        
                        <div class="absolute -inset-2 rounded-full border border-emerald-200/70 transition-all duration-500 group-hover:scale-110 group-hover:border-emerald-400"></div>


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->photo)): ?>

                            
                            <div class="relative h-28 w-28 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-lg ring-4 ring-emerald-50">

                                <img
                                    src="<?php echo e(Storage::url($item->photo)); ?>"
                                    alt="<?php echo e($item->name); ?>"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                >

                            </div>

                        <?php else: ?>

                            
                            <div class="relative flex h-28 w-28 items-center justify-center rounded-full border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-3xl font-bold text-white shadow-lg ring-4 ring-emerald-50">

                                <?php echo e(strtoupper(mb_substr($item->name, 0, 1))); ?>


                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>


                    
                    <h3 class="mt-7 line-clamp-2 text-xl font-bold leading-snug text-slate-900">

                        <?php echo e($item->name); ?>


                    </h3>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->position)): ?>

                        <div class="mt-3">

                            <span class="inline-flex rounded-full bg-emerald-50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wide text-emerald-700">

                                <?php echo e($item->position); ?>


                            </span>

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filled($item->description)): ?>

                        <p class="mt-5 line-clamp-3 text-sm leading-7 text-slate-500">

                            <?php echo e(Str::limit(
                                strip_tags($item->description),
                                100
                            )); ?>


                        </p>

                    <?php else: ?>

                        <p class="mt-5 text-sm leading-7 text-slate-400">

                            Bagian dari jajaran pengelola
                            <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>.

                        </p>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    
                    <div class="mx-auto mt-6 h-1 w-8 rounded-full bg-emerald-200 transition-all duration-300 group-hover:w-14 group-hover:bg-emerald-500"></div>

                </article>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        </div>

    </div>

</section>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/organization.blade.php ENDPATH**/ ?>