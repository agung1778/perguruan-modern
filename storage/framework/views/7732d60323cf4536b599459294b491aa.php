<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($organizations) && $organizations->count()): ?>

<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Struktur Organisasi
            </span>
            <h2 class="mt-4 text-4xl md:text-5xl font-bold text-slate-900">
                Yayasan
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Mengenal jajaran organisasi yang mengelola Perguruan Amaliah.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-300 p-8 text-center">
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->photo): ?>
                        <img src="<?php echo e(asset('storage/'.$item->photo)); ?>" alt="<?php echo e($item->name); ?>" class="w-28 h-28 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                    <?php else: ?>
                        <div class="w-28 h-28 rounded-full bg-blue-900 text-white flex items-center justify-center mx-auto text-3xl font-bold shadow-lg">
                            <?php echo e(strtoupper(substr($item->name,0,1))); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        <?php echo e($item->name); ?>

                    </h3>
                    <p class="text-blue-900 font-semibold mt-2">
                        <?php echo e($item->position); ?>

                    </p>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->description): ?>
                        <p class="mt-4 text-sm text-slate-500 leading-6">
                            <?php echo e(Str::limit($item->description,80)); ?>

                        </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/organization.blade.php ENDPATH**/ ?>