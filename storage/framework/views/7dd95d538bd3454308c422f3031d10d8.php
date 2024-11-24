<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php echo e($error); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('usuarios.update', $usuario)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <div class="form-group">
                <label class="control-label" for="nombre_usuario"><?php echo e('Nombre'); ?></label>
                <input class="form-control <?php echo e($errors->has('nombre_usuario') ? 'is-invalid' : ''); ?>" type="text"
                    name="nombre_usuario" id="nombre_usuario"
                    value="<?php echo e(isset($usuario->nombre_usuario) ? $usuario->nombre_usuario : old('nombre_usuario')); ?>">
                <?php echo $errors->first('nombre_usuario', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
            <br />

            <div class="form-group">
                <label class="control-label" for="password"><?php echo e('Contraseña'); ?></label>
                <input class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" type="password"
                    name="password" id="password"
                    value="<?php echo e(isset($usuario->password) ? $usuario->password : old('password')); ?>">
                <?php echo $errors->first('password', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
            <br />


            <div class="form-group">
                <label class="control-label" for="email"><?php echo e('Email'); ?></label>
                <input class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" type="email" name="email"
                    id="email" value="<?php echo e(isset($usuario->email) ? $usuario->email : old('email')); ?>">
                <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

            </div>

            <br />

            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-dark" href="<?php echo e(route('usuarios.index')); ?>">Regresar</a>

            <br />

        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/usuarios/edit.blade.php ENDPATH**/ ?>