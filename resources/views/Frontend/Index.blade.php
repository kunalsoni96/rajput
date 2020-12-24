@extends('Frontend.layouts.Master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/sweetalert2.min.css">
@endsection
@section('main_section')
<style type="text/css">
    #media_img{
        height: 300px;
    }

    .modal-backdrop{
        position: static;
    }

    .modal{
        top:12%;
    }

    #subject_img{
        height: 300px;
    }

    .team-item .team-img-box:after{
        background: none !important;
    }

    #m{
        display: none;
    }

    #header_box{
        height: 500px;
    }


    @media(max-width: 768px){
       #media_img{
        height: auto;
    } 

    #header_box{
        height: auto;
    }

    #desktop{
        display: none;
    }

    #m{
        display: block;
    }

    #subject_img{
        height: auto;
    }
    }
</style>

<section class="slider-area">
<div class="hero-slide owl-dot-and-nav" id="desktop">

@foreach($data as $row)

<div class="single-slide-item"  style="background-image: url('{{url('/')}}/public/banner/{{$row->Image}}');">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading">
<h2 class="section__title text-white">बढ़ाएं  कदम <span style="color:yellow;">एक बेहतर </span>  <br> भविष्य की ओर</h2>
<p class="section__desc">आपके उज्जवल भविष्य को नई दिशा देने वाला विश्वसनीय  कोचिंग संस्थान ..  </p> 

<!-- <h2 class="section__title text-white">  &nbsp; &nbsp; &nbsp;</h2>
<p class="section__desc"> &nbsp; &nbsp; &nbsp; </p> -->
</div>
    
<div class="btn-box d-flex align-items-center">
<a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="{{url('/')}}/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a>

</div>  
</div>
</div>
</div>
</div>


@endforeach

</div>

<div class="hero-slide owl-dot-and-nav" id="m">

@foreach($data as $row)

<div class="single-slide-item"  style="background-image: url('{{url('/')}}/public/banner/{{$row->MobileImage}}');">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading">
<h2 class="section__title text-white">बढ़ाएं  कदम <span style="color:yellow;">एक बेहतर </span>  <br> भविष्य की ओर</h2>
<p class="section__desc">आपके उज्जवल भविष्य को नई दिशा देने वाला विश्वसनीय  कोचिंग संस्थान ..  </p> 
<!-- <h2 class="section__title text-white">  &nbsp; &nbsp; &nbsp;</h2>
<p class="section__desc"> &nbsp; &nbsp; &nbsp; </p> -->
</div>
    
<div class="btn-box d-flex align-items-center">
<a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="{{url('/')}}/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a>
 
</div>
</div>
</div>
</div>
</div>


@endforeach

</div>

</section>

<section class="feature-area text-center padding-bottom-90px">
    <div class="container">
        <div class="feature-content-wrap">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-1" id="header_box">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="fa fa-folder"  style="margin-top: 15px"></i>
                        </div>
                        <h3 class="info__title">Classroom Programs</h3>
                        <p class="info__text">राजपूत ट्यूटोरियल्स द्वारा संचालित क्लासरूम प्रोग्राम में छत्तीसगढ़ राज्य लोक सेवा आयोग की परीक्षाओं की प्रारंभिक, मुख्य एवं प्रारंभिक+मुख्य परीक्षाओं की तैयारी के साथ छात्रों को पढ़ाई का एक अच्छा परिवेश मिलता है। यहाँ के अनुभवी शिक्षकों की देख-रेख में बेहतर शिक्षा प्रदान की जाती है एवं छात्रों पर विशेष ध्यान दिया जाता है। </p>
                        <a href="#" data-toggle="modal" data-target="#basicModal" class="text-btn" style="position: absolute;bottom:8%; left:40%">read more</a>

 
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-2" id="header_box">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="fa fa-mobile"  style="margin-top: 15px"></i>
                        </div>
                        <h3 class="info__title">Mobile / Tablet Course</h3>
                        <p class="info__text">ऑनलाइन कोर्स - राजपूत ट्यूटोरियल्स द्वारा उपलब्ध ऑनलाइन कोर्स के अंतर्गत छत्तीसगढ़ राज्य लोक सेवा आयोग की प्रारंभिक, मुख्य एवं प्रारंभिक+मुख्य परीक्षा के मोबाइल एवं टेबलेट कॉर्स प्रदान किये जाते हैं। इसके अलावा आपको इसमें सभी अपडेटेड स्टडी मैटेरियल पीडीएफ फॉर्म में उपलब्ध कराया जाता है।</p>
                        <a href="#" data-toggle="modal" data-target="#basicModal2" class="text-btn" style="position: absolute;bottom:8%; left:40%">read more</a>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-3" id="header_box">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto" >
                            <i class="fa fa-desktop" style="margin-top: 20px"></i>
                        </div>
                        <h3 class="info__title">Pendrive & Desktop Course</h3>
                        <p class="info__text">अब बिना इंटरनेट के घर बैठे करें तैयारी</p>
                        <a href="#" class="text-btn" data-toggle="modal" data-target="#basicModal3" style="position: absolute;bottom:8%; left:40%">read more</a>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section>
