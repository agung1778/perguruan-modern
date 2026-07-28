<div class="amaliah-login-page">

    
    <div class="amaliah-login-visual">

        <img
            src="<?php echo e(asset('storage/logo/01KY6YKGTV86VMS5DQNNF0G5SS.jpg')); ?>"
            alt="Gedung Yayasan Amaliah"
            class="amaliah-login-background"
        >

        <div class="amaliah-login-overlay"></div>

        <div class="amaliah-login-visual-content">

            <div class="amaliah-visual-brand">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filament()->getBrandLogo()): ?>
                    <img
                        src="<?php echo e(filament()->getBrandLogo()); ?>"
                        alt="Logo Yayasan Amaliah"
                    >
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div class="amaliah-visual-text">

                <span class="amaliah-visual-label">
                    SISTEM INFORMASI
                </span>

                <h2>
                    Yayasan Amaliah
                </h2>

                <p>
                    Sistem informasi terintegrasi untuk membantu
                    pengelolaan data pendidikan, guru, siswa,
                    dan administrasi Yayasan Amaliah.
                </p>

            </div>

        </div>

    </div>


    
    <div class="amaliah-login-panel">

        <div class="amaliah-login-card">

            
            <div class="amaliah-brand">

                <div class="amaliah-brand-logo">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(filament()->getBrandLogo()): ?>

                        <img
                            src="<?php echo e(filament()->getBrandLogo()); ?>"
                            alt="Logo Yayasan Amaliah"
                        >

                    <?php else: ?>

                        <div class="amaliah-brand-placeholder">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-library'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

                <div class="amaliah-brand-name">
                    <span>SIP YAYASAN</span>
                    <span>AMALIAH</span>
                </div>

            </div>


            
            <div class="amaliah-login-heading">

                <h1>
                    Selamat Datang Kembali
                </h1>

                <p>
                    Silakan login untuk melanjutkan
                </p>

            </div>


            
            <form
                wire:submit="authenticate"
                class="amaliah-login-form"
            >

                <?php echo e($this->form); ?>


                <button
                    type="submit"
                    class="amaliah-login-submit"
                >
                    Login
                </button>

            </form>


            
            <div class="amaliah-security-notice">

                <div class="amaliah-security-icon">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-shield-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>

                <div class="amaliah-security-content">

                    <strong>
                        Akses Terbatas
                    </strong>

                    <p>
                        Akses data guru dan siswa bersifat terbatas
                        dan hanya diperuntukkan untuk keperluan internal
                        Yayasan Amaliah.
                    </p>

                </div>

            </div>


            
            <div class="amaliah-login-footer">

                <span>
                    © <?php echo e(date('Y')); ?> Yayasan Amaliah
                </span>

            </div>

        </div>

    </div>

</div><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/filament/pages/auth/login.blade.php ENDPATH**/ ?>