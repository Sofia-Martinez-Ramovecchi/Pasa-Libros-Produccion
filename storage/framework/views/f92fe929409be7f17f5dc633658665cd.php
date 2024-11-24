<!-- resources/views/publicaciones/index.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><b>Lista de Publicaciones</b></h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Libro</th>
                <th>Localidad</th>
                <th>Fecha de Creación</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($publicacion->id_publicacion); ?></td>
                    <td><?php echo e($publicacion->estado_publicacion->nombre_estado_publicacion ?? 'N/A'); ?></td>
                    <td><?php echo e($publicacion->libro->nombre_libro ?? 'N/A'); ?></td>
                    <td><?php echo e($publicacion->localidad->nombre_localidad ?? 'N/A'); ?></td>
                    <td><?php echo e($publicacion->fecha_creacion->format('d-m-Y')); ?></td>
                    <td><?php echo e($publicacion->descripcion_publicacion); ?></td>

                    <td>
                        <a class="btn btn-primary botones" href="<?php echo e(route('publicaciones.ver', $publicacion->id_publicacion)); ?>">Ver publicación</a>
                    </td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Paginación -->
    <?php echo e($publicaciones->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/publicaciones/mostrar.blade.php ENDPATH**/ ?>