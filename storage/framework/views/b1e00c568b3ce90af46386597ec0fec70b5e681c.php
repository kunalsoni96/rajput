<?php $__env->startSection('main_section'); ?>
<section class="breadcrumb-area breadcrumb-detail-area" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content breadcrumb-detail-content">
<div class="section-heading">
<span class="badge-label"><?php echo e($data->Category); ?></span>
<h2 class="section__title mt-1"><?php echo e($data->ProductName); ?></h2>
<h4 class="widget-title mt-2"><?php echo e($data->SubDescription); ?></h4>
</div>
<ul class="breadcrumb__list mt-2">
<li>Subject : <a ><?php echo e($data->Subject); ?></a></li>

<li><?php echo e($data->SubCategory); ?></li>
<li><i class="la la-globe"></i> <?php echo e($data->Language); ?></li>

</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
END BREADCRUMB AREA
================================= -->

<!--======================================
START COURSE DETAIL
======================================-->
<section class="course-detail margin-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="course-detail-content-wrap margin-top-100px">


<div class="description-wrap margin-bottom-40px">
<h3 class="widget-title">Description :</h3><br>
	<b><?php echo e($data->SubDescription); ?></b>
    <?php echo $data->Description; ?>

</div><!-- end description-wrap -->
<div class="requirement-wrap margin-bottom-30px">
<h3 class="widget-title">Features :</h3><br>
<?php echo $data->Features; ?>

</div><!-- end requirement-wrap -->


</div><!-- end course-detail-content-wrap -->
</div><!-- end col-lg-8 -->
<div class="col-lg-4">
<div class="sidebar-component">
<div class="sidebar">
<div class="sidebar-widget sidebar-preview">
<div class="sidebar-preview-titles">
<h3 class="widget-title"><?php echo e($data->ProductName); ?></h3>
<span class="section-divider"></span>
</div>
<div class="preview-video-and-details">
<div class="preview-course-video">
<a href="javascript:void(0)" data-toggle="modal" data-target=".preview-modal-form">
<img src="<?php echo e(url('/')); ?>/public/course/<?php echo e($data->Image); ?>" alt="course-img">
<div class="play-button">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
           <style type="text/css">
               .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
               .st1{fill:#FFFFFF;}
           </style>
       
    </svg>
</div>
</a>
</div>
<div class="preview-course-content">
<p class="preview-course__price d-flex align-items-center">
<span class="price-current">Rs.<?php echo e($data->DiscountPrice); ?></span>
<span class="price-before">Rs.<?php echo e($data->Price); ?></span>
</p>
<p class="preview-price-discount__text">
<span class="discount-left__text-text"><?php echo e($data->Type); ?></span> 
</p>
<div class="buy-course-btn mb-3 text-center">


<?php if(in_array($data->id, $cookie_data)) { ?>
    <a href="<?php echo e(route('Shopping-Cart')); ?>" style="width: 100%; text-align: center;" onclick="addtocart('<?php echo e($data->Price); ?>','<?php echo e($data->id); ?>')" class="theme-btn addtocart">View Cart</a>
       
    <?php } else { ?>
 <?php if($data->DiscountPrice!=''): ?>
        <a href="#" style="width: 100%; text-align: center;" id="addtocart" onclick="addtocart('<?php echo e($data->DiscountPrice); ?>','<?php echo e($data->id); ?>')" class="theme-btn addtocart">Add to Cart</a>
    <?php else: ?>
<a href="#" style="width: 100%; text-align: center;" id="addtocart" onclick="addtocart('<?php echo e($data->Price); ?>','<?php echo e($data->id); ?>')" class="theme-btn addtocart">Add to Cart</a>
    <?php endif; ?>
    <?php } ?>



</div><!-- end preview-course-incentives -->
</div><!-- end preview-course-content -->
</div><!-- end preview-video-and-details -->
</div><!-- end sidebar-widget -->



<div class="sidebar-widget tag-widget">
<h3 class="widget-title">Course Tags</h3>
<span class="section-divider"></span>
<ul class="list-items">
<li><a href="#">beginner</a></li>
<li><a href="#">advanced</a></li>
<li><a href="#">tips</a></li>
<li><a href="#">photoshop</a></li>
<li><a href="#">software</a></li>
<li><a href="#">backend</a></li>
<li><a href="#">freelance</a></li>
<li><a href="#">technology</a></li>
</ul>
</div><!-- end sidebar-widget -->
</div><!-- end sidebar -->
</div><!-- end sidebar-component -->
</div><!-- end col-lg-4 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end course-detail -->
<!--======================================
END COURSE DETAIL
======================================-->

<form action="<?php echo e(route('Cart/Store')); ?>" method="post">
    <!-- <form> -->
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="ProductPriceSubmit" id="ProductPriceSubmit">
    <input type="hidden" name="ProductId" id="ProductId">
    <button id="cartsubmit" style="display: none;"></button>
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   function addtocart(price,id){
        document.getElementById('ProductId').value = id
        document.getElementById('ProductPriceSubmit').value = price
        document.getElementById('cartsubmit').click();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/CourseDetails.blade.php ENDPATH**/ ?>