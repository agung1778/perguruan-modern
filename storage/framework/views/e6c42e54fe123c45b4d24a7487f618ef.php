<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Agenda
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-slate-900">
                Kegiatan Mendatang
            </h2>
            <p class="mt-4 text-slate-600">
                Informasi kegiatan terbaru Perguruan Amaliah.
            </p>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($agendas) && $agendas->count()): ?>
            <div class="space-y-6 mt-16">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="bg-slate-50 rounded-3xl shadow-sm hover:shadow-lg transition p-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div>
                            <h3 class="font-bold text-xl text-slate-900">
                                <?php echo e($agenda->title); ?>

                            </h3>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->date): ?>
                                <p class="mt-3 text-slate-500 flex items-center gap-2">
                                    <span>
                                        📅
                                    </span>
                                    <?php echo e(\Carbon\Carbon::parse($agenda->date)->translatedFormat('d F Y')); ?>

                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($agenda->description): ?>
                                <p class="mt-3 text-slate-600">
                                    <?php echo e(Str::limit($agenda->description,120)); ?>

                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                        <a href="<?php echo e(route('agenda.show',$agenda->slug ?? $agenda->id)); ?>"class="inline-flex items-center bg-blue-900 hover:bg-yellow-500 hover:text-slate-900 text-white px-6 py-3 rounded-xl font-semibold transition">
                            Detail →
                        </a>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        <?php else: ?>
            <div class="mt-16 text-center text-slate-500">
                Belum ada agenda.
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/agenda.blade.php ENDPATH**/ ?>