

<?php $__env->startSection('MainSection'); ?>

<div class="app-content content">
      <div class="content-wrapper">
        
<div class="content-body" style="margin-top: 20px">
<section class="input-validation" >
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="min-height: 80vh">
        <div class="card-header" style="background: #262D47; height: 60px">
          <div class="row">
            <div class="col-sm-6" style="color:white">
              Order Details
            </div>
            <div class="col-sm-6">
              <a href="<?php echo e(route('Admin/Sales')); ?>" style="float: right; margin-top: -10px;" class="btn btn-danger"> List</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="needs-validation was-validated" method="post"  enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <?php if(isset($data->id)): ?>
                <input type="hidden" name="Update" value="<?php echo e($data->id); ?>">
              <?php endif; ?>
              <div class="form-row">
                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Name</label>
                  <input type="text" name="name" disabled class="form-control" id="validationCustom01" placeholder="Name" value="<?php if(isset($data->id)): ?><?php echo e($data->name); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Email</label>
                  <input type="text" name="Email" disabled class="form-control" id="validationCustom01" placeholder="Email" value="<?php if(isset($data->id)): ?><?php echo e($data->email); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Mobile</label>
                  <input type="text" name="Mobile" disabled class="form-control" id="validationCustom01" placeholder="Mobile" value="<?php if(isset($data->id)): ?><?php echo e($data->Mobile); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

              <div class="form-row" style="margin-top: -20px">
                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Address</label>
                  <input type="text" name="Address" disabled class="form-control" id="validationCustom01" placeholder="Address" value="<?php if(isset($data->id)): ?><?php echo e($data->Address); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Landmark</label>
                  <input type="text" name="Landmark" disabled class="form-control" id="validationCustom01" placeholder="Landmark" value="<?php if(isset($data->id)): ?><?php echo e($data->Landmark); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

              <div class="form-row" style="margin-top: 30px">
                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">City</label>
                  <input type="text" name="City" disabled class="form-control" id="validationCustom01" placeholder="City" value="<?php if(isset($data->id)): ?><?php echo e($data->City); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">State</label>
                  <input type="text" name="State" disabled class="form-control" id="validationCustom01" placeholder="State" value="<?php if(isset($data->id)): ?><?php echo e($data->State); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">PinCode</label>
                  <input type="text" name="PinCode" disabled class="form-control" id="validationCustom01" placeholder="PinCode" value="<?php if(isset($data->id)): ?><?php echo e($data->PinCode); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">OrderId</label>
                  <input type="text" name="OrderId" disabled class="form-control" id="validationCustom01" placeholder="OrderId" value="<?php if(isset($data->id)): ?><?php echo e($data->OrderId); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">PaymentId</label>
                  <input type="text" name="PaymentId" disabled class="form-control" id="validationCustom01" placeholder="PaymentId" value="<?php if(isset($data->id)): ?><?php echo e($data->PaymentId); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">GrandTotal Amount in Rs.</label>
                  <input type="text" name="GrandTotal" disabled class="form-control" id="validationCustom01" placeholder="GrandTotal" value="<?php if(isset($data->id)): ?><?php echo e($data->GrandTotal); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                              
                <div class="col-md-4">
                  <div class="avatar-upload">
                      <div class="avatar-preview">
                           <div id="imagePreview" <?php if(isset($data->id)): ?> style="background-image: url('<?php echo e($data->Profile); ?>');" <?php else: ?>  style="background-image: url(https://i.pinimg.com/originals/d1/77/27/d1772777fb0ea141fa22a9dbcbffc577.jpg);" <?php endif; ?>>
                      </div>
                            </div>
                      </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('js'); ?>
   <script type="text/javascript">
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
  </script>

  <script type="text/javascript">
 function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview2').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview2').hide();
            $('#imagePreview2').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload2").change(function() {
    readURL2(this);
});
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/Sales/SalesDetails.blade.php ENDPATH**/ ?>