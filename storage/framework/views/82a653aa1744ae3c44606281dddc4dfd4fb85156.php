<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<div class="container">
     <div class="row">
         <div class=" card col mt-2">
            <div class="card-body">
                <div class="card-title text-center">
                    List of domain users
                </div>
                <table class="table table-striped table-sm" style="font-size: 0.7em">
                    <tbody class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Domain</th>
                        <th>Data Base</th>
                        <th>User</th>
                        <th>Rol</th>
                        <th>Options</th>
                        <th>condition</th>
                    </tbody>
                    <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                      
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->domain); ?></td>
                        <td><?php echo e($value->database); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->description); ?></td>
                        <td class="text-center">
                           <a href="#" title="<?php echo e($value->id); ?>"  disabled class="card-link text-primary">view</a>
                                              
                        </td>
                        <td> <a href="#"  disabled class=" card-link text-success">Active</a> </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

                </table>
            </div>
         </div>
     </div>
 </div>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/userslist.blade.php ENDPATH**/ ?>