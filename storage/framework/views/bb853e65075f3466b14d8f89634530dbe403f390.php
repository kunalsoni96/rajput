

<?php $__env->startSection('main_section'); ?>

<section class="breadcrumb-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content">
<div class="section-heading">
<h2 class="section__title">Checkout</h2>
</div>
<ul class="breadcrumb__list">
<li class="active__list-item"><a href="<?php echo e(route('Index')); ?>">Home</a></li>
<li>Checkout</li>
</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->

<section class="checkout-area padding-top-120px padding-bottom-70px">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="card-box-shared">
<div class="card-box-shared-title">
<h3 class="widget-title font-size-18">Delivery Details</h3>
</div>
<div class="card-box-shared-body">
<div class="user-form">
<div class="contact-form-action">
<form  action="<?php echo e(route('Order/Store')); ?>" method="post">
  
<div class="row">
    <div class="col-lg-12">
        <?php echo csrf_field(); ?>
        <div class="input-box">
            <label class="label-text">Full Name<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="text" value="<?php echo e(Auth::user()->name); ?>" name="Name" placeholder="Full Name" required>
                <span class="la la-user input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
  
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Your Email<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="email" value="<?php echo e(Auth::user()->email); ?>" name="Email" placeholder="Email address" required>
                <span class="la la-envelope input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" value="<?php echo e(Auth::user()->Mobile); ?>"  type="text" name="Mobile" placeholder="Phone number" required>
                <span class="la la-phone input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-12">
        <div class="input-box">
            <label class="label-text">Delivery Address<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="text" name="Address"  value="<?php echo e(Auth::user()->Address); ?>" placeholder="Delivery Address" required>
                <span class="la la-map input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Landmark<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="text" name="Landmark" value="<?php echo e(Auth::user()->Landmark); ?>" placeholder="Landmark" required>
                <span class="la la-map input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
     <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">PinCode <span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="number" name="PinCode" value="<?php echo e(Auth::user()->PinCode); ?>" placeholder="PinCode" required>
                <span class="la la-pencil input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-12 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">City<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="text" name="City" placeholder="City" value="<?php echo e(Auth::user()->City); ?>" required>
                <span class="la la-map-marker input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">State<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input class="form-control" type="text" name="State" value="<?php echo e(Auth::user()->State); ?>" placeholder="State" required>
                <span class="la la-pencil input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-12 -->
</div>
</div>
</div>
</div><!-- end card-box-shared-body -->
</div><!-- end card-box-shared -->

</div><!-- end col-lg-7 -->
    <?php 
    $beforeprice = (int)0; 
    $discountprice = (int)0;
    ?>
    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php 
       $beforeprice += (int)$row->Price;
       $discountprice += (int)$row->DiscountPrice;
       ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-5">
<div class="card-box-shared">
<div class="card-box-shared-title">
<h3 class="widget-title font-size-18">Order Summary</h3>
</div>
<div class="card-box-shared-body">
<div class="shopping-cart-content">
<ul class="list-items">
<li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
<span class="primary-color">Original price:</span>
<span class="primary-color-3">Rs. <?php echo e($beforeprice); ?></span>
</li>
<li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
<span class="primary-color">Discount Price:</span>
<span class="primary-color-3">Rs. <?php echo e($discountprice); ?></span>
</li>
<li class="d-flex align-items-center justify-content-between font-size-18 font-weight-bold">
<span class="primary-color">Total:</span>
<span class="primary-color-3">Rs. <?php echo e($discountprice); ?></span>
</li>
</ul>
<div class="btn-box mt-2">
<input type="hidden" name="Amount" value="<?php echo e($discountprice); ?>">
<input type="hidden" name="GrandTotal" value="<?php echo e($discountprice); ?>">
<button type="submit" style="width: 100%" class="theme-btn d-block text-center">Proceed</button>
</div>
</div>
</div><!-- end card-box-shared-body -->
</div><!-- end card-box-shared -->
</form><!-- end row -->
</div><!-- end col-lg-5 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end checkout-area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/Checkout.blade.php ENDPATH**/ ?>