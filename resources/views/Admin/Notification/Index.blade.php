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
Notification List
</div>
<div class="col-sm-6">
<a href="{{route('Admin/Notification/Add')}}" style="float: right; margin-top: -10px;" class="btn btn-danger">Add New</a>
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
        <th>Title</th>
        <th>PDF</th>
        <th>URL</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
@php $i = 1; @endphp
@foreach($data as $row)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$row->Title}}</td>
        <td><a href="{{url('/')}}/public/notification/{{$row->PDF}}" target="_blank">{{$row->URL}}</a></td>
        <td>
        	<a href="{{$row->URL}}" target="_blank">{{$row->URL}}</a>
        </td>
        <td>
        	@if($row->Status=='1')
        		<p style="color:green">Active</p>
        	@else
        		<p style="color:red">InActive</p>
        	@endif
        </td>
        <td>{{$row->created_at}}</td>
        <form action="{{route('Admin/Notification/EditSession')}}" method="post">
        <td>
        	{{csrf_field()}}
        	<input type="hidden" name="Edit" value="{{$row->id}}">
        	<button style="margin-right: 10px" type="submit" class="btn btn-info"><i class="fa fa-pencil"></i></button>
        	</form>
        	<button onclick="deletefunction('{{$row->id}}')" id="delete_popup" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        	<form action="{{route('Admin/Notification/Delete')}}" method="post">
        		{{csrf_field()}}
        		<input type="hidden" name="Delete" id="deleteid">
        		<button type="submit" style="display: none;" id="delete"></button>
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
'Notification Added <b style="color:green;">Successfully </b> button!',
'success'
)
</script>
@endif

@if(session()->has('update'))
<script type="text/javascript">

swal(
'Success',
'Notification Updated <b style="color:green;">Successfully </b> button!',
'success'
)

</script>
@endif

@if(session()->has('delete'))
<script type="text/javascript">

swal(
'Success',
'Notification Deleted <b style="color:green;">Successfully </b> button!',
'success'
)

</script>
@endif

<script type="text/javascript">
$(document).on('click', '#delete_popup', function(e) {
swal({
title: "Are you sure?", 
text: "You will be delete Notification", 
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
@endsection