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
                Update Notification
              @else
              Add New Notification
              @endif
            </div>
            <div class="col-sm-6">
              <a href="{{route('Admin/Notification')}}" style="float: right; margin-top: -10px;" class="btn btn-danger">Notification List</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="needs-validation was-validated" method="post" action="@if(isset($edit->id)) {{route('Admin/Notification/Update')}} @else {{route('Admin/Notification/Store')}} @endif" enctype="multipart/form-data">
              {{csrf_field()}}
               @if(isset($edit->id))
                <input type="hidden" name="Update" value="{{$edit->id}}">
              @endif
              <div class="form-row">
                <div class="col-md-12 mb-12">
                  <label for="validationCustom01">Title</label>
                  <input type="text" name="Title" class="form-control" id="validationCustom01" placeholder="Title" value="@if(isset($edit->id)){{$edit->Title}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="col-md-12 mb-12">
                  <label for="validationCustom01">URL</label>
                  <input type="url" name="URL" class="form-control" id="validationCustom01" placeholder="URL" value="@if(isset($edit->id)){{$edit->URL}}@endif" >
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom01">PDF</label>
                  <input type="file" accept="application/pdf" name="PDF" class="form-control">
                </div>

                <div class="col-md-6 mb-6">
                 
                  <label for="validationCustom01">Status</label>
                  <select class="form-control" required name="Status">
                    <option value="1" @if(isset($edit->id)) @if($edit->Status=='1') selected  @endif @endif>Active</option>
                    <option value="0"  @if(isset($edit->id)) @if($edit->Status=='0') selected  @endif @endif>InActive</option>
                  </select>
                </div>

              <div class="col-md-12 mb-12">
                  <button style="margin-top: 40px; background: #262D47; margin-bottom: 20px; height: 43px; border:none;  width:300px; float: right;" class="btn btn-info" type="submit">
                @if(isset($edit->id))
                Update Now
              @else
              Submit Now
              @endif
              </button>
            </div>
              </div>
            
            </form>
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