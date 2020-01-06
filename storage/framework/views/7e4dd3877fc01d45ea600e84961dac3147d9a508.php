<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
            Videoclub
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if( Auth::check() ): ?>
            <?php echo Menu::make(config('menu'), 'navbar-nav mr-auto'); ?>

        <?php endif; ?>
    </div>
</nav>
<?php /**PATH /home/vagrant/code/videoclub/resources/views/partials/navbar.blade.php ENDPATH**/ ?>