@extends('Frontend.layouts.Master')

@section('main_section')
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
<style type="text/css">
    #img_size{
        height: 300px;
    }
    @media(max-width: 768px){
        #img_size{
        height: auto;
    }   
    }
</style>
<section class="breadcrumb-area" style="background: #0C2754">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">News & Media</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="{{route('Index')}}">home</a></li>
                       
                        <li>News & Media</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START GALLERY AREA
================================= -->
<section class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">explore now</h5>
                    <h2 class="section__title">News & Media </h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
       
        <div class="row">
            
@foreach($data as $row)
<div class="col-sm-4">
    <div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img"><img src="{{url('/')}}/public/gallery/{{$row->Image}}" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a >{{$row->Title}}...</a>
<a href="{{url('/')}}/public/studentcorner/{{$row->PDF}}" style="float: right;" target="_blank"><i class="fa fa-download"></i></a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
<li><a href="#" class="blog-admin-name">{{str_limit($row->Description)}}...</a></li>
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
</div>

@endforeach
                
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end gallery-area -->
<!-- ================================
       START GALLERY AREA
================================= -->
@endsection