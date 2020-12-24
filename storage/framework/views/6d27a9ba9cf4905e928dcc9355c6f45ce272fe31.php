<?php $__env->startSection('css'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/sweetalert2.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('MainSection'); ?>

<div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body" style="margin-top: 20px"><!-- Input Validation start -->
<section class="input-validation" >
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="min-height: 80vh">
        <div class="card-header" style="background: #262D47; height: 60px">
          <div class="row">
            <div class="col-sm-6" style="color:white">
               Category List
            </div>
            <div class="col-sm-6">
              <a href="<?php echo e(route('Admin/Category/Add')); ?>" style="float: right; margin-top: -10px;" class="btn btn-danger">Add New</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
           <div class="card-body card-dashboard">
                  <p class="card-text">
          </p>
            <div class="table-responsive">
                      <table class="table table-striped table-bordered sourced-data">
                      <thead>
                          <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e($i++); ?></td>
                              <td><?php echo e($row->Name); ?></td>
                              <td>
                                <img src="<?php echo e(url('/')); ?>/public/category/<?php echo e($row->Image); ?>" style="width: 50px; height: 50px">
                              </td>
                              <td>
                                <?php if($row->Status=='1'): ?>
                                  <p style="color:green">Active</p>
                                <?php else: ?>
                                  <p style="color:red">InActive</p>
                                <?php endif; ?>
                              </td>
                              <td><?php echo e($row->created_at); ?></td>
                              <form action="<?php echo e(route('Admin/Category/EditSession')); ?>" method="post">
                              <td>
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="Edit" value="<?php echo e($row->id); ?>">
                                <button style="margin-right: 10px" type="submit" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                </form>
                                
                              </td>

                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
              </table>
            </div>
          </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--/ HTML (DOM) sourced data -->


        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('js'); ?>
   <script type="text/javascript" src="<?php echo e(url('/')); ?>/public/assets/app-assets/js/sweetalert2.all.min.js"></script>

<?php if(session()->has('success')): ?>
   <script type="text/javascript">
      swal(
        'Success',
        'Category Added <b style="color:green;">Successfully </b> button!',
        'success'
      )
   </script>
 <?php endif; ?>

 <?php if(session()->has('update')): ?>
   <script type="text/javascript">
    
      swal(
        'Success',
        'Category Updated <b style="color:green;">Successfully </b> button!',
        'success'
      )
  
   </script>
 <?php endif; ?>

 <?php if(session()->has('delete')): ?>
   <script type="text/javascript">
    
      swal(
        'Success',
        'Category Deleted <b style="color:green;">Successfully </b> button!',
        'success'
      )
    
   </script>
 <?php endif; ?>

<script type="text/javascript">
  $(document).on('click', '#delete_popup', function(e) {
        swal({
        title: "Are you sure?", 
        text: "You will be delete Category", 
        type: "warning",
        confirmButtonText: "Yes, Delete It",
        showCancelButton: true
        })
          .then((result) => {
          if (result.value) {
              $("#delete").click();
          } else if (result.dismiss === 'cancel') {
              swal(
                'Cancelled',
                'Your stay here :)',
                'error'
              )
          }
        })
    });
</script>

<script type="text/javascript">
  function deletefunction(id){
    document.getElementById('deleteid').value = id
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/Category/Index.blade.php ENDPATH**/ ?>