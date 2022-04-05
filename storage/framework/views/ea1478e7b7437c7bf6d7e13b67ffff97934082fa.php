  <div class=" m-2 mt-5 row justify-content-end aling-items-center ">
        <div class="col-md-8 col-sm-12 mt-3 ">
 
                <p class="text-left">
                   <img src="https://www.close-upinternational.com/img/logo.svg" width="60px" height="60px" alt="logo" class="p-1 border  rounded-circle" /> 
                   <h2> Sign in</h2>
                   
                   <h6>Don't have an account? <a href="">Sign up</a></h6> 
                </p>
                <div class="card border border-light mt-2" >
                    <div class="card-body">
                        
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <div class="form-group ">
                                <!--token-->
                                <?php echo csrf_field(); ?>
                                <div class="mt-3">
                                    <label class="form-label">Email address *</label>
                                    <input type="email" class="form-control" required autofocus
                                        value="<?php echo e(old('email')); ?>" name="email" placeholder="Email..." />
                                
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
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Password * </label>
                                    <input type="password" class="form-control" required name="password"
                                        placeholder="Password..." />
                               
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
                                </div>
                                <div class="mt-3">
                                    <label>
                                        <input type="checkbox" name="remember" />
                                        <p class="card-link " style="display: inline">Remember me?</p>
                                    </label>
                                </div>
                                <br>

                                <div class="d-grid gap-1">
                                    <button class="btn mt-2  btn-primary" type="submit">Sign In</button>
                                  </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/login.blade.php ENDPATH**/ ?>