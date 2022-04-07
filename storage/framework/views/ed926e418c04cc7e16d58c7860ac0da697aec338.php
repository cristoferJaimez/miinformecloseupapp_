<div class="container text-center ">
<div class="mt-4">
    <img src="https://www.close-upinternational.com/img/logo.svg" width="200px" height="200px" alt="logo" class="p-2 border border-5 border-danger rounded-circle mt-4" /> 
</div>
    <p>
         welcome!
        <div class="badge bg-primary text-wrap" style="width: 6rem;">
             <?php echo e(auth()->user()->name); ?>

          </div>
    </p>
    <div class="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
            
                <li class="nav-item ">
                    <form action="<?php echo e('logout'); ?>" style="display: inline;" method="POST">
                        <?php echo csrf_field(); ?>
                        <a class="nav-link" href="#" onclick="this.closest('form').submit()"> <i
                                class="fa-thin fa-arrow-right-from-bracket"></i> Sing out</a>
                    </form>
                <li>
                 
                    <li>
                        <footer class="blockquote-footer"></footer>
                    </li>
            
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/user.blade.php ENDPATH**/ ?>