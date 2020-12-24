<?php $__env->startSection('main_section'); ?>
<!-- ================================
START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content">
<div class="section-heading">
<h2 class="section__title"><?php echo e($id); ?></h2>
</div>
<ul class="breadcrumb__list">
<li class="active__list-item"><a href="<?php echo e(route('Index')); ?>">home</a></li>
<li><?php echo e($id); ?></li>
</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
END BREADCRUMB AREA
================================= -->


<section class="dashboard-area">

<div >
<div class="container-fluid">


<div class="row mt-5">
<div class="col-lg-12">
<div class="card-box-shared">
<div class="card-box-shared-title">
<h3 class="widget-title"><?php echo e($id); ?></h3>
</div>
<div class="card-box-shared-body">
<div class="statement-table purchase-table table-responsive mb-5">
<table class="table">
<thead>
<tr>
    <th scope="col">Sno.</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Date</th>
    <th scope="col">Status</th>
</tr>
</thead>
<tbody>
    <?php $i = 1; ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td scope="row">
            <div class="statement-info">
                <ul class="list-items">
                    <li><?php echo e($i++); ?></li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>
                        <a href="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($row->Image); ?>" target="_blank" class="d-inline-block">
                            <img src="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($row->Image); ?>" alt="">
                        </a>
                        <a href="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($row->PDF); ?>" target="_blank" class="d-inline-block primary-color">
                           <?php echo e($row->Title); ?>

                        </a>
                    </li>
                </ul>
            </div>
        </td>
        
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li><?php echo $row->Description; ?></li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li><?php echo e($row->created_at); ?></li>
                </ul>
            </div>
        </td>
       
         <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>
                        <a href="<?php echo e(url('/')); ?>/public/studentcorner/<?php echo e($row->PDF); ?>" target="_blank">
                        <span class="badge bg-success text-white p-1">Download</span>
                        </a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>


</div>
</div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->

</div><!-- end container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/CurrentAffairs.blade.php ENDPATH**/ ?>