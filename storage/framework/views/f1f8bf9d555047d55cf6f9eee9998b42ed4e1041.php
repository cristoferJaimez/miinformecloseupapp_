    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://www.close-upinternational.com/img/logo.svg" alt="<?php echo e(auth()->user()->name); ?>" width="40" height="40" class=" p-1 border border-danger rounded-circle">
                            <span class="d-none d-sm-inline mx-1 text-dark"><?php echo e(auth()->user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New user...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="">
                                <form action="<?php echo e('logout'); ?>" style="display: inline;" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <a class="dropdown-item" href="#" onclick="this.closest('form').submit()"> <i
                                            class="fa-thin fa-arrow-right-from-bracket"></i> Sing out</a>
                                </form>  
                            </li>
                        </ul>
                    </div>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="<?php echo e('home'); ?>" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Host</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            
                            <li class="card-link">
                                <form action="<?php echo e('userslist'); ?>" target="iframe" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn text-secondary btn-sm">User</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle  btn disabled ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Option</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                 
                 
                </ul>
                <hr>
            
            </div>
        </div>
        
    </div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/navdashboard.blade.php ENDPATH**/ ?>