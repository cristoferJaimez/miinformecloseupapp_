<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if(auth()->guard()->check()): ?>
        <title><?php echo e(auth()->user()->name); ?></title>
    <?php endif; ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/nav.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/nav.js')); ?>"></script>
           <title></title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- HTML -->
        <!-- Styles -->
        <script src=" asset('js/app.js') " defer></script>

    
        <link href=" asset('css/app.css') " rel="stylesheet">
    </head>
    <body>
        <div class="">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="">
                        <?php if(auth()->guard()->check()): ?>
                        <div class="d-flex align-items-center p-5  flex-column bd-highlight">
                            <div class="mt-auto p-5  bd-highlight">
                                <?php echo $__env->make('auth.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                            
                        <?php endif; ?>

                        <?php if(auth()->guard()->guest()): ?>
                        <?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                    </div>
                </div>
                   
                   <?php if(auth()->guard()->check()): ?>
                    <?php echo $__env->make('auth.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                <div  class="border-start text-with bg-dark justify-content   col-md-7 col-sm-12 d-sm-none  d-none d-md-block m-0  row justify-content-center aling-item-center"  style="height: 750px">
                    <div class="col-auto p-5 mt-5 " style="color: aliceblue">
                        <p class="text-left">
                            <h1>Welcome to</h1>
                            <h2>our community</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos unde eum perspiciatis. Qui consequatur explicabo, ratione tempore illo ut eaque deleniti nobis aspernatur facilis nam tenetur inventore quis et?
                            </p>
    
                            <p class="text-center">
                                Our clients
                            </p>
                            <p>
                                
                            </p>
                        </p>
                       </div>
                </div>
                    <?php endif; ?>
                  
              
        </div>

       
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/tenant/welcome.blade.php ENDPATH**/ ?>