<div  class="border-start border-danger  bg-dark    col-md-7 col-sm-12 m-0  "  style="height: 750px">
    <?php echo $__env->make('auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-sm-12 col-md-12 p-5 mt-5 " >
       <?php if(auth()->user()->fk_rol === 1): ?>
       <?php else: ?>
            <?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php endif; ?>       
     </div>
 </div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/home.blade.php ENDPATH**/ ?>