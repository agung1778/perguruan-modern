<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'leader' => null
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'leader' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($leader): ?>

<section class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <div class="text-center">

                <img
                    src="<?php echo e(Storage::url($leader->photo)); ?>"
                    class="w-80 h-80 rounded-full object-cover mx-auto shadow-xl"
                    alt="<?php echo e($leader->name); ?>"
                >

            </div>


            <div>

                <span class="text-blue-900 font-semibold">
                    Kepala Yayasan
                </span>


                <h2 class="mt-3 text-4xl font-bold">
                    <?php echo e($leader->name); ?>

                </h2>


                <p class="text-yellow-600 mt-2">
                    <?php echo e($leader->position); ?>

                </p>


                <div class="mt-8 text-slate-600 leading-8">
                    <?php echo e($leader->message); ?>

                </div>

            </div>

        </div>

    </div>

</section>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/foundation.blade.php ENDPATH**/ ?>