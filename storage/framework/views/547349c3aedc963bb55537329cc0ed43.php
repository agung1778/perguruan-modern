<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Unit Pendidikan
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-3 text-slate-900">
                Pilih Jenjang Pendidikan
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Kenali unit pendidikan kami dari tingkat TK hingga Kampus.
            </p>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($units) && $units->count()): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300">
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->photo): ?>
                            <img src="<?php echo e(asset('storage/'.$unit->photo)); ?>" alt="<?php echo e($unit->name); ?>" class="h-56 w-full object-cover">
                        <?php else: ?>
                            <div class="h-56 bg-slate-200 flex items-center justify-center">
                                <span class="text-slate-500">
                                    Foto Belum Tersedia
                                </span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="p-8 relative">
                            
                            <div class="flex justify-center -mt-20">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->logo): ?>
                                    <img src="<?php echo e(asset('storage/'.$unit->logo)); ?>" alt="<?php echo e($unit->name); ?>" class="h-24 w-24 rounded-full object-cover bg-white p-2 shadow-xl border-4 border-white">
                                <?php else: ?>
                                    <div class="h-24 w-24 rounded-full bg-blue-900 flex items-center justify-center text-white text-3xl font-bold shadow-xl">
                                        <?php echo e(strtoupper(substr($unit->short_name ?? $unit->name,0,1))); ?>

                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div class="text-center mt-6">
                                <h3 class="text-2xl font-bold text-slate-900">
                                    <?php echo e($unit->name); ?>

                                </h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->short_name): ?>
                                    <span class="text-sm text-blue-900 font-semibold">
                                        <?php echo e($unit->short_name); ?>

                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <p class="mt-3 text-slate-500 leading-7">
                                    <?php echo e(Str::limit($unit->description,90)); ?>

                                </p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 mt-8">
                                <div class="rounded-xl bg-blue-50 p-5 text-center">
                                    <h4 class="text-3xl font-bold text-blue-900">
                                        <?php echo e($unit->students_count ?? 0); ?>

                                    </h4>
                                    <p class="text-sm text-slate-600">
                                        Siswa
                                    </p>
                                </div>
                                <div class="rounded-xl bg-yellow-50 p-5 text-center">
                                    <h4 class="text-3xl font-bold text-yellow-600">
                                        <?php echo e($unit->teachers_count ?? 0); ?>

                                    </h4>
                                    <p class="text-sm text-slate-600">
                                        Guru
                                    </p>
                                </div>
                            </div>
                            
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unit->website): ?>
                                <div class="mt-8">
                                    <a href="<?php echo e($unit->website); ?>"target="_blank" class="w-full inline-flex justify-center items-center rounded-xl bg-blue-900 hover:bg-yellow-500 hover:text-slate-900 text-white py-4 transition font-semibold">
                                        Kunjungi Website
                                    </a>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        <?php else: ?>
            <div class="text-center mt-16 text-slate-500">
                Belum ada unit pendidikan.
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/units.blade.php ENDPATH**/ ?>