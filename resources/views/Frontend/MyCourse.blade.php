@extends('Frontend.layouts.Master')

@section('main_section')
<section class="breadcrumb-area" style="background: #0C2754">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">My Course</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="{{route('Index')}}">home</a></li>
                        <li>MyCourse</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->

<section class="course-area padding-top-120px padding-bottom-120px">
    <div class="course-wrapper">
        <div class="container">
            <div class="course-content-wrapper mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content">
                         
                            <div role="tabpanel" class="tab-pane fade show active" id="list-view" aria-labelledby="list-view-tab">
                            @foreach($data as $row)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview">
                                            <div class="card-image">
                                                <a href="#" class="card__img"><img src="{{url('/')}}/public/course/{{$row->Image}}" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <h3 class="card__title">
                                                    <a href="#">{{$row->ProductName}}</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="#">{{$row->SubDescription}}</a>
                                                </p>
                                                
                                                <div class="card-action">
                                                    <ul class="card-duration d-flex align-items-center">
                                                        <li>
                                                        <span class="meta__date">
                                                            {{$row->Type}}
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span class="meta__date">
                                                          Language :  {{$row->Language}}
                                                        </span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end card-action -->
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <span class="card__price">Price : Rs. {{$row->PurchaseAmount}}</span>
                                                    <!-- <a href="#" class="text-btn">Get Enrolled</a> -->
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                </div><!-- end course-block -->
                                @endforeach

                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-8 -->
                   
                </div><!-- end row -->
              <!--   <div class="row">
                    <div class="col-lg-12">
                        <div class="page-navigation-wrap text-center mt-5">
                            <div class="page-navigation-inner d-inline-block">
                                <div class="page-navigation mx-auto">
                                    <a href="#" class="page-go page-prev">
                                        <i class="la la-arrow-left"></i>
                                    </a>
                                    <ul class="page-navigation-nav">
                                        <li><a href="#" class="page-go-link">1</a></li>
                                        <li class="active"><a href="#" class="page-go-link">2</a></li>
                                        <li><a href="#" class="page-go-link">3</a></li>
                                        <li><a href="#" class="page-go-link">4</a></li>
                                        <li><a href="#" class="page-go-link">5</a></li>
                                    </ul>
                                    <a href="#" class="page-go page-next">
                                        <i class="la la-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!-- end card-content-wrapper -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section><!-- end courses-area -->
@endsection