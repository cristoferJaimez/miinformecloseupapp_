<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body class="container">
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="container mt-5  ">

        <div class="card col-4 mx-auto mt-5 border  border-light m-2 p-4">
            <form action="<?php echo e(route('register')); ?>" method="POST">
                <div class="form-group text-center">
                <?php echo csrf_field(); ?> 
                    <label class="form-label">
                        <input type="text" class="form-control" required value="<?php echo e(old('name')); ?>" autofocus  name="name" placeholder="Names..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="email" class="form-control" required value="<?php echo e(old('email')); ?>"    name="email" placeholder="Email..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="password" class="form-control" required  name="password" placeholder="Password..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                    </label>
                   
                    <br>
                    <div class="mt-2 col-6 mx-auto">
                          <button class="btn  btn-primary" type="submit">Register</button>
                    </div>
                </div>   
                </form>
          
        </div>

    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/register.blade.php ENDPATH**/ ?>