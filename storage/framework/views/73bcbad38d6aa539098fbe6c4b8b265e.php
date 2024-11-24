<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Lista de Publicaciones</h1>

        <div class="row">
            <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($publicacion->libro->nombre ?? 'Sin título'); ?></h5>
                            <p class="card-text">
                                <strong>Descripción:</strong> <?php echo e($publicacion->descripcion_publicacion ?? 'Sin descripción'); ?><br>
                                <strong>Estado:</strong> <?php echo e($publicacion->estado_publicacion->nombre ?? 'Desconocido'); ?><br>
                                <strong>Localidad:</strong> <?php echo e($publicacion->localidad->nombre ?? 'No especificada'); ?><br>
                                <strong>Fecha de creación:</strong> <?php echo e($publicacion->fecha_creacion->format('d-m-Y')); ?>

                            </p>
                            <!-- Botón de ver más detalles -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                Ver más detalles
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Paginación -->
        <div class="pagination">
            <?php echo e($publicaciones->links()); ?>

        </div>
    </div>

    <!-- Modal para más detalles de una publicación -->
    <div class="modal fade" id="ModalInfoLibro" tabindex="-1" aria-labelledby="ModalInfoLibroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalInfoLibroLabel">Detalles de la publicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes cargar los detalles de la publicación -->
                    <p>Descripción detallada de la publicación...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/publicaciones/index.blade.php ENDPATH**/ ?>