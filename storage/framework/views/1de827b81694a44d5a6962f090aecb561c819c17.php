<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table">
              <tr>
                <td>Name</td>
                <td>Email users</td>
              </tr>
            </table>
            <form action="<?php echo e('post'); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label for="title" class="form-label">Title.</label>
                <input type="text" class="form-control" name="title" id="title" required  placeholder="title post..."/>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description.</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description for report..." rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="url" class="form-label">url post.</label>
                <input type="url" class="form-control" name="url" id="url" required  placeholder="https://www.myurlreport.com.co"/>
              </div>
              <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" class="btn btn-success" >post</button>
              </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/layout/modalPost.blade.php ENDPATH**/ ?>