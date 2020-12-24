<?php $__env->startSection('main_section'); ?>
<section class="breadcrumb-area my-courses-bread" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content my-courses-bread-content">
<div class="section-heading">
<h2 class="section__title">View Cart </h2>
</div>
</div><!-- end breadcrumb-content -->
<div class="my-courses-tab">
<div class="section-tab section-tab-2">
</div>
</div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<section class="cart-area padding-top-120px padding-bottom-60px">


<div class="container">


<div class="row">
<div class="col-lg-12">
<div class="shopping-cart-wrap table-responsive">
<table class="table table-bordered ">
<thead class="cart-head">
<tr>
<td class="cart__title">Image</td>
<td class="cart__title">Product details</td>
<td class="cart__title">Price</td>
<td class="cart__title">remove</td>
</tr>
</thead>
<tbody class="cart-body">
<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td>
<a href="#" class="d-block"><img src="<?php echo e(url('/')); ?>/public/course/<?php echo e($row->Image); ?>"></a>
</td>
<td>
<div class="cart-product-desc">
	<p style=" font-size: 17px"><b><?php echo e($row->ProductName); ?></b></p>
	<!-- <?php echo $row->Description; ?> -->
	
</div>
</td>
<td style="width: 200px">
<span class="item__price">Rs. <?php echo e($row->DiscountPrice); ?>

<span class="before-price">Rs. <?php echo e($row->Price); ?></span>
</span>
</td>

<td>
<button id="remove_item" onclick="remove('<?php echo e($row->id); ?>')"  type="button" class="button-remove"><i class="fa fa-close"></i></button>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot class="cart-foot">
<tr>
<td colspan="2">
<a href="<?php echo e(route('Desktop-Course')); ?>" class="theme-btn">continue shopping</a>
</td>
<td colspan="2"  class="text-right">
<?php if($cart!='[]'): ?>
<?php if(isset(Auth::user()->id)): ?>
<a href="<?php echo e(route('Check-Out')); ?>" class="theme-btn">Order Now</a>
<?php else: ?>
<a href="<?php echo e(url('auth/google')); ?>" class="theme-btn">Order Now</a>
<?php endif; ?>
<?php endif; ?>
</td>
</tr>
</tfoot>
</table>
</div><!-- end shopping-cart-wrap -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->


</div><!-- end view-more-carousel -->
</div><!-- end view-more-courses -->
</div>
</div><!-- end row -->
</div>
</div><!-- end container -->
</section><!-- end cart-area -->
<form action="<?php echo e(route('Cart/Remove')); ?>" method="post">
	<?php echo e(csrf_field()); ?>

	<input type="hidden" name="ProductId" id="ProductId">
	<button id="formsubmit"></button>
</form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script type="text/javascript">
	function remove(id){
		$("#ProductId").val(id)
		$("#formsubmit").click();
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Frontend/ShoppingCart.blade.php ENDPATH**/ ?>