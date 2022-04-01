
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<div class="container">
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row mt-5">

        <div class="card mx-auto col-md-4 col-sm-10 mt-5">
            <div class="card-body">
                <div class="card-title text-center"><h5>Request domain!</h5></div>
                <form action="">
                    <?php echo csrf_field(); ?>
                    <label class="form-label">  </label>
                        <input type="text" class="form-control" required value="<?php echo e(old('name')); ?>" autofocus  name="name" placeholder="Full names..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                  
                    <label class="form-label"></label>
                        <input type="email" class="form-control" required value="<?php echo e(old('email')); ?>"    name="email" placeholder="Email..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>

                    <label class="form-label"></label>
                        <input type="number" class="form-control" required value="<?php echo e(old('phone')); ?>"    name="phone" placeholder="Contact phone..." />
                        <div class="form-text text-danger"><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                    <button class="btn btn-primary btn-sm mt-2">Request domain</button>
                    <hr class="text-muted">
                    <a href="" class="link-card"></a>
                </form>
            </div>
        </div>    
    </div>    
</div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/registrationrequest.blade.php ENDPATH**/ ?>