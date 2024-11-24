<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Perfil de <?php echo e($usuario->nombre_usuario); ?></h1>

    <div class="row">
        <div class="col-md-4">
            <h3>Foto de Perfil</h3>
            <div class="profile-photo">
                <img 
                    src="<?php echo e($usuario->profile_photo ? asset('storage/' . $usuario->profile_photo) : asset('images/default-profile.png')); ?>" 
                    class="img-thumbnail rounded-circle" 
                    style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>

        <div class="col-md-8">
            <h3>Información Personal</h3>
            <ul>
                <li><strong>Nombre de usuario:</strong> <?php echo e($usuario->nombre_usuario); ?></li>
                <li><strong>Email:</strong> <?php echo e($usuario->email); ?></li>
                <li><strong>Estado de cuenta:</strong> <?php echo e($usuario->id_estado_cuenta == 1 ? 'Activo' : 'Suspendido'); ?></li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Acciones</h3>
            <form action="<?php echo e(route('usuarios.destroy', $usuario)); ?>" method="POST" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger" type="submit" style="margin-top:10px">Eliminar Cuenta</button>
            </form>
        </div>
    </div>

    <a href="<?php echo e(route('usuarios.index')); ?>" class="btn btn-secondary mt-3">Volver a la lista de usuarios</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/usuarios/perfil.blade.php ENDPATH**/ ?>