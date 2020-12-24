
<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/sweetalert2.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('MainSection'); ?>

<div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body" style="margin-top: 20px"><!-- Input Validation start -->
<section class="input-validation" >
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="min-height: 80vh">
        <div class="card-header" style="background: #262D47; height: 60px">
          <div class="row">
            <div class="col-sm-6" style="color:white">
              Order  List
            </div>
           
          </div>
        </div>
        <div class="card-content collapse show">
           <div class="card-body card-dashboard">
	                <p class="card-text">
					</p>
						<div class="table-responsive">
			                <table class="table table-striped table-bordered sourced-data">
									<thead>
									<tr>
									<th>Sr No.</th>
									<th>OrderId</th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Amount</th>
									<th>Delivery Status</th>
									<th>OrderDate</th>
									<th>Action</th>
									</tr>
									</thead>
									<tbody>
							        <?php $i = 1; ?>
							        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
									<td><?php echo e($i++); ?></td>
									<td><?php echo e($row->OrderId); ?></td>
									<td><?php echo e($row->name); ?></td>
									<td><?php echo e($row->email); ?></td>
									<td><?php echo e($row->Mobile); ?></td>
									<td><?php echo e($row->GrandTotal); ?></td>
									<td >
									<?php if($row->DeliveryStatus==0): ?>
									<select class="form-control" id="DeliveryStatus" onchange="DeliveryStatus('<?php echo e($row->id); ?>')" name="DeliveryStatus">
										<option value="0">Pending</option>
										<option value="1">Delivered</option>
										<option value="2">Cancelled</option>
									</select>
									<?php elseif($row->DeliveryStatus==1): ?>
									<p style="color:green">Delivered</p>
									<?php else: ?>
									<p style="color:red">Cancelled</p>
									<?php endif; ?>
									</td>
									<td><?php echo e($row->created_at); ?></td>
									 <form action="<?php echo e(route('Admin/Sales/ViewSession')); ?>" method="post">
                              <td>
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="View" value="<?php echo e($row->id); ?>">
                                <button style="margin-right: 10px" type="submit" class="btn btn-info"><i class="fa fa-info"></i></button>
                                </form>
                              </td>
									</tr>
							        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							        </tbody>
							</table>
						</div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--/ HTML (DOM) sourced data -->


        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('js'); ?>
   <script type="text/javascript" src="<?php echo e(url('/')); ?>/public/assets/app-assets/js/sweetalert2.all.min.js"></script>

<?php if(session()->has('success')): ?>
   <script type="text/javascript">
			swal(
				'Success',
				'Banner Added <b style="color:green;">Successfully </b> button!',
				'success'
			)
   </script>
 <?php endif; ?>

 <?php if(session()->has('update')): ?>
   <script type="text/javascript">
   	
			swal(
				'Success',
				'Banner Updated <b style="color:green;">Successfully </b> button!',
				'success'
			)
	
   </script>
 <?php endif; ?>

 <?php if(session()->has('delete')): ?>
   <script type="text/javascript">
   	
			swal(
				'Success',
				'Banner Deleted <b style="color:green;">Successfully </b> button!',
				'success'
			)
		
   </script>
 <?php endif; ?>

<script type="text/javascript">
	$(document).on('click', '#delete_popup', function(e) {
		    swal({
				title: "Are you sure?", 
				text: "You will be delete banner", 
				type: "warning",
				confirmButtonText: "Yes, Delete It",
				showCancelButton: true
		    })
		    	.then((result) => {
					if (result.value) {
					    $("#delete").click();
					} else if (result.dismiss === 'cancel') {
					    swal(
					      'Cancelled',
					      'Your stay here :)',
					      'error'
					    )
					}
				})
		});
</script>

<script type="text/javascript">
  function deletefunction(id){
    document.getElementById('deleteid').value = id
  }
</script>

<script type="text/javascript">

	$(document).ready(function(){
		$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
	});

	function DeliveryStatus(id){
			$.ajax({
				url:"<?php echo e(route('Admin/Sales/DeliveryStatus/Change')); ?>",
				type:"POST",
				data:{id:id, DeliveryStatus:$("#DeliveryStatus").val()},
				success:function(data){
					window.location.reload();
					if(data=='1'){
						swal(
						'Success',
						'Delivered <b style="color:green;">Successfully </b> button!',
						'success'
						)
					}
					else{
						swal(
						'Success',
						'Cancelled By User <b style="color:red;">Successfully </b> button!',
						'success'
						)
					}
				}
			})
		}
	
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/Sales/TodaySales.blade.php ENDPATH**/ ?>