<!--======================================
END FEATURE AREA
======================================-->

<div class="container" style="margin-bottom: 80px">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12 col-12">
            <div style="padding:0px; padding-top:8px; background: white">
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                <div class="row">
                    
                        <div class="col-sm-12 col-md-12 col-xl-12 col-xs-12 col-12">
                        @foreach($notification as $row)
                        @if($row->PDF!='')
                        <a href="{{url('/')}}/public/notification/{{$row->PDF}}" target="_blank" style="color:#29376E; font-size: 20px !important">
                            <i class="fa fa-check-circle"></i> 
                            {{$row->Title}}</a>

                        @else
                        <a href="{{$row->URL}}" target="_blank" style="color:#29376E; font-size: 20px !important">
                            <i class="fa fa-check-circle"></i> 
                            {{$row->Title}}
                        </a>
                        @endif 
                            &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;
                            @endforeach
                        </div>
                    
                </div>
            </marquee>
        </div>
        </div>
    </div>
</div>

<section class="blog-area padding-top-120px" style="padding-top: 40px">
<div class="container">

<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta section__metalight">OUR TOPPERS</h5>
<h2 class="section__title text-white">राजपूत के होनहार</h2>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
</div><!-- end col-md-12 -->
</div><!-- end row -->
<div class="row margin-top-30px">
<div class="col-lg-12">
<div class="blog-post-carousel owl-dot-and-nav">

@foreach($result as $row)
<div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img"><img src="{{url('/')}}/public/result/{{$row->Image}}" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a >{{$row->Name}}</a><br>
<a style="color:gray; font-size: 15px">{{$row->Subject}}</a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
    <li><a href="#" class="blog-admin-name" style="color:#29376E; margin-left: -2px">{{$row->TitleandYear}}</a>
</li>
<!-- <li><a href="#" class="blog-admin-name" style="color:#29376E; font-weight: bold;">Rank : {{$row->Rank}}</a>
</li> -->
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
@endforeach

</div><!-- end blog-post-carousel -->
</div><!-- end col-lg-12 -->


</div><!-- end row -->
<div class="row" style="margin-bottom: 50px; margin-top: 20px">
<div class="col-sm-12">
        <center><a href="{{route('Result')}}"  class="theme-btn"> <b> View More </b></a></center>
</div>
</div>

</div><!-- end container -->
</section><!-- end blog-area -->


<section class="category-area padding-bottom-90px">
<div class="container">
<div class="row">
<div class="col-lg-9">
<div class="section-heading">
<h5 class="section__meta">Student Corner</h5>
<h2 class="section__title">Popular Categories</h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-9 -->
<div class="col-lg-3">
<div class="btn-box h-100 d-flex align-items-center justify-content-end">


<a href="#" class="theme-btn">View All</a>
</div><!-- end btn-box-->
</div><!-- end col-lg-3 -->
</div><!-- end row -->
<div class="category-wrapper margin-top-28px">
<div class="row">
    <div class="col-lg-4 column-td-half">
<div class="category-item">
<img src="{{url('/')}}/public/frontend/assets/images/Video-Lectures.jpg" alt="" id="subject_img">
<div class="category-content">
<div class="category-inner">
<h3 class="cat__title"><a href="#">Demo Videos</a></h3>


<a href="{{url('Videos/DemoVideos')}}" class="theme-btn">explore now</a>
</div>
</div><!-- end category-content -->
</div><!-- end category-item -->
</div><!-- end col-lg-4 -->
@foreach($subject_student_corner as $row)
<div class="col-lg-4 column-td-half">
<div class="category-item">
<img src="{{url('/')}}/public/subject/{{$row->Image}}" alt="" id="subject_img">
<div class="category-content">
<div class="category-inner">
<h3 class="cat__title"><a href="#">{{$row->Name}}</a></h3>


<a href="{{url('/')}}/StudentCorner/{{$row->Name}}" class="theme-btn">explore now</a>
</div>
</div><!-- end category-content -->
</div><!-- end category-item -->
</div><!-- end col-lg-4 -->
@endforeach
</div><!-- end row -->
</div><!-- end category-wrapper -->
</div><!-- end container -->
</section><!-- end category-area -->


