<div class="container" style="text-decoration: none">
    <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card col-3 mt-4 text-left">
        <div class="card-body" style="text-transform: capitalize">
          <ul class=" list-unstyled">
            <li> <i class="fa-thin fa-server"></i>  <?php echo e($value->name); ?> </li>
            <li><i class="fa-thin fa-server"></i> <?php echo e($value->domain); ?> </li>
            <li> <i class="fa-thin fa-database"></i>   <?php echo e($value->database); ?> </li>
          </ul>
        </div>
        <div class="card-footer text-muted text-center">
          <i class="fa-thin fa-database"></i>  <i class="fa-thin fa-calendar-clock"></i> <?php echo e($value->created_at); ?>

          </div>
    </div> 
    
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     <?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/domains.blade.php ENDPATH**/ ?>