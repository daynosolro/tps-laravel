
<h1>Contactos</h1>

<?php $__env->startSection('contenido'); ?>
<h1>Todos los mensajes</h1>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Mensaje</th>

</tr>
</thead>
<tbody>
<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td>
<a href="<?php echo e(route('messages.show',$message->id)); ?>">
<?php echo e($message->id); ?></a></td>
<td><?php echo e($message->nombre); ?></td>
<td><?php echo e($message->email); ?></td>
<td><?php echo e($message->mensaje); ?></td>
<td>
<a class="btn btn-info btn-xs" href="<?php echo e(route('messages.edit', $message->id)); ?>">Editar</a>
<form style="display:inline" method="POST" action="<?php echo e(route('messages.destroy', $message->id)); ?>">
<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>


<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--!! $messages->fragment('hash')->appends(request()->query())->links('pagination::default') !!--> </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_laravel_1_8_24\resources\views/messages/index.blade.php ENDPATH**/ ?>