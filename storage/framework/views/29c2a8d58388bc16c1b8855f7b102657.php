<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="card">
        <div class="card-header">
            <h1><b>Detalles de la Publicación Reportada</b></h1>
        </div>

        <div class="card-body">
            <p><strong>Libro:</strong><?php echo e($publicacionReporte->publicacion->libro->nombre_libro ?? 'Título no disponible'); ?></p>
            <p><strong>Descripción:</strong> <?php echo e($publicacionReporte->publicacion->descripcion_publicacion ?? 'No disponible'); ?></p>
            <p><strong>Estado:</strong> <?php echo e($publicacionReporte->publicacion->estado_publicacion->nombre_estado_publicacion ?? 'No disponible'); ?></p>
            <p><strong>Localidad:</strong> <?php echo e($publicacionReporte->publicacion->localidad->nombre_localidad ?? 'No disponible'); ?></p>
            <p><strong>Usuario que reportó:</strong> <?php echo e($publicacionReporte->usuario->nombre_usuario ?? 'No disponible'); ?></p>
            <p><strong>Comentario del reporte:</strong> <?php echo e($publicacionReporte->comentario_reporte ?? 'No disponible'); ?></p>
            <p><strong>Fecha de reporte:</strong> <?php echo e($publicacionReporte->fecha_creacion->format('d/m/Y H:i')); ?></p>
        </div>

        <div class="card-footer">
            <!-- Botón para eliminar la publicación -->
            <form action="<?php echo e(route('publicaciones.eliminar', $publicacionReporte->publicacion->id_publicacion)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta publicación?')">Eliminar Publicación</button>
            </form>

            <!-- Botón para volver al listado -->
            <a href="<?php echo e(route('publicaciones.reportadas')); ?>" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/publicaciones/verReportada.blade.php ENDPATH**/ ?>