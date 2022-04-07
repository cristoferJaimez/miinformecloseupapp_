<?php echo $__env->make('auth.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card col-6 mx-auto mt-5">
    <div class="card text-center ">
        <div class="card-body text-center">
            <table class="table table-hover  table table-sm">
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Users</th>
                    <th scope="col">Email</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row" class="text-center"><?php echo e($item->id); ?></th>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-sm text-primary" title="<?php echo e($item->id); ?>" id="<?php echo e($item->id); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">public</a>  
                    </td>
                    </tr>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  
                   
                </tbody>
              </table>
        </div>
    </div>
</div>

<?php echo $__env->make('layout.modalPost', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/post.blade.php ENDPATH**/ ?>