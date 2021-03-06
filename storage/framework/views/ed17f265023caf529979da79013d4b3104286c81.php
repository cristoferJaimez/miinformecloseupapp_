    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://www.close-upinternational.com/img/logo.svg" alt="<?php echo e(auth()->user()->name); ?>" width="40" height="40" class="rounded-circle p-1 border">
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
                <ul class="" id="menu">
                   
                  <?php if(auth()->user()->fk_rol === 1): ?>

                  <nav class="nav flex-column">
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Public</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" onclick="divChange()" class="nav-link px-0"> <span class="d-none d-sm-inline"> Report </span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Users</span> </a>
                            </li>
                        </ul>
                    </li>
                  </nav>
                  <?php else: ?>
                  <li class="text-muted">User</li>

                  <li>
                      <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                          <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Public</span></a>
                      <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"> Report </span> </a>
                          </li>
                          <li>
                              <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Users</span> </a>
                          </li>
                      </ul>
                  </li>
                  <?php endif; ?>

                
                 
                 
                </ul>
                <hr>
            
            </div>
        </div>
        
    </div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/navdashboardtenante.blade.php ENDPATH**/ ?>