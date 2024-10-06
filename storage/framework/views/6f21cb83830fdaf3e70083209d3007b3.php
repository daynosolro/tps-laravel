<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <script>
        window.Laravel ={
            csrfToken: "<?php echo e(csrf_token()); ?>"
        }
    </script>
    <title>Mi sitio</title>
</head>
<body>

  <h1><?php echo e(activeMenu('/') ? 'Esta en el home' : 'NO esta en el home'); ?></h1>

    <header>
        <nav>
            <a class="<?php echo e(activeMenu('/')); ?>" href="<?php echo e(route('home')); ?>">Inicio</a>
            <a class="<?php echo e(activeMenu('saludos/*')); ?>" href="<?php echo e(route('saludos', 'Jorge')); ?>">Saludos</a>
            <a class="<?php echo e(activeMenu('messages/create')); ?>" href="<?php echo e(route('messages.create')); ?>">Contacto</a>
            <a class="<?php echo e(activeMenu('messages')); ?>" href="<?php echo e(route('messages.index')); ?>">Mostrar mensajes</a>

        </nav>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('contenido'); ?>

        <footer>Copyright ® <?php echo e(date('Y')); ?></footer>
    </div>
    <script src="/js/app.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/layout.blade.php ENDPATH**/ ?>