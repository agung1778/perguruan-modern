<section class="bg-slate-100 py-24">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                    Galeri
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-3 text-slate-900">
                    Dokumentasi Kegiatan
                </h2>
                <p class="mt-4 text-slate-600">
                    Berbagai kegiatan dan aktivitas Perguruan Amaliah.
                </p>
            </div>
            <a href="<?php echo e(route('gallery.index')); ?>"class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-900 text-white hover:bg-yellow-500 hover:text-slate-900 transition font-semibold">
                Lihat Semua →
            </a>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($gallery) && $gallery->count()): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-14">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php
                        $cover = $album->photos->first();
                    ?>
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300">
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cover && $cover->gallery): ?>
                            <div class="overflow-hidden">
                                <img src="<?php echo e(asset('storage/'.$cover->gallery)); ?>" alt="<?php echo e($album->title); ?>" class="w-full h-64 object-cover hover:scale-110 transition duration-500">
                            </div>
                        <?php else: ?>
                            <div class="w-full h-64 bg-slate-200 flex items-center justify-center">
                                <span class="text-slate-500">
                                    Belum Ada Foto
                                </span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">
                                <?php echo e($album->title); ?>

                            </h3>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($album->description): ?>
                                <p class="mt-3 text-slate-600 line-clamp-2">
                                    <?php echo e($album->description); ?>

                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <div class="mt-4 text-sm text-blue-900 font-semibold">
                                <?php echo e($album->photos->count()); ?> Foto
                            </div>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        <?php else: ?>
            <div class="mt-16 text-center">
                <div class="inline-flex px-6 py-4 bg-white rounded-xl text-slate-500 shadow">
                    Belum ada galeri.
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/gallery.blade.php ENDPATH**/ ?>