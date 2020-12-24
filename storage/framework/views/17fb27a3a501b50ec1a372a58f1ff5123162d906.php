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
                        <h2 class="section__title">Gallery</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo e(route('Index')); ?>">home</a></li>
                        <li>Gallery</li>
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
                    <h2 class="section__title">Our Protfolio </h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
       
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-list row">
   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="single-portfolio-item col-lg-4 all">
        <div class="portfolio-hover">
            <a class="portfolio-link" href="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($row->Image); ?>" data-fancybox="gallery" data-caption="<?php echo e($row->Title); ?>">
                <img id="img_size" src="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($row->Image); ?>" alt="<?php echo e($row->Title); ?>">
                <i class="la la-plus icon-element"></i>
            </a>
        </div><!-- end portfolio-hover -->
    </div><!-- end single-portfolio-item -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div><!-- end portfolio-list -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end gallery-area -->
<!-- ================================
       START GALLERY AREA
================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/Images.blade.php ENDPATH**/ ?>