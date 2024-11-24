<!-- resources/views/publicacionesUsuarios.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Publicaciones de Otros Usuarios</h1>

        <div class="row">
            <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="book-item border p-3 rounded mb-3">
                        <h3><?php echo e($publicacion->libro->titulo); ?></h3>
                        <p class="descripcion"><?php echo e($publicacion->descripcion_publicacion); ?></p>
                        <p class="Estado"><?php echo e($publicacion->estado_publicacion->estado); ?></p>
                        <p class="Localidad">Localidad: <?php echo e($publicacion->localidad->nombre); ?></p>
                        <p class="Provincia">Provincia: <?php echo e($publicacion->localidad->provincia->nombre ?? 'Sin provincia'); ?></p>
                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                            Ver más&#8230;
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/publicaciones/publicacionesUsuarios.blade.php ENDPATH**/ ?>