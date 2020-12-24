@extends('Frontend.layouts.Master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/sweetalert2.min.css">
@endsection
@section('main_section')

<!-- ================================
START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content">
<div class="section-heading">
<h2 class="section__title">Contact us</h2>
</div>
<ul class="breadcrumb__list">
<li class="active__list-item"><a href="{{route('Index')}}">home</a></li>
<li>Contact us</li>
</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
END BREADCRUMB AREA
================================= -->
<br /><br />


<!-- ================================
START CONTACT AREA
================================= -->
<section class="contact-area padding-bottom-40px">
<div class="container">
<div class="row">
<div class="col-lg-6 column-td-half">
<div class="info-box info-box-color-1 text-center">
<div class="hover-overlay"></div>
<div class="icon-element mx-auto">
<i class="la la-map-marker"></i>
</div>
<h3 class="info__title">Head Office (Raipur)</h3>
<p class="info__text mb-0">MIG-13, Indravati Colony, Canal Road, Gaurav Path, Raipur (C.G) - 492001
</p>
<span class="d-block"><i class="la la-phone"></i> : 0771 4907110, 7089040001, 9301889191 </span>
<span class="d-block"><i class="la la-envelope"></i> : info@rajputtutorials.com</span>
<br />

</div><!-- end info-box -->
</div><!-- end col-lg-4 -->
<div class="col-lg-6 column-td-half">
<div class="info-box info-box-color-2 text-center">
<div class="hover-overlay"></div>
<div class="icon-element mx-auto">
<i class="la la-map-marker"></i>
</div>
<h3 class="info__title">Branch Office (Jagdalpur)</h3>
<p class="info__text mb-0">1st Floor, Agrawal Bhawan, Near SBI ADB Branch, infront of Mahavir Residency, Chitrakote Road, Jagdalpur (C.G) - 494001
</p>
<span class="d-block"><i class="la la-phone"></i> : +91 7782229910, 7725889292, 8817623489</span>
<span class="d-block"><i class="la la-envelope"></i> : info@rajputtutorials.com</span>

</div><!-- end info-box -->
</div><!-- end col-lg-4 -->
<!--<div class="col-lg-4 column-td-half">
<div class="info-box info-box-color-3 text-center">
<div class="hover-overlay"></div>
<div class="icon-element mx-auto">
<i class="la la-map-marker"></i>
</div>
<h3 class="info__title">Branch Office (Bilaspur)</h3>
<p class="info__text mb-0">Rajput Tutorials, Near Niranjanam Car, Shiv Talkies Chowk, Bilaspur (C.G.)- 495001
</p>
<span class="d-block"><i class="la la-phone"></i> : +91 7752424222, 7746040001, 9109910780</span>
<span class="d-block"><i class="la la-envelope"></i> : info@rajputtutorials.com</span>
<br />
</div>
</div> -->
</div><!-- end row -->
<div class="contact-form-wrap pt-5">
<div class="row">
<div class="col-lg-5">
<div class="section-heading">
<p class="section__meta">get in touch</p>
<h2 class="section__title">Contact with us</h2>
<span class="section-divider"></span>
<p class="section__desc">
Raipur | Bilaspur | Jagdalpur
</p>
<ul class="social-profile">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
</ul>
</div><!-- end section-heading -->
</div><!-- end col-lg-5 -->
<div class="col-lg-7">
<div class="contact-form-action">
<form method="POST" name="contactform" action="{{route('Contact/Store')}}">
    {{csrf_field()}}
<div class="row">
    <div class="col-lg-12">
        <div class="input-box">
            <label class="label-text">Your Name<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input required class="form-control" type="text" name="Name" placeholder="Your name">
                <span class="la la-user input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Your Email<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input required class="form-control" type="email" name="Email" placeholder="Your email">
                <span class="la la-envelope input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <input required class="form-control" type="text" name="Mobile" placeholder="Phone number">
                <span class="la la-phone input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-6 -->
  
    <div class="col-lg-12">
        <div class="input-box">
            <label class="label-text">Message<span class="primary-color-2 ml-1">*</span></label>
            <div class="form-group">
                <textarea class="message-control form-control" name="Message" placeholder="Write message"></textarea>
                <span class="la la-pencil input-icon"></span>
            </div>
        </div>
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
        <button class="theme-btn" type="submit">Send Message</button>
    </div><!-- end col-md-12 -->
</div><!-- end row -->
</form>
</div><!-- end contact-form-action -->
</div><!-- end col-md-7 -->
</div><!-- end row -->
</div>
</div><!-- end container -->
</section><!-- end contact-area -->

<!-- ================================
START GOOGLE MAP
================================= -->
<div class="map-container section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div id="map" class="radius-round"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.7014963335773!2d81.6482891144109!3d21.24368238578344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd0d3776deff%3A0x505696a6267deef2!2sRajput%20Tutorials!5e0!3m2!1sen!2sin!4v1604687451894!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div><!-- end map -->
</div>
</div>
</div>
</div>
<!-- ================================
END GOOGLE MAP
================================= -->
<!-- ================================
START CONTACT AREA
================================= -->
@endsection

@section('js')
<script type="text/javascript" src="{{url('/')}}/public/assets/app-assets/js/sweetalert2.all.min.js"></script>
    @if(session()->has('success'))
<script type="text/javascript">

swal(
'Success',
'Form Submitted <b style="color:green;">Successfully </b>!',
'success'
)

</script>
@endif
@endsection