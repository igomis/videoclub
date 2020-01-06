<?php $__env->startSection('content'); ?>
   <div class="row" style="margin-top:20px">
      <div class="col-md-offset-3 col-md-6">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title text-center">
                  <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                  Afegir pel.lícula
               </h3>
            </div>
            <div class="panel-body" style="padding:30px">
                <?php echo Form::model(new App\Movie(),['class'=>'form-horizontal form-label-left','enctype'=>"multipart/form-data"]); ?>

                <?php echo Field::text('title'); ?>

                <?php echo Field::text('year'); ?>

                <?php echo Field::text('director'); ?>

                <?php echo Field::select('id_genre'); ?>

                <?php echo Field::text('poster'); ?>

                <?php echo Field::textarea('synopsis'); ?>

                <?php echo Form::submit('Enviar',['class'=>'btn btn-success','id'=>'submit']); ?>

                <?php echo Form::close(); ?>

            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/videoclub/resources/views/create.blade.php ENDPATH**/ ?>