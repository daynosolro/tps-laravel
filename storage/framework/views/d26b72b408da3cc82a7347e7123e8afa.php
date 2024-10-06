<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .active {
            text-decoration: none;
            color: red;
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <h1><?php echo e(request()->is('/') ? 'Esta en el home' : 'NO esta en el home'); ?></h1>

    <header>
        <nav>
            <a class="<?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Inicio</a>
            <a class="<?php echo e(request()->is('saludos/*') ? 'active' : ''); ?>" href="<?php echo e(route('saludos', 'Jorge')); ?>">Saludos</a>
            <a class="<?php echo e(request()->is('contactos') ? 'active' : ''); ?>" href="<?php echo e(route('contactos')); ?>">Contacto</a>
        </nav>
    </header>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/saludos.blade.php ENDPATH**/ ?>