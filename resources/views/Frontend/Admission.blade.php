@extends('Frontend.layouts.Master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/sweetalert2.min.css">
@endsection
@section('main_section')
<!-- ================================
START ADMISSION AREA
================================= -->
<section class="admission-area section--padding">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-heading text-center">

<h5 class="section__meta">Admission Form</h5>
<h2 class="section__title">Fill Up this Form to Join with Us</h2>
<span class="section-divider"></span>
</div>
</div>
</div>
<div class="row margin-top-30px">

<div class="col-lg-10 mx-auto">
<div class="card-box-shared">
<div class="card-box-shared-body">
<div class="contact-form-action">

    @if(session()->has('error'))
        <div class="course-alert-info">
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
        <i class="fa fa-mobile"></i> <a href="#" class="alert-link">Email or Mobile Number is Already Exists!</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
        </div>
    @endif

<form method="post" action="{{route('Admission/Store')}}">
{{csrf_field()}}
<div class="row">
<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Full Name<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" required type="text" name="Name" placeholder="Full Name">
    <span class="la la-user input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->

<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Select Gender<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <label for="radio-1" class="radio-trigger mb-0 mr-2">
        <input type="radio" id="radio-1" value="Male" name="Gender">
        <span class="checkmark"></span>
        <span class="font-size-15 primary-color-3">Male</span>
    </label>
    <label for="radio-2" class="radio-trigger mb-0">
        <input type="radio" id="radio-2" name="Gender" value="Female">
        <span class="checkmark"></span>
        <span class="font-size-15 primary-color-3">Female</span>
    </label>
</div>
</div>
</div><!-- end col-lg-12 -->

<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" type="email" name="Email" placeholder="Email address">
    <span class="la la-envelope input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->

<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" type="number" required name="PhoneNumber" placeholder="Phone number">
    <span class="la la-phone input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->

<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Course Apply for<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <div class="sort-ordering user-form-short">
        <select class="sort-ordering-select" name="Course" required>
            <option value="">Select a category</option>
            @foreach($data as $row)
            <option value="{{$row->Name}}">{{$row->Name}}</option>
            @endforeach
        </select>
    </div><!-- end sort-ordering -->
</div>
</div>
</div><!-- end col-lg-6 -->


<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Select Category<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <div class="sort-ordering user-form-short">
        <select class="sort-ordering-select" onchange="SelectCount()" id="SelectCourse" name="Category" required>
            <option value="Prelims">Prelims</option>
            <option value="Mains">Mains</option>
            <option value="Prelims+Mains">Prelims + Mains</option>
           
        </select>
        <input type="hidden" name="Amount" id="Amount">
    </div><!-- end sort-ordering -->
</div>
</div>
</div><!-- end col-lg-6 -->

    
<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Address<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" type="text" name="Address" placeholder="Address">
    <span class="la la-map input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->


<div class="col-lg-6">
<div class="input-box">
<label class="label-text">City<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" type="text" name="City" placeholder="City">
    <span class="la la-map-marker input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->


<div class="col-lg-6">
<div class="input-box">
<label class="label-text">State<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" type="text" name="State" placeholder="State">
    <span class="la la-map-marker input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->

<div class="col-lg-12">
<div class="input-box">
<label class="label-text">Message<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
    <input class="form-control" required type="text" name="Message" placeholder="Message">
    <span class="la la-user input-icon"></span>
</div>
</div>
</div><!-- end col-lg-6 -->

<div class="col-lg-12">
<div class="btn-box">

<div class="row">
     <div class="col-sm-9">
          <div class="course-alert-info">
        <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert" style="height: 50px">
        <i class="fa fa-money"></i> <a  class="alert-link">Course Amount : Rs. <span id="course_amount">0</span></a>
      
        </div>
        </div>
    </div>
    <div class="col-sm-3">
        <button class="theme-btn" type="submit">Pay Now</button>
    </div>
   
</div>
</div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</form>
</div><!-- end contact-form-action -->
</div>
</div><!-- end card-box-shared -->
</div><!-- end col-lg-10 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end admission-area -->
<!-- ================================
START ADMISSION AREA
================================= -->
@endsection

@section('js')
<script type="text/javascript" src="{{url('/')}}/public/assets/app-assets/js/sweetalert2.all.min.js"></script>
    @if(session()->has('success'))
<script type="text/javascript">

swal(
'Success',
'Form Submitted <b style="color:green;">Successfully </b>! Please Check Your Email',
'success'
)

</script>


@endif

<script type="text/javascript">
    function SelectCount(){
        var course = $("#SelectCourse").val();
        var amount = 19500;
        if(course=='Prelims'){
            amount = 19500;
        }
        else if(course=='Mains'){
            amount = 20000;
        }
        else{
            amount = 21500;
        }
        $("#Amount").val(amount);
        $("#course_amount").empty().append(amount);
    }

</script>
@endsection