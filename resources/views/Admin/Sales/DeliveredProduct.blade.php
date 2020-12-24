@extends('Admin.layouts.Master')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/sweetalert2.min.css">
@endsection
@section('MainSection')

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
							        @php $i = 1; @endphp
							        @foreach($data as $row)
									<tr>
									<td>{{$i++}}</td>
									<td>{{$row->OrderId}}</td>
									<td>{{$row->name}}</td>
									<td>{{$row->email}}</td>
									<td>{{$row->Mobile}}</td>
									<td>{{$row->GrandTotal}}</td>
									<td >
									@if($row->DeliveryStatus==0)
									<select class="form-control" id="DeliveryStatus" onchange="DeliveryStatus('{{$row->id}}')" name="DeliveryStatus">
										<option value="0">Pending</option>
										<option value="1">Delivered</option>
										<option value="2">Cancelled</option>
									</select>
									@elseif($row->DeliveryStatus==1)
									<p style="color:green">Delivered</p>
									@else
									<p style="color:red">Cancelled</p>
									@endif
									</td>
									<td>{{$row->created_at}}</td>
									 <form action="{{route('Admin/Sales/ViewSession')}}" method="post">
                              <td>
                                {{csrf_field()}}
                                <input type="hidden" name="View" value="{{$row->id}}">
                                <button style="margin-right: 10px" type="submit" class="btn btn-info"><i class="fa fa-info"></i></button>
                                </form>
                              </td>
									</tr>
							        @endforeach
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
@endsection 

@section('js')
   <script type="text/javascript" src="{{url('/')}}/public/assets/app-assets/js/sweetalert2.all.min.js"></script>

@if(session()->has('success'))
   <script type="text/javascript">
			swal(
				'Success',
				'Banner Added <b style="color:green;">Successfully </b> button!',
				'success'
			)
   </script>
 @endif

 @if(session()->has('update'))
   <script type="text/javascript">
   	
			swal(
				'Success',
				'Banner Updated <b style="color:green;">Successfully </b> button!',
				'success'
			)
	
   </script>
 @endif

 @if(session()->has('delete'))
   <script type="text/javascript">
   	
			swal(
				'Success',
				'Banner Deleted <b style="color:green;">Successfully </b> button!',
				'success'
			)
		
   </script>
 @endif

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
				url:"{{route('Admin/Sales/DeliveryStatus/Change')}}",
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
@endsection