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
<h2 class="section__title">Study Material</h2>
</div>
<ul class="breadcrumb__list">
<li class="active__list-item"><a href="{{route('Index')}}">home</a></li>
<li>Study Material</li>
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
<h3 class="widget-title">Study Material</h3>
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
@foreach($data as $row)
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
                            <img src="{{url('/')}}/public/studentcorner/{{$row->Image}}" alt="">
                        </a>
                        <a href="{{url('/')}}/public/studentcorner/{{$row->PDF}}" target="_blank" class="d-inline-block primary-color">
                           {{$row->Title}}
                        </a>
                    </li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>{{str_limit($row->Description,20)}}...</li>
                </ul>
            </div>
        </td>
        <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>{{$row->Category}}</li>
                </ul>
            </div>
        </td>
         <td>
            <div class="statement-info">
                <ul class="list-items">
                    <li>
                        <a href="{{url('/')}}/public/studentcorner/{{$row->PDF}}" target="_blank">
                        <span class="badge bg-success text-white p-1">Download</span>
                        </a>
                    </li>
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