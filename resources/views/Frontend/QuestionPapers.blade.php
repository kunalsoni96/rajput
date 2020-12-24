@extends('Frontend.layouts.Master')

@section('main_section')
<!-- ================================
START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content">
<div class="section-heading">
<h2 class="section__title">Current Affairs</h2>
</div>
<ul class="breadcrumb__list">
<li class="active__list-item"><a href="{{route('Index')}}">home</a></li>
<li>Current Affairs</li>
</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
END BREADCRUMB AREA
================================= -->


<section class="dashboard-area">

<div >
<div class="container-fluid">


<div class="row mt-5">
<div class="col-lg-12">
<div class="card-box-shared">
<div class="card-box-shared-title">
<h3 class="widget-title">Current Affairs</h3>
</div>
<div class="card-box-shared-body">
<div class="statement-table purchase-table table-responsive mb-5">
<table class="table">
<thead>
<tr>
    <th scope="col">Sno.</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Date</th>
    <th scope="col">Status</th>
</tr>
</thead>
<tbody>
@foreach($)
    <tr>
        <th scope="row">
            <div class="statement-info">
                <ul class="list-items">
                    <li>1</li>
                </ul>
            </div>
        </th>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>
                        <a href="course-details.html" class="d-inline-block">
                            <img src="{{url('/')}}/public/frontend/assets/images/small-img.jpg" alt="">
                        </a>
                        <a href="course-details.html" class="d-inline-block primary-color">
                            MERN Stack Master Course
                        </a>
                    </li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>CGVYAM</li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>July 12, 2019</li>
                </ul>
            </div>
        </td>
         <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li><span class="badge bg-success text-white p-1">Download</span></li>
                </ul>
            </div>
        </td>
    </tr>
@endforeach
</tbody>
</table>
</div>


</div>
</div>
</div><!-- end col-lg-12 -->
</div><!-- end row -->

</div><!-- end container-fluid -->
@endsection