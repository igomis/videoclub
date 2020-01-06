<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-4">
            <img src="<?php echo e($pelicula->poster); ?>" alt="<?php echo e($pelicula->title); ?>"/>
        </div>
        <div class="col-sm-8">
            <h2><?php echo e($pelicula->title); ?></h2>
            <h4><?php echo e($pelicula->year); ?></h4>
            <h4><?php echo e($pelicula->director); ?></h4>
            <p><strong>Genere:</strong>
                <?php if($pelicula->Genre): ?>  <?php echo e($pelicula->Genre->title); ?>

                <?php else: ?> Desconocido
                <?php endif; ?>
            </p>
            <p><strong>Resumen: </strong><?php echo e($pelicula->synopsis); ?></p>
            <p><strong>Estado: </strong>Pel.lícula <?php if($pelicula->rented): ?>  Actualment llogada <?php else: ?> disponible <?php endif; ?></p>
            <p>
                <?php if($pelicula->rented): ?>
                    <?php if(Auth::user()->rent_movies->contains($pelicula)): ?>
                        <form action= <?php echo e(action('catalogController@putReturn',$pelicula->id)); ?> method="POST" style="display:inline">
                            <?php echo e(method_field('PUT')); ?>

                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-info" > Tornar Película</button>
                        </form>
                    <?php endif; ?>
                <?php else: ?>
                    <form action= <?php echo e(action('catalogController@putRent',$pelicula->id)); ?> method="POST" style="display:inline">
                        <?php echo e(method_field('PUT')); ?>

                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-secondary" > Llogar Película</button>
                    </form>
                    <form action= <?php echo e(action('catalogController@deleteMovie',$pelicula->id)); ?> method="POST" style="display:inline">
                        <?php echo e(method_field('DELETE')); ?>

                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger"  > Esborrar Película</button>
                    </form>
                <?php endif; ?>
                <a href="\catalog\edit\<?php echo e($pelicula->id); ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar Pel.lícula</a>
                <a href="\catalog" class="btn btn-default">Tornar catàleg</a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/videoclub/resources/views/show.blade.php ENDPATH**/ ?>