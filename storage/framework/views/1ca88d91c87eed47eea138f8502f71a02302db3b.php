<div>
    <h1>Post URL</h1>
    <form action="<?php echo e('post'); ?>" method="POST">
        <div class="form-group text-center">
            <!--token-->
            <?php echo csrf_field(); ?>
            <label class="form-label">
                <input type="url" class="form-control" required autofocus value="<?php echo e(old('url')); ?>" name="url" placeholder="Url post..." />
            </label>
            <div class="form-text text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
             
           
           <button class="btn mt-2  btn-primary" type="submit">send post</button>                           
        </div>        
    </form>
</div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/post.blade.php ENDPATH**/ ?>