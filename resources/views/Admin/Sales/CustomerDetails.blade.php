@extends('Admin.layouts.Master')

@section('MainSection')

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
              Customer Details
            </div>
            <div class="col-sm-6">
              <a href="{{route('Admin/Customer/Active')}}" style="float: right; margin-top: -10px;" class="btn btn-danger"> List</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="needs-validation was-validated" method="post"  enctype="multipart/form-data">
              {{csrf_field()}}
              @if(isset($data->id))
                <input type="hidden" name="Update" value="{{$data->id}}">
              @endif
              <div class="form-row">
                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Name</label>
                  <input type="text" name="name" disabled class="form-control" id="validationCustom01" placeholder="Name" value="@if(isset($data->id)){{$data->name}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Email</label>
                  <input type="text" name="Email" disabled class="form-control" id="validationCustom01" placeholder="Email" value="@if(isset($data->id)){{$data->email}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">Mobile</label>
                  <input type="text" name="Mobile" disabled class="form-control" id="validationCustom01" placeholder="Mobile" value="@if(isset($data->id)){{$data->Mobile}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

              <div class="form-row" style="margin-top: -20px">
                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Address</label>
                  <input type="text" name="Address" disabled class="form-control" id="validationCustom01" placeholder="Address" value="@if(isset($data->id)){{$data->Address}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Landmark</label>
                  <input type="text" name="Landmark" disabled class="form-control" id="validationCustom01" placeholder="Landmark" value="@if(isset($data->id)){{$data->Landmark}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

              <div class="form-row" style="margin-top: 30px">
                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">City</label>
                  <input type="text" name="City" disabled class="form-control" id="validationCustom01" placeholder="City" value="@if(isset($data->id)){{$data->City}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">State</label>
                  <input type="text" name="State" disabled class="form-control" id="validationCustom01" placeholder="State" value="@if(isset($data->id)){{$data->State}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <label for="validationCustom01">PinCode</label>
                  <input type="text" name="PinCode" disabled class="form-control" id="validationCustom01" placeholder="PinCode" value="@if(isset($data->id)){{$data->PinCode}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

               
               
                <div class="col-md-4">
                  <div class="avatar-upload">
                      <div class="avatar-preview">
                           <div id="imagePreview" @if(isset($data->id)) style="background-image: url('{{$data->Profile}}');" @else  style="background-image: url(https://i.pinimg.com/originals/d1/77/27/d1772777fb0ea141fa22a9dbcbffc577.jpg);" @endif>
                      </div>
                            </div>
                      </div>
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