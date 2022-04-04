<!-- Stored in resources/views/layouts/app.blade.php -->
<html>

<head>
    <title> <?php echo e(auth()->user()->name); ?> <?php echo $__env->yieldContent('Close Up'); ?></title>

</head>

<body class="container fluid">
    <?php if(auth()->guard()->check()): ?>


        <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-2 m-0 ">
                <?php echo $__env->make('layout.navdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-8 container  mt-5" id="navlayout">
                <iframe src="<?php echo e(URL::to('homeindex')); ?>" allowfullscreen class="col-12 mx-auto" name="iframe" frameborder="1"></iframe>
            </div>
            <div class="col-2 mt-5">
                <h6 class="text-muted">--Other Opciones--</h6>
                <ul>
                    
                </ul>
            </div>

        </div>
    

    <?php endif; ?>

    <script src="<?php echo e(asset('js/nav.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/main.blade.php ENDPATH**/ ?>