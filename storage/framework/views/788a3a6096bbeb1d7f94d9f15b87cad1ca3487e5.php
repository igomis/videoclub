<!DOCTYPE html>
	<html lang="es">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Video Club</title>
	    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	    <!-- Bootstrap -->
	     <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  </head>
	  <body>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id='app' class="container"> <?php echo $__env->yieldContent('content'); ?></div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" ></script>
</body>
</html>
<?php /**PATH /home/vagrant/code/videoclub/resources/views/layouts/master.blade.php ENDPATH**/ ?>