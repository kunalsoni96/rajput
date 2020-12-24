<?php $__env->startSection('main_section'); ?>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
<style type="text/css">
    #img_size{
        height: 300px;
    }
    @media(max-width: 768px){
        #img_size{
        height: auto;
    }   
    }
</style>
<section class="breadcrumb-area" style="background: #0C2754">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">News & Media</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo e(route('Index')); ?>">home</a></li>
                       
                        <li>News & Media</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START GALLERY AREA
================================= -->
<section class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">explore now</h5>
                    <h2 class="section__title">News & Media </h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
       
        <div class="row">
            
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-4">
    <div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img"><img src="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($row->Image); ?>" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a ><?php echo e($row->Title); ?>...</a>
<a href="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($row->PDF); ?>" style="float: right;" target="_blank"><i class="fa fa-download"></i></a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
<li><a href="#" class="blog-admin-name"><?php echo e(str_limit($row->Description)); ?>...</a></li>
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end gallery-area -->
<!-- ================================
       START GALLERY AREA
================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/NewsAndMedia.blade.php ENDPATH**/ ?>