    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>

    <body class="container">

        <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="m-0 mt-5 row justify-content-center aling-items-center ">

            <div class="col-auto   text-center">

                <div class="card border mt-5" style="border:none">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group text-center">
                                <!--token-->
                                <?php echo csrf_field(); ?>
                                <label class="form-label">
                                    <input type="email" class="form-control" required autofocus
                                        value="<?php echo e(old('email')); ?>" name="email" placeholder="Email..." />
                                </label>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <label class="form-label">
                                    <input type="password" class="form-control" required name="password"
                                        placeholder="Password..." />
                                </label>
                                <div class="form-text text-danger"> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <label>
                                    <input type="checkbox" name="remember" />
                                    <p class="card-link " style="display: inline">Remember me?</p>
                                </label>
                                <br>

                                <button class="btn mt-2  btn-primary" type="submit">Log In</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        </div>

    </body>

    </html>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/login.blade.php ENDPATH**/ ?>