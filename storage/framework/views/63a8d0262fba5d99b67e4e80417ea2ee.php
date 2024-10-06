
<p><label for="nombre">
    Nombre
    <input class="form-control" type="text" name="nombre" value="<?php echo e($message->nombre ?? old('nombre')); ?>">
    <?php echo $errors->first('nombre', '<span class=error>:message</span>'); ?>

</label></p>

<p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="<?php echo e($message->email ?? old('email')); ?>">
    <?php echo $errors->first('email', '<span class=error>:message</span>'); ?>

</label></p>

<p><label for="mensaje">
    Mensaje
    <textarea class="form-control" name="mensaje"><?php echo e($message->mensaje ?? old('mensaje')); ?></textarea>
    <?php echo $errors->first('mensaje', '<span class=error>:message</span>'); ?>

</label></p>

<input class="btn btn-primary" id="guardar" type="submit" value="<?php echo e($btnText ?? 'Guardar'); ?>"><?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/messages/form.blade.php ENDPATH**/ ?>