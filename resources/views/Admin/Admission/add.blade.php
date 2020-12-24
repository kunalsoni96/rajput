@extends('Admin.layouts.Master')

@section('MainSection')
<style type="text/css">
label{
margin-top: 20px;
}
</style>
<div class="app-content content">
<div class="content-wrapper">

<div class="content-body" style="margin-top: 20px">
<section class="input-validation" >
<div class="row">
<div class="col-md-12">
<div class="card" style="min-height: 80vh">
<div class="card-header" style="background: #262D47; height: 60px">
<div class="row">
  <div class="col-sm-6" style="color:white">
    @if(isset($edit->id))
       Admission Details
    @endif
  </div>
  <div class="col-sm-6">
    <a href="{{route('Admin/Admission')}}" style="float: right; margin-top: -10px;" class="btn btn-danger">Admission List</a>
  </div>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body">

    <div class="form-row">
      <div class="col-md-6 mb-6">
        <label for="validationCustom01">FullName</label>
        <input type="text" name="FullName" disabled class="form-control" id="validationCustom01" placeholder="" value="@if(isset($edit->id)){{$edit->Name}}@endif" required="">
      </div>

      <div class="col-md-6 mb-6">
        <label for="validationCustom01">Email</label>
        <input type="text" name="Email" disabled class="form-control" id="validationCustom01" placeholder="Email" value="@if(isset($edit->id)){{$edit->Email}}@endif" required="">
      </div>

      <div class="col-md-6 mb-6">
        <label for="validationCustom01">PhoneNumber</label>
        <input type="text" name="PhoneNumber" disabled class="form-control" id="validationCustom01" placeholder="PhoneNumber" value="@if(isset($edit->id)){{$edit->PhoneNumber}}@endif" required="">
      </div>

      <div class="col-md-6 mb-6">
        <label for="validationCustom01">Gender</label>
        <input type="text" name="Gender" disabled class="form-control" id="validationCustom01" placeholder="Gender" value="@if(isset($edit->id)){{$edit->Gender}}@endif" required="">
      </div>


      <div class="col-md-6 mb-6">
        <label for="validationCustom01">Category</label>
        <input type="text" name="Category" disabled class="form-control" id="validationCustom01" placeholder="Category" value="@if(isset($edit->id)){{$edit->Category}}@endif" required="">
      </div>

      <div class="col-md-12 mb-12">
        <label for="validationCustom01">Address</label>
        <input type="text" name="Address" disabled class="form-control" id="validationCustom01" placeholder="Address" value="@if(isset($edit->id)){{$edit->Address}}@endif" required="">
      </div>

      <div class="col-md-6 mb-6">
        <label for="validationCustom01">City</label>
        <input type="text" name="City" disabled class="form-control" id="validationCustom01" placeholder="City" value="@if(isset($edit->id)){{$edit->City}}@endif" required="">
      </div>

      <div class="col-md-6 mb-6">
        <label for="validationCustom01">State</label>
        <input type="text" name="State" disabled class="form-control" id="validationCustom01" placeholder="State" value="@if(isset($edit->id)){{$edit->State}}@endif" required="">
      </div>

      <div class="col-md-12 mb-12">
        <label for="validationCustom01">Message</label>
        <input type="text" name="Message" disabled class="form-control" id="validationCustom01" placeholder="Message" value="@if(isset($edit->id)){{$edit->Message}}@endif" required="">
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
@endsection 

@section('js')
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e) {
  $('#imagePreview').css('background-image', 'url('+e.target.result +')');
  $('#imagePreview').hide();
  $('#imagePreview').fadeIn(650);
}
reader.readAsDataURL(input.files[0]);
}
}
$("#imageUpload").change(function() {
readURL(this);
});
</script>

<script type="text/javascript">
function readURL2(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e) {
  $('#imagePreview2').css('background-image', 'url('+e.target.result +')');
  $('#imagePreview2').hide();
  $('#imagePreview2').fadeIn(650);
}
reader.readAsDataURL(input.files[0]);
}
}
$("#imageUpload2").change(function() {
readURL2(this);
});
</script>
@endsection