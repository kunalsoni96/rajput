<header class="header-menu-area">
<div class="header-top">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">

</div><!-- end col-lg-6 -->
<div class="col-lg-6">
<div class="header-widget d-flex align-items-center justify-content-end">

<div class="header-right-info">
<div class="shop-cart">
<ul>
 
<li>
    <p class="shop-cart-btn d-flex align-items-center">
        <i class="la la-shopping-cart"></i>
        <span class="product-count ml-1"><?php echo e($cart_count); ?></span>
    </p>
    <ul class="cart-dropdown-menu">
    <?php 
    $beforeprice = (int)0; 
    $discountprice = (int)0;
    ?>
    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="#" class="cart-link">
                <img src="<?php echo e(url('/')); ?>/pubilc/course/<?php echo e($row->Image); ?>" alt="product">
            </a>
            <p class="cart-info">
                <a >
                    <?php echo e($row->ProductName); ?>

                </a>
                <span class="cart__author"><?php echo e($row->Type); ?></span>
                <span class="cart__price">
                       Rs. <?php echo e($row->DiscountPrice); ?> <span class="before-price">Rs. <?php echo e($row->Price); ?></span>
                       <?php 
                       $beforeprice += (int)$row->Price;
                       $discountprice += (int)$row->DiscountPrice;
                       ?>
                </span>
            </p>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php if($cart!='[]'): ?>
        <li>
            <p class="cart-total">Total: Rs. <?php echo e($discountprice); ?><span class="before-price">Rs. <?php echo e($beforeprice); ?></span></p>
        </li>
        <li>
            <a class="theme-btn w-100 text-center" href="<?php echo e(route('Shopping-Cart')); ?>">View Cart</a>
        </li>
        <?php endif; ?>
    </ul>
</li>
</ul>
</div><!-- end shop-cart -->
</div><!-- end header-right-info -->
<div class="header-right-info">
<ul class="header-action-list">
<li><a href="#"><span class="la la-phone mr-2"></span>+91 7089040001</a> </li>
<?php if(isset(Auth::user()->id)): ?>

<li>
    <a href="<?php echo e(route('My-Course')); ?>">MyCourse</a>
</li>

<?php else: ?> 
<li><a href="<?php echo e(url('auth/google')); ?>">Login</a></li>

<li><a href="<?php echo e(url('auth/google')); ?>">Register</a></li>
<?php endif; ?>
</ul>
</div><!-- end header-right-info -->
</div><!-- end header-widget -->
</div><!-- end col-lg-6 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end header-top -->
<div class="header-menu-content">
<div class="container-fluid">
<div class="main-menu-content">
<div class="row align-items-center">
<div class="col-lg-2">
<div class="logo-box">
<a href="<?php echo e(route('Index')); ?>" class="logo"><img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/logo.png" alt="Rajput Tutorials"></a>
<div class="menu-toggler">
<i class="la la-bars"></i>
<i class="la la-times"></i>
</div>
</div>
</div><!-- end col-lg-2 -->
<div class="col-lg-10">
<div class="menu-wrapper">

<nav class="main-menu">
<ul>
<li>
    <a href="<?php echo e(route('Index')); ?>">Home</a>
</li>

<li>
    <a href="#">About</a>
    <ul class="dropdown-menu-item">
        
        <li><a href="<?php echo e(route('About')); ?>">About Rajput</a></li>
		<li><a href="<?php echo e(route('About-CGPSC')); ?>">About CGPSC</a></li>
    </ul>
</li>
<li>
    <a href="#">Courses</a>
    <ul class="dropdown-menu-item" style="width: 270px">
        <li><a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank">Mobile Course</a></li>
        <li><a href="<?php echo e(route('Desktop-Course')); ?>">Desktop Course</a> <span class="new-page-badge">comming soon</span></li>
		<li><a href="<?php echo e(route('Pendrive-Course')); ?>">Pendrive Course</a> <span class="new-page-badge">comming soon</span></li>
    </ul>
</li>
<li>
    <a href="#">Student Corner</a>
    <ul class="dropdown-menu-item">
        <?php $__currentLoopData = $subject_student_corner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url('StudentCorner')); ?>/<?php echo e($row->Name); ?>"><?php echo e($row->Name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url('/')); ?>/Videos/DemoVideos">Demo Videos </a></li>
    </ul>
</li>

<li>
    <a href="#">Gallery</a>
    <ul class="dropdown-menu-item">
        <li><a href="<?php echo e(route('Images')); ?>">Images </a></li>
        <li><a href="<?php echo e(route('News-&-Media')); ?>">News & Media</a></li>
        <li><a href="<?php echo e(url('Videos/Videos')); ?>">Video</a></li>
        
    </ul>
</li>

<!-- <li><a href="<?php echo e(route('Career')); ?>">Career</a></li> -->
<li><a href="<?php echo e(route('Result')); ?>">Toppers</a></li>
<li><a href="<?php echo e(route('Contact')); ?>">Contact</a></li>
</ul><!-- end ul -->
</nav><!-- end main-menu -->
<div class="logo-right-button">
<a href="<?php echo e(route('Admission')); ?>" class="theme-btn">Admission Now </a>
</div><!-- end logo-right-button -->
</div><!-- end menu-wrapper -->
</div><!-- end col-lg-10 -->
</div><!-- end row -->
</div>
</div><!-- end container-fluid -->
</div><!-- end header-menu-content -->
</header><?php /**PATH C:\xampp\htdocs\rajput_backup_original\resources\views/Frontend/layouts/Navbar.blade.php ENDPATH**/ ?>