<!-- <section class="course-area">
<div class="course-wrapper">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">अपने मनपसंद कोर्स का चयन करें</h5>
<h2 class="section__title">कोर्सेस</h2>
<span class="section-divider"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="section-tab margin-top-28px margin-bottom-55px">
<ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
@php $i = 1; @endphp
@foreach($category as $row)
<li role="presentation">
<a href="#tab1" role="tab" data-toggle="tab" class="theme-btn @if($i++=='1') active @endif" aria-selected="true">
{{$row->Name}}
</a>
</li>
@endforeach

</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-content-wrapper section-bg padding-top-60px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade show active" id="tab1">
<div class="row">

@foreach($course as $row)
<div class="col-lg-4 column-td-half">
<div class="card-item card-preview">
    <div class="card-image">
        <a href="#" class="card__img"><img src="{{url('/')}}/public/frontend/assets/images/img8.jpg" alt=""></a>
        <div class="card-badge">
            <span class="badge-label">{{$row->Category}}</span>
        </div>
    </div>
    <div class="card-content">
        
        <h3 class="card__title">
            <a href="#">{{$row->ProductName}}</a>
        </h3>
        <p class="card__author">
            <a href="#">{{$row->SubDescription}}</a>
        </p>
       
        <div class="card-action">
            <ul class="card-duration d-flex justify-content-between align-items-center">
                <li>
                    <span class="meta__date">{{$row->SubCategory}}
                    </span>
                </li>
                <li>
                    <span class="meta__date">{{$row->Language}}
                    </span>
                </li>
            </ul>
        </div>
        <div class="card-price-wrap d-flex justify-content-between align-items-center">
            @if($row->DiscountPrice!='')
            <span  style="text-decoration:line-through; margin-right: -70px">Rs {{$row->Price}}</span>
            @endif

             @if($row->DiscountPrice!='')
             <span  style="font-weight: bold; font-size: 25px" class="card__price">Rs.{{$row->DiscountPrice}}</span>
             @else
             <span class="card__price" style="font-weight: bold; font-size: 25px">Rs.{{$row->Price}}</span>
             @endif
            <a href="#" class="text-btn" style="color:red; border:1px solid red; padding:5px; border-radius: 5px; padding-left: 15px; padding-right: 15px">Add to cart</a>
        </div>
    </div>
</div>
</div>
@endforeach

</div>
</div>


</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="btn-box mt-4 text-center">
<a href="#" class="theme-btn">सभी कोर्सेज की जानकारी</a>
</div>
</div>
</div>
</div>
</div>
</section>
 -->

<section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
<div class="container">
<div class="row">

<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-globe count__icon"></span>
<h4 class="count__title counter text-color">10000 </h4>
<p class="count__meta">Total Enrollments</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-users count__icon"></span>
<h4 class="count__title counter text-color-2">750</h4>
<p class="count__meta">Hours/Lectures</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-certificate count__icon"></span>
<h4 class="count__title counter text-color-3">100</h4>
<p class="count__meta">Selected Candidates</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-bullhorn count__icon"></span>
<h4 class="count__title counter">23</h4>
<p class="count__meta">Total Courses</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
START FUNFACT AREA
================================= -->

<div class="section-block"></div>

<!--======================================
START TEAM AREA
======================================-->
<section class="team-area padding-top-120px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">Our Team</h5>
<h2 class="section__title">Team Rajput Tutorials   </h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row margin-top-28px">

@foreach($team as $row)
<div class="col-lg-4 column-td-half">
<div class="team-item" style="border-radius: 5px">
<div class="team-img-box" style="border-radius: 5px">
<img src="{{url('/')}}/public/team/{{$row->Image}}" style="border-radius: 5px">
<ul class="social-profile">
@if($row->Twitter!='')
<li><a href="{{$row->Twitter}}"><i class="fa fa-twitter"></i></a></li>
@endif
@if($row->Facebook!='')
<li><a href="{{$row->Facebook}}"><i class="fa fa-facebook"></i></a></li>
@endif
@if($row->LinkedIn!='')
<li><a href="{{$row->LinkedIn}}"><i class="fa fa-linkedin"></i></a></li>
@endif

@if($row->Instagram!='')
<li><a href="{{$row->Instagram}}"><i class="fa fa-instagram"></i></a></li>
@endif
</ul>
</div>
<div class="team-detail">
<h3 class="team__title"><a href="#">{{$row->Name}}</a></h3>
<p class="team__meta">{{$row->Designation}}</p>
</div>
</div><!-- end team-item -->
</div><!-- end col-lg-4 -->
@endforeach


