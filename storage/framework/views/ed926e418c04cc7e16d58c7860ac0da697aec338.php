<div class="container text-center ">
<div class="mt-4">
    <img src="https://www.close-upinternational.com/img/logo.svg" width="200px" height="200px" alt="logo" class="p-2 border border-5 border-danger rounded-circle mt-4" /> 
</div>
    <h6 class="mb-3 mt-4">name users</h6>
    <div class="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item "> <a class="nav-link " href="<?php echo e('home'); ?>"> <i
                class="fa-thin fa-house-user"></i> Home</a></li>
             <li class="nav-item "> 
            <li></li>
            
                <li class="nav-item ">
                    <form action="<?php echo e('logout'); ?>" style="display: inline;" method="POST">
                        <?php echo csrf_field(); ?>
                        <a class="nav-link" href="#" onclick="this.closest('form').submit()"> <i
                                class="fa-thin fa-arrow-right-from-bracket"></i> Sing out</a>
                    </form>
                <li>
            
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/user.blade.php ENDPATH**/ ?>