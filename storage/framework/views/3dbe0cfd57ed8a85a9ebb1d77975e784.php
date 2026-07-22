<footer class="bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid gap-12 lg:grid-cols-4">
            
            <div class="lg:col-span-1">
                <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->logo): ?>
                        <img src="<?php echo e(Storage::url($website->logo)); ?>" class="h-16 w-16 object-contain" alt="<?php echo e($website->school_name); ?>">
                    <?php else: ?>
                        <div class="h-16 w-16 rounded-full bg-blue-900 flex items-center justify-center font-bold text-xl">
                            PM
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </a>
                <h3 class="mt-5 text-xl font-bold">
                    <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>

                </h3>
                <p class="mt-5 text-slate-400 leading-7">
                    <?php echo e(Str::limit(
                        $website?->about ?? 
                        'Website resmi perguruan Amaliah.',
                        180
                    )); ?>

                </p>
            </div>

            
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Navigasi
                </h3>
                <ul class="space-y-4 text-slate-400">
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-yellow-400 transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('about')); ?>" class="hover:text-yellow-400 transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('units.index')); ?>" class="hover:text-yellow-400 transition">
                            Unit Pendidikan
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('news.index')); ?>" class="hover:text-yellow-400 transition">
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('gallery.index')); ?>" class="hover:text-yellow-400 transition">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('ppdb.index')); ?>" class="text-slate-400 hover:text-white transition">
                            PPDB
                        </a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Kontak
                </h3>
                <div class="space-y-5 text-slate-400">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->address): ?>
                    <div class="flex gap-3">
                        <span>
                            📍
                        </span>
                        <p>
                            <?php echo e($website->address); ?>

                        </p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->phone): ?>
                    <div class="flex gap-3">
                        <span>
                            ☎
                        </span>
                        <p>
                            <?php echo e($website->phone); ?>

                        </p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->email): ?>
                    <div class="flex gap-3">
                        <span>
                            ✉
                        </span>

                        <p>
                            <?php echo e($website->email); ?>

                        </p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Ikuti Kami
                </h3>
                <div class="flex flex-wrap gap-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->facebook): ?>
                    <a href="<?php echo e($website->facebook); ?>" target="_blank"class="px-4 py-2 rounded-xl bg-white/10 hover:bg-blue-600 transition">
                        Facebook
                    </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->instagram): ?>
                    <a href="<?php echo e($website->instagram); ?>" target="_blank" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-pink-600 transition">
                        Instagram
                    </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->youtube): ?>
                    <a href="<?php echo e($website->youtube); ?>" target="_blank" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-red-600 transition">
                        YouTube
                    </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>

        
        <div class="border-t border-slate-800 mt-16 pt-8 flex flex-col md:flex-row justify-between gap-4 text-sm text-slate-500">
            <p>
                © <?php echo e(date('Y')); ?>

                <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>

                . All Rights Reserved.
            </p>
            <p>
                Developed with Laravel & Tailwind CSS
            </p>
        </div>
    </div>
</footer><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/layouts/partials/footer.blade.php ENDPATH**/ ?>