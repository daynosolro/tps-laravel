<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<style>
    .active{
        text-decoration: none;
    color:red;
    background-color:black;
    }
    .error{
        color: red;
        font-size: 18px;
    }
    </style>
<body>
    <?php
    function activarMenu($url){
    return request()->is($url) ? 'active':'';
    }
    ?>
    <h1>Contactos</h1>
    <h1><?php echo e(request()->is('/') ? 'Esta en el home':'NO esta en el home'); ?></h1>

    <header>
        <nav>
        <a class="<?php echo e(activarMenu('/')); ?>" href="<?php echo e(route('home')); ?>">Inicio</a>

        <a  class="<?php echo e(activarMenu('saludos/*')); ?>" href="<?php echo e(route('saludos','Jorge')); ?>">saludos</a>
        <a class="<?php echo e(request()->is('contactos') ? 'active' : ''); ?>" href="<?php echo e(route('contactos')); ?>">Contacto</a>
    </nav>
    </header>
    <?php if(session()->has('info')): ?>
        <?php echo e(session('info')); ?>



    <?php else: ?>

    <form action="contacto" method="post">
        <?php echo csrf_field(); ?>
     <p>   <label for="">Nombre
        <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>">
      <?php echo $errors->first('nombre','<span class=error>:message</span>'); ?></label></p>
      <p> <label for="">E-mail
        <input type="email" name="mail" value="<?php echo e(old('mail')); ?>">
        <?php echo $errors->first('mail','<span class=error>:message</span>'); ?></label></p>
        <p>  <label for="">Mensaje
       <textarea name="mensaje"  cols="30" rows="10">
        <?php echo e(old('mensaje')); ?>

       </textarea><?php echo $errors->first('mensaje','<span class=error>:message</span>'); ?></label></p>
       <input type="submit" value="Enviar">
     </form>

     <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/contactos.blade.php ENDPATH**/ ?>