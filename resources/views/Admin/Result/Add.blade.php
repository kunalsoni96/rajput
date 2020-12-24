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
                Update Result
              @else
              Add New Result
              @endif
            </div>
            <div class="col-sm-6">
              <a href="{{route('Admin/Result')}}" style="float: right; margin-top: -10px;" class="btn btn-danger">Result List</a>
            </div>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="needs-validation was-validated" method="post" action="@if(isset($edit->id)) {{route('Admin/Result/Update')}} @else {{route('Admin/Result/Store')}} @endif" enctype="multipart/form-data">
              {{csrf_field()}}
               @if(isset($edit->id))
                <input type="hidden" name="Update" value="{{$edit->id}}">
              @endif
              <div class="form-row">
                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Name</label>
                  <input type="text" name="Name" class="form-control" id="validationCustom01" placeholder="Name" value="@if(isset($edit->id)){{$edit->Name}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                  <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Subject</label>
                  <input type="text" name="Subject" class="form-control" id="validationCustom01" placeholder="Subject" value="@if(isset($edit->id)){{$edit->Subject}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Rank</label>
                  <input type="text" name="Rank" class="form-control" id="validationCustom01" placeholder="Rank" value="@if(isset($edit->id)){{$edit->Rank}}@endif" required="">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Result CategoryId</label>
                  <select class="form-control" required name="ResultId">
                    @foreach($resultcategory as $row)
                    <option value="{{$row->id}}" @if(isset($edit->id)) @if($edit->ResultId==$row->id) selected  @endif @endif>{{$row->TitleandYear}}</option>
                    @endforeach
                  </select>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
               

                <div class="col-md-4">
                  <div class="avatar-upload">
                      <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="Image" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"  style="margin-top:0px"></label>
                      </div>

                      <div class="avatar-preview">
                           <div id="imagePreview" @if(isset($edit->id)) style="background-image: url({{url('/')}}/public/result/{{$edit->Image}});" @else  style="background-image: url(https://i.pinimg.com/originals/d1/77/27/d1772777fb0ea141fa22a9dbcbffc577.jpg);" @endif>
                      </div>
                            </div>
                      </div>
                </div>

              

                <div class="col-md-8 mb-8" style="margin-top: 10px">
                  <label for="validationCustom01">Status</label>
                  <select class="form-control" required name="Status">
                    <option value="1" @if(isset($edit->id)) @if($edit->Status=='1') selected  @endif @endif>Active</option>
                    <option value="0"  @if(isset($edit->id)) @if($edit->Status=='0') selected  @endif @endif>InActive</option>
                  </select>
                </div>
              <div class="col-md-6"></div>
              <div class="col-md-6 mb-6">
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