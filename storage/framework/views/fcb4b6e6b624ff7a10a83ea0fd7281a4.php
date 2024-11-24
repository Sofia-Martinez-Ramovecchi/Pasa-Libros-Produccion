<?php
use Illuminate\Support\Facades\Session;
?>



<?php $__env->startSection('content'); ?>
    <div class="container">

        <h1><b>Publicaciones Reportadas</b></h1>

        <?php if(Session::has('Mensaje')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('Mensaje')); ?>

            </div>
        <?php endif; ?>

        <table class="table table-light table-striped">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>ID Publicación</th>
                    <th>Descripcion del reporte</th>
                    <th>Reporte del usuario</th>
                    <th>Comentario</th>
                    <th>Fecha de Reporte</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $publicacionesReportadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($reporte->publicacion->id_publicacion ?? 'No disponible'); ?></td>
                        <td><?php echo e($reporte->reporte->descripcion_reporte ?? 'No disponible'); ?></td>
                        <td><?php echo e($reporte->usuario->nombre_usuario ?? 'No disponible'); ?></td>
                        <td><?php echo e($reporte->comentario_reporte ?? 'No disponible'); ?></td>
                        <td><?php echo e($reporte->fecha_creacion->format('d/m/Y H:i') ?? 'No disponible'); ?></td>
                        <td>
                            <a href="<?php echo e(route('publicacionesreportadas.ver', $reporte->publicacion->id_publicacion)); ?>"
                                class="btn btn-primary">Ver Publicación</a>

                            <form action="<?php echo e(route('publicaciones.eliminar', $reporte->publicacion->id_publicacion)); ?>"
                                method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro de eliminar esta publicación?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/publicaciones/reportadas.blade.php ENDPATH**/ ?>