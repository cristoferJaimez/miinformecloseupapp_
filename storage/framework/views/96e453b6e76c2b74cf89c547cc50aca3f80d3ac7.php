<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/nav.css')); ?>" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="#">
        <img src="https://www.close-upinternational.com/img/logo.svg" alt="" width="30" height="24" class="d-inline-block bg-light border  rounded-circle align-text-top">
    
        My Report</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse d-none d-sm-none d-md-none" id="navbarSupportedContent">
        <ul class="nav nav-pill">
          
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">List post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?php echo e(route('list')); ?>">List Users</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?php echo e('logout'); ?>">Sign Out</a>
          </li>
         
     <!--    <li>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Button with data-bs-target
          </button>
          
         </li>
        -->
          
        </ul>
        <ul class="d-flex">
            <li class="text-muted nav-link"><i class="fa-solid fa-bell-slash"></i></li>
        </ul>
        <span class="navbar-text">
          beta 1.4
        </span>
      </div>
    

    </div>
  </nav>    

  
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('js/nav.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/auth/header.blade.php ENDPATH**/ ?>