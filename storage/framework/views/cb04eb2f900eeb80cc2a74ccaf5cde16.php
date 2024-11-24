<?php
use Illuminate\Support\Facades\Session;


?>



<?php $__env->startSection('content'); ?>

<div class="container">

    <h1><b>Administrador de usuarios</b></h1>

<?php if(Session::has('Mensaje')): ?>

<div class="alert alert-success">

    <?php echo e(Session::get('Mensaje')); ?>


</div>

<?php endif; ?>

<form action="<?php echo e(route('usuarios.index')); ?>" method="GET" class="form-inline mb-3" style="margin-top:10px">
    <div class="input-group w-100">
        <input type="text" name="search" class="form-control" placeholder="Buscar por nombre de usuario" value="<?php echo e(request('search')); ?>">
            <button type="submit" class="btn btn-warning ml-2"><span class="input-group-text"><i class="fa fa-search"></i></span></button> <!-- Ícono de lupa -->
    </div>
</form>

<br>

<table class="table table-light table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($usuario->id_usuario); ?></td>
                <td><?php echo e($usuario->nombre_usuario); ?></td>
                <td><?php echo e($usuario->email); ?></td>
                <td><?php echo e($usuario->estado_cuentum->nombre_estado_cuenta ?? 'No asignado'); ?></td>


                <td>

                    <a class="btn btn-primary botones"  href="<?php echo e(route('usuarios.verPerfil', $usuario)); ?>">Ver perfil</a>

                    <form action="<?php echo e(route('usuarios.suspender', $usuario)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <input type="number" name="duracion_suspension" placeholder="Días" min="1" class="form-control" style="width: 80px; display: inline;">
                        <button class="btn btn-secondary botones" type="submit">Suspender</button>
                    </form>


                    <form action="<?php echo e(route('usuarios.destroy', $usuario)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger botones"  type="submit">Eliminar</button>
                    </form>


                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($usuarios->links('pagination::bootstrap-4')); ?>


    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/usuarios/index.blade.php ENDPATH**/ ?>