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
  Update Images
<?php else: ?>
Add New Images
<?php endif; ?>
</div>
<div class="col-sm-6">
<a href="<?php echo e(route('Admin/Images')); ?>" style="float: right; margin-top: -10px;" class="btn btn-danger">Images List</a>
</div>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">
<form class="needs-validation was-validated" method="post" action="<?php if(isset($edit->id)): ?> <?php echo e(route('Admin/Images/Update')); ?> <?php else: ?> <?php echo e(route('Admin/Images/Store')); ?> <?php endif; ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

 <?php if(isset($edit->id)): ?>
  <input type="hidden" name="Update" value="<?php echo e($edit->id); ?>">
<?php endif; ?>
<div class="form-row">
  <div class="col-md-12 mb-12">
    <label for="validationCustom01">Title</label>
    <input type="text" name="Title" class="form-control" id="validationCustom01" placeholder="Title" value="<?php if(isset($edit->id)): ?><?php echo e($edit->Title); ?><?php endif; ?>" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12 mb-12" style="margin-top:10px ">
    <label for="validationCustom02">Description</label>
    <textarea name="Description" class="form-control" id="validationCustom02" required placeholder="Description" rows="6"><?php if(isset($edit->id)): ?><?php echo e($edit->Description); ?><?php endif; ?></textarea>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <div class="avatar-upload">
        <div class="avatar-edit">
        <input type='file' id="imageUpload" name="Image" accept=".png, .jpg, .jpeg" />
        <label for="imageUpload" style="margin-top: 0px"></label>
        </div>

        <div class="avatar-preview">
             <div id="imagePreview" <?php if(isset($edit->id)): ?> style="background-image: url(<?php echo e(url('/')); ?>/public/gallery/<?php echo e($edit->Image); ?>);" <?php else: ?>  style="background-image: url(https://i.pinimg.com/originals/d1/77/27/d1772777fb0ea141fa22a9dbcbffc577.jpg);" <?php endif; ?>>
        </div>
              </div>
        </div>
  </div>

  <div class="col-md-8 mb-8" style="margin-top: 20px">
    <label for="validationCustom01">Category</label>
    <select class="form-control" id="Category" required name="Category">
      <option value="Image" <?php if(isset($edit->id)): ?> <?php if($edit->Category=='Image'): ?> selected  <?php endif; ?> <?php endif; ?>>Image</option>
      <option value="Media"  <?php if(isset($edit->id)): ?> <?php if($edit->Category=='Media'): ?> selected  <?php endif; ?> <?php endif; ?>>Media</option>
    </select>

    <div id="mediapdf">
      <label for="validationCustom01">PDF</label>
                  <input type="file" accept="application/pdf" name="PDF" class="form-control">
                  <input type="hidden" id="mediashow" value="<?php if(isset($edit->id)): ?><?php echo e($edit->Category); ?><?php endif; ?>">
                  <?php if(isset($edit->id)): ?>
                  <a href="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($edit->PDF); ?>" target="_blank"><?php echo e($edit->PDF); ?></a>
                  <?php endif; ?>
    </div>

    <label for="validationCustom01" style="margin-top: 20px">Status</label>
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

<script type="text/javascript">
  if($("#mediashow").val()!=='Media'){
    $("#mediapdf").hide();
  }
  
  $("#Category").change(function(){
    if($("#Category").val()=='Media'){
      $("#mediapdf").show();
    }
    else{
      $("#mediapdf").hide();
    }
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/Image/Add.blade.php ENDPATH**/ ?>