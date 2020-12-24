<?php $__env->startSection('MainSection'); ?>
<style type="text/css">
  label{
    margin-top: 20px;
  }
</style>
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
              <?php if(isset($edit->id)): ?>
                Update StudentCorner
              <?php else: ?>
              Add New StudentCorner
              <?php endif; ?>
            </div>
            <div class="col-sm-6">
              <a href="<?php echo e(route('Admin/StudentCorner')); ?>" style="float: right; margin-top: -10px;" class="btn btn-danger">StudentCorner List</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="needs-validation was-validated" method="post" action="<?php if(isset($edit->id)): ?> <?php echo e(route('Admin/StudentCorner/Update')); ?> <?php else: ?> <?php echo e(route('Admin/StudentCorner/Store')); ?> <?php endif; ?>" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

               <?php if(isset($edit->id)): ?>
                <input type="hidden" name="Update" value="<?php echo e($edit->id); ?>">
              <?php endif; ?>
              <div class="form-row">
                <div class="col-md-12 mb-12">
                  <label for="validationCustom01">Product Title</label>
                  <input type="text" name="Title" class="form-control" id="validationCustom01" placeholder="Product Title" value="<?php if(isset($edit->id)): ?><?php echo e($edit->Title); ?><?php endif; ?>" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                

               <div class="col-md-6 mb-6">
                 <label for="validationCustom01">Select Category</label>
                  <select class="form-control" required name="CategoryId">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>" <?php if(isset($edit->id)): ?> <?php if($edit->CategoryId==$row->id): ?> selected  <?php endif; ?> <?php endif; ?>><?php echo e($row->Name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                

                <div class="col-md-6 mb-6">
                 <label for="validationCustom01">Select SubCategory</label>
                  <select class="form-control" required name="SubCategoryId">
                    <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>" <?php if(isset($edit->id)): ?> <?php if($edit->SubCategoryId==$row->id): ?> selected  <?php endif; ?> <?php endif; ?>><?php echo e($row->Name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                 <div class="col-md-6 mb-6">
                 <label for="validationCustom01">Select CourseType</label>
                  <select class="form-control" required name="CourseType">
                    <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($row->id); ?>" <?php if(isset($edit->id)): ?> <?php if($edit->CourseType==$row->id): ?> selected  <?php endif; ?> <?php endif; ?>><?php echo e($row->Name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>

                 <div class="col-md-6">
                  <label for="validationCustom01">PDF</label>
                  <input type="file" accept="application/pdf" name="PDF" class="form-control">
                  <?php if(isset($edit->id)): ?>
                  <p>
                    <a href="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($edit->PDF); ?>" target="_blank"><?php echo e($edit->PDF); ?></a>
                  </p> 
                  <?php endif; ?>
                </div>

                <div class="col-md-12 mb-12">
                  <label for="validationCustom01">Description</label>
                  <textarea name="Description" class="form-control" id="validationCustom01" placeholder="Description"  ><?php if(isset($edit->id)): ?><?php echo e($edit->Description); ?><?php endif; ?></textarea>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>


              
                <div class="col-md-6">
                  <div class="avatar-upload">
                      <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="Image" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload" style="margin-top: 0"></label>
                      </div>

                      <div class="avatar-preview">
                           <div id="imagePreview" <?php if(isset($edit->id)): ?> style="background-image: url(<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($edit->Image); ?>);" <?php else: ?>  style="background-image: url(https://i.pinimg.com/originals/d1/77/27/d1772777fb0ea141fa22a9dbcbffc577.jpg);" <?php endif; ?>>
                      </div>
                            </div>
                      </div>
                </div>

                <div class="col-md-6 mb-6" style="margin-top: 20px">
                 <label for="validationCustom01">Language</label>
                  <select class="form-control" required name="Language">
                    <option value="English" <?php if(isset($edit->id)): ?> <?php if($edit->Status=='English'): ?> selected  <?php endif; ?> <?php endif; ?>>English</option>
                    <option value="Hindi"  <?php if(isset($edit->id)): ?> <?php if($edit->Status=='Hindi'): ?> selected  <?php endif; ?> <?php endif; ?>>Hindi</option>
                  </select>

                  <label for="validationCustom01">Status</label>
                  <select class="form-control" required name="Status">
                    <option value="1" <?php if(isset($edit->id)): ?> <?php if($edit->Status=='1'): ?> selected  <?php endif; ?> <?php endif; ?>>Active</option>
                    <option value="0"  <?php if(isset($edit->id)): ?> <?php if($edit->Status=='0'): ?> selected  <?php endif; ?> <?php endif; ?>>InActive</option>
                  </select>


                </div>


              </div>
              <button style="margin-top: 50px; background: #262D47; margin-bottom: 20px; height: 43px; border:none;  width:300px; float: right;" class="btn btn-info" type="submit">
                <?php if(isset($edit->id)): ?>
                Update Now
              <?php else: ?>
              Submit Now
              <?php endif; ?>
              </button>
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

   <script type="text/javascript" src="https://cloud.tinymce.com/5-testing/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>
 

  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  content_css: 'https://codepen.io/fredde/pen/VqEdNx.css'
});
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/StudentCorner/Add.blade.php ENDPATH**/ ?>