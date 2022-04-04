<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title><?php echo e(auth()->user()->name); ?> <?php echo $__env->yieldContent('title'); ?></title>
    </head>

    <body class="container fluid">
        <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
        <div class="row">
            <div class="col-md-12  col-sm-12 m-0 ">
                <?php echo $__env->make('layout.usersclients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </body>
</html><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/maintenant.blade.php ENDPATH**/ ?>