</div><!-- end row -->
<div class="row">
<div class="col-lg-12">
<div class="btn-box text-center">
<a href="{{route('About')}}" class="theme-btn"> <b> View More  </b></a>
</div><!-- end btn-box -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
END TEAM AREA
======================================-->

<!--================================
START TESTIMONIAL AREA
=================================-->
<section class="testimonial-area section-bg padding-top-120px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">See What Our Lovely Students Said</h5>
<h2 class="section__title">Testimonials</h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
<div class="container-fluid">
<div class="row margin-top-28px">
<div class="col-lg-12">
<div class="testimonial-carousel">


@foreach($testimonial as $row) 
<div class="testimonial-item" style="height: auto;">
<div class="testimonial-header">
<img src="{{url('/')}}/public/testimonial/{{$row->Image}}" alt="small-avatar">
<div class="testimonial__name">
<h3 class="testimonial__name-title">{{$row->Name}}</h3>
<span class="testimonial__name-meta">{{$row->Designation}}</span>

</div>
</div><!-- end testimonial-header -->
<div class="testimonial__desc">
<p class="testimonial__desc-desc" data-toggle="collapse" data-target="#collapseOne1">
{{str_limit($row->Message,300)}}
</p>
</div><!-- end testimonial__desc -->

</div><!-- end testimonial-item -->
@endforeach
</div><!-- end testimonial-wrap -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- container-fluid -->
</section><!-- end testimonial-area -->

<section class="get-start-area text-center padding-top-120px padding-bottom-110px overflow-hidden">
<div id="perticles-js"></div>
<div class="box-icons">
<div class="box-one"></div>
<div class="box-two"></div>
<div class="box-three"></div>
<div class="box-four"></div>
</div><!-- end box-icons -->
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="get-start-content">
<div class="section-heading">
<h5 class="section__meta section__metalight">Rajput Tutorials</h5>
<h2 class="section__title text-white" style="font-size:44px!important;">" अनुशासन  परिश्रम   सफलता  "   </h2>   <h4 class="section__title text-white" style="font-size:24px !important;">छ. ग  लोकसेवा आयोग  एवं अन्य प्रतियोगी परीक्षाओं में  सफलता  पाने के लिए आज ही शुरुवात  करें</h4>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
<div class="btn-box margin-top-20px">
<a href="#" class="theme-btn theme-btn-hover-light"> <b >Register Now</b></a>
</div>
</div><!-- end get-start-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
<div class="box-icons2">
<div class="box-one"></div>
<div class="box-two"></div>
<div class="box-three"></div>
<div class="box-four"></div>
<div class="box-five"></div>
</div><!-- end box-icons2 -->
</section><!-- end get-start-area -->
<!--======================================
END GET-START AREA
======================================-->

<!--======================================
START BENEFIT AREA
======================================-->
<section class="benefit-area padding-bottom-180px overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="benefit-heading padding-top-120px">
<div class="section-heading">
<h5 class="section__meta">Director's Message</h5>
<h2 class="section__title">C.S Rajput</h2>
<h4 class="widget-title">Founder / Managing Director</h4>
<span class="section-divider"></span>
<p class="section__desc">
<iframe width="450" height="315" src="https://www.youtube.com/embed/kR_0I8QXNU4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
</div><!-- end section-heading -->

<div class="btn-box">
<a href="{{route('Contact')}}" class="theme-btn">Contact Us</a>
</div>
</div><!-- end benefit-heading -->
</div><!-- end col-lg-6 -->
<div class="col-lg-6">
<div class="img-box">

<img src="{{url('/')}}/public/frontend/assets/images/RT.png" alt="Rajput Tutorials">
</div>
</div>
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end benefit-area -->
<!--======================================
END BENEFIT AREA
======================================-->

<div class="section-block"></div>

<!--======================================
START REGISTER AREA
======================================-->
<section class="register-area section-padding">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="register-form">
<div class="contact-form-action">
<h3 class="widget-title">Admission Now</h3>
<form method="post" action="{{route('Contact/Store')}}">
    <input type="hidden" name="home" value="home">
    {{csrf_field()}}
