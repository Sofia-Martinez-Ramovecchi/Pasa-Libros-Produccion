<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Mis Solicitudes de Intercambio</h1>

        <?php if($solicitudes->isEmpty()): ?>
            <p>No tienes solicitudes de intercambio.</p>
        <?php else: ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Cantidad de Libros</th>
                    <th>Fecha de Creación</th>
                    <th>Estado</th>
                    <th>Libros Asociados</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($solicitud->descripcion_solicitud); ?></td>
                        <td><?php echo e($solicitud->cant_libros); ?></td>
                        <td><?php echo e($solicitud->fecha_creacion->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($solicitud->estado_solicitud->nombre_estado ?? 'No disponible'); ?></td>
                        <td>
                            <ul>
                                <?php $__currentLoopData = $solicitud->libro_intercambios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($libro->libro->titulo); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/Solicitudes/index.blade.php ENDPATH**/ ?>