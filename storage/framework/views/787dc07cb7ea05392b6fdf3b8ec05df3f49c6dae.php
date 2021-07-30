<?php $attributes = $attributes->exceptProps(['color' => 'red']); ?>
<?php foreach (array_filter((['color' => 'red']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<button <?php echo e($attributes->merge(['type' => 'submit', 'class' => "inline-flex justify-center items-center px-4 py-2 bg-$color-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-600 active:bg-$color-500 focus:outline-none focus:border-$color-500 focus:ring focus:ring-$color-300 disabled:opacity-25 transition"])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH C:\xampp\htdocs\pdvsa\resources\views/components/button.blade.php ENDPATH**/ ?>