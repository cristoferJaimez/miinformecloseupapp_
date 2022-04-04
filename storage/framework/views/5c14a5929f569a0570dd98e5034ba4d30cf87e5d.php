<div class="container">
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <h3 class="mt-4">List Users</h3>
        <ul>
            <div class="card-group">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mt-2 mb-2 col-md-4 col-sm-12">
                    <div class="card-body">
                       <ul>
                           <li> <?php echo e($item->email); ?></li>
                           <li> <?php echo e($item->name); ?></li>
                           <li> {{}}</li>
                       </ul>
                       <div class="text-end" >
                         <ul >
                             <li class="mr-2" style="display: inline">#post</li>
                             <li class="mr-2" style="display: inline"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button">public</a></li>
                             <li class="mr-2" style="display: inline">stated</li>
                         </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </ul>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
              <?php echo csrf_field(); ?>
          </form>
        </div>
        
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/usersclients.blade.php ENDPATH**/ ?>