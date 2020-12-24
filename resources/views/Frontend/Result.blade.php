@extends('Frontend.layouts.Master')

@section('main_section')
<section class="breadcrumb-area my-courses-bread" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content my-courses-bread-content">
<div class="section-heading">
<h2 class="section__title">Toppers </h2>
</div>
</div><!-- end breadcrumb-content -->
<div class="my-courses-tab">
<div class="section-tab section-tab-2">
</div>
</div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<section class="my-courses-area padding-top-30px padding-bottom-90px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="my-course-content-wrap">
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade active show" id="all-courses">
        <div class="my-course-content-body">
            <div class="lecture-overview-item">
                <div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
                    <div class="my-course-sort-by-content">
                        <div class="question-overview-filter-item">
                            <span class="badge font-size-14 font-weight-semi-bold">Select Year :</span>
                            <div class="sort-ordering user-form-short mt-2">
                                <select class="sort-ordering-select">
                                   
                                    <option value="1">2020</option>
                                    <option value="2">2020</option>
                                  
                                </select>
                            </div>
                        </div><!-- end question-overview-filter-item -->
                    </div><!-- end my-course-sort-by-content -->
                    <div class="my-course-filter-by-content">
                        <div class="question-overview-filter-item">
                            <span class="badge font-size-14 font-weight-semi-bold">Filter By:  </span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="sort-ordering user-form-short">
                                    <select class="sort-ordering-select">
                                        <option value="0" selected="">Categories</option>
                                        <option value="1">UPSC</option>
                                        <option value="2">CGPSC</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- end question-overview-filter-item -->
                    </div><!-- end my-course-filter-by-content -->
                    <div class="my-course-search-content">
                        <div class="question-overview-filter-item">
                            <span class="badge font-size-14 font-weight-semi-bold">Search</span>
                            <div class="contact-form-action mt-2">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="search" placeholder="Search Topper">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end question-overview-filter-item -->
                    </div><!-- end my-course-search-content -->
                </div>
            </div><!-- end lecture-overview-item -->
            <div class="student-courses padding-top-70px">
<div class="row">
<div class="col-lg-12">
<h3 class="widget-title pb-3">राजपूत के होनहार   -  Our Topper's</h3>
<div class="section-block"></div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">
@foreach($result as $row)
<div class="col-lg-4 column-td-half">
<div class="card-item card-preview">
    <div class="card-image">
        <a href="course-details.html" class="card__img">
        	<img src="{{url('/')}}/public/result/{{$row->Image}}" alt=""></a>
       <!--  <div class="card-badge">
            <span class="badge-label">RANK {{$row->Rank}}</span>
        </div> -->
    </div><!-- end card-image -->
    <div class="card-content">
        <p class="card__label">
            <span class="card__label-text">{{$row->TitleandYear}}</span>
            </a>
        </p>
        <h3 class="card__title">
            <a href="course-details.html">{{$row->Name}}</a>
        </h3>
        <p class="card__author">
            <a href="teacher-detail.html">{{$row->Subject}}</a>
        </p>
    </div>
</div>
</div>
@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- start scroll top -->
<div id="scroll-top">
<i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

@endsection