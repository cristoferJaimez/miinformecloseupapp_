<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<div class="container">
    <div class="row">

        <h1 class="text-center mt-4 mb-4"> List Users </h1>

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card row mt-1">
            <div class="card-body">
                <div class="col-8">
                    <?php echo e($item->name); ?>

                </div>
                <div class="col-4 text-rigth" style="display: inline">
                    <a class="btn text-muted" data-bs-toggle="modal" href="#exampleModalToggle" role="button"># Post</a>

                    <a class="btn text-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">view</a>
                    <a class="btn text-danger" data-bs-toggle="modal" href="#exampleModalToggle" role="button">delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>



<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <a href="" class="card-link">update</a>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/usersclients.blade.php ENDPATH**/ ?>