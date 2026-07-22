<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div>
                <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                    Sambutan
                </span>
                <h2 class="mt-4 text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
                    Selamat Datang di
                    <span class="text-blue-900">
                        <?php echo e($website?->site_name ?? 'Perguruan Amaliah'); ?>

                    </span>
                </h2>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->welcome_message): ?>
                    <p class="mt-8 text-slate-600 leading-8 text-lg">
                        <?php echo e($website->welcome_message); ?>

                    </p>
                <?php else: ?>
                    <p class="mt-8 text-slate-500 leading-8">
                        Selamat datang di website resmi Perguruan Amaliah.
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            
            <div class="flex justify-center">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->logo): ?>
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <img src="<?php echo e(asset('storage/'.$website->logo)); ?>" alt="<?php echo e($website->site_name); ?>" class="w-72 h-72 object-contain">
                    </div>
                <?php else: ?>
                    <div class="w-72 h-72 rounded-3xl bg-slate-100 flex items-center justify-center">
                        <span class="text-slate-400">
                            Logo Perguruan
                        </span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/welcome.blade.php ENDPATH**/ ?>