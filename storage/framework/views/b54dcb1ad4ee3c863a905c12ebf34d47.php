
<h1>Contactos </h1>
<?php $__env->startSection('contenido'); ?>
<h2>Escribime </h2>
<?php if(session()->has('info')): ?>
    <h3><?php echo e(session('info')); ?></h3>
        <?php else: ?>
        <?php echo $__env->make('messages.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/messages/create.blade.php ENDPATH**/ ?>