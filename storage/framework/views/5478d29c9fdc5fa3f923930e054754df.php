<section class="bg-blue-950 text-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div>
                <span class="text-yellow-400 font-semibold uppercase tracking-wider">
                    Hubungi Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4">
                    Informasi Kontak
                </h2>
                <p class="mt-6 text-slate-300 leading-8">
                    Silahkan hubungi kami untuk informasi lebih lanjut mengenai
                    Perguruan Amaliah.
                </p>
                <div class="mt-10 space-y-8">
                    
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            📍
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Alamat
                            </h4>
                            <p class="text-slate-300 mt-1">
                                <?php echo e($website?->address ?? 'Alamat belum tersedia'); ?>

                            </p>
                        </div>
                    </div>
                    
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            ☎️
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Telepon
                            </h4>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->phone): ?>
                                <a href="tel:<?php echo e($website->phone); ?>" class="text-slate-300 hover:text-yellow-400 transition">
                                    <?php echo e($website->phone); ?>

                                </a>
                            <?php else: ?>
                                <p class="text-slate-300">
                                    Belum tersedia
                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            ✉️
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Email
                            </h4>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->email): ?>
                                <a href="mailto:<?php echo e($website->email); ?>" class="text-slate-300 hover:text-yellow-400 transition">
                                    <?php echo e($website->email); ?>

                                </a>
                            <?php else: ?>
                                <p class="text-slate-300">
                                    Belum tersedia
                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($website?->google_maps): ?>
                    <div class="rounded-3xl overflow-hidden shadow-2xl bg-white">
                        <?php echo $website->google_maps; ?>

                    </div>
                <?php else: ?>
                    <div class="bg-slate-800 rounded-3xl h-96 flex items-center justify-center">
                        <span class="text-slate-400">
                            Google Maps belum tersedia.
                        </span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/contact.blade.php ENDPATH**/ ?>