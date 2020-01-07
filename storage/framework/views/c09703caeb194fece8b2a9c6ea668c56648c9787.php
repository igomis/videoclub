<?php $__env->startSection('content'); ?>
    <h2 >Gèneres</h2>
    <div class="row">
        <table class="table-bordered table-info">
            <tr><th>id</th><th>Titulo</th><th>Operacion</th></tr>
            <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($genero->id); ?></td>
                    <td><?php echo e($genero->title); ?></td>
                    <td><a href='/genre/edit/<?php echo e($genero->id); ?>'><i class='fa fa-edit'></i></a>
                        <a href='/genre/delete/<?php echo e($genero->id); ?>'><i class='fa fa-trash'></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/videoclub/resources/views/genre/index.blade.php ENDPATH**/ ?>