<div class="input-box">
<label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" required type="text" name="Name" placeholder="Your Name">
<span class="la la-user input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="email" name="Email" placeholder="Email Address">
<span class="la la-envelope input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="number" required name="Mobile" placeholder="Phone Number">
<span class="la la-phone input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Course<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="text" name="Message" placeholder="Course">
<span class="la la-book input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="btn-box">
<button class="theme-btn" type="submit">Submit Now</button>
</div><!-- end btn-box -->
</form>
</div><!-- end contact-form-action -->
</div>
</div><!-- end col-lg-5 -->
<div class="col-lg-7">
<div class="register-heading">
<div class="section-heading">
<img src="{{url('/')}}/public/frontend/assets/images/mobile.png" style="width: 100%" alt="Rajput Mobile App" >
<br>
<h2 class="section__title">राजपूत ट्यूटोरियल्स  मोबाइल एप आज ही डाउनलोड करें</h2>
<p><a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="{{url('/')}}/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a></p>
</div><!-- end section-heading -->
<div class="btn-box">

</div>
</div><!-- end register-heading -->
</div><!-- end col-lg-7 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
END REGISTER AREA
======================================-->

<div class="section-block"></div>


<section class="blog-area padding-top-120px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta section__metalight">News Feed</h5>
<h2 class="section__title text-white">News & Media Coverage</h2>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
</div><!-- end col-md-12 -->
</div><!-- end row -->
<div class="row margin-top-30px">
<div class="col-lg-12">
<div class="blog-post-carousel owl-dot-and-nav">

@foreach($media as $row)
<div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img">
<img src="{{url('/')}}/public/gallery/{{$row->Image}}" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a>{{$row->Title}}...</a>
<a href="{{url('/')}}/public/gallery/{{$row->PDF}}" style="float: right;" target="_blank"><i class="fa fa-download "></i></a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
<li><a href="#" class="blog-admin-name">{{str_limit($row->Description)}}...</a>
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
@endforeach

</div><!-- end blog-post-carousel -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->

</section><!-- end blog-area -->




@endsection

   <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="z-index: 1000">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Classroom Programs</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
                <h4>   क्लासरूम प्रोग्राम की विशेषताएँ -  </h4>
                <ul>
                <li>● साप्ताहिक क्लास टेस्ट एवं आंसर की प्रदान की जाती है </li>
                <li>● कैंटीन की सुविधा  </li>
                <li>● कम्पलीट स्टडी मैटेरियल </li>
                <li>● मासिक पत्रिका - करंट अफेयर्स</li>
                <li>● लाइब्रेरी की सुविधा </li>
                <li>● योजनाबद्ध समय-सारणी  </li>
                </ul>
                <br />
                
                    <p>समय (Timing) - हमारे क्लासरूम प्रोग्राम्स के अंतर्गत तीन अलग - अलग समय पर क्लासेस लगती हैं, जिसका समय क्रमशः प्रातः 7:00-9:30, 10:30-12:00 एवं सायं 6:00-8:30 तक होती हैं।</p>
                </div><!-- end card-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="z-index: 1000">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Mobile / Tablet Course</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
                                <h4>      ऑनलाइन कोर्सेज की विशेषताएं -</h4>
                                    <ul>
                                <li>● प्रारंभिक परीक्षा हेतु 500 से अधिक घंटों की कक्षाएं उपलब्ध हैं।</li>
                                <li>● प्रारंभिक+मुख्य (Pre +Mains) हेतु 750 से अधिक घंटों की कक्षाएं उपलब्ध हैं।  </li>
                                <li>● सभी अपडेटेड स्टडी मटेरियल सरल भाषा में पीडीएफ फॉर्म में उपलब्ध हैं।</li>
                                <li>● सभी विषयों की वीडियो एवं करंट अफेयर्स की विशेष कक्षाएं उपलब्ध हैं।</li>
                                <li>● मुख्य परीक्षा हेतु उत्तर लेखन शैली का विशेष ध्यान रखा गया है।</li>
                                <li>● प्रश्न-उत्तर सेशन होते हैं। </li>
                                <li>● स्टडी मटेरियल एवं टेस्ट सीरीज़ हिंदी एवं अंग्रेजी दोनों भाषाओं में उपलब्ध हैं। </li>
                                </ul>
                                <br />
                                
                                    <p>राजपूत ट्यूटोरियल्स के एंड्रॉइड मोबाइल ऐप पर प्रीलिम्स का वीडियो कोर्स उपलब्ध है। जिसे आप अपनी सुविधा के अनुसार जब चाहें, जहां से चाहें और जितने बार चाहें देख सकते हैं। साथ ही  Live Doubt Clearing Session के दौरान आप शिक्षकों के साथ आमने सामने इंटरैक्ट भी कर सकते हैं।</p>
                                </div><!-- end card-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="basicModal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="z-index: 1000">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Pendrive & Desktop Course</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
                                <h4>    Comming Soon    </h4>
                                 
                                </div><!-- end card-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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