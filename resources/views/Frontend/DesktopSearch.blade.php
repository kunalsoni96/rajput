@extends('Frontend.layouts.Master')

@section('main_section')
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
<section class="breadcrumb-area my-courses-bread" style="background: #0C2754">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content my-courses-bread-content">
<div class="section-heading">
<h2 class="section__title">Select Course </h2>
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
<div class="course-alert-info">

</div><!-- end course-alert-info -->
<div class="my-course-content-body">
<div class="lecture-overview-item">
<div class="question-overview-filter-wrap my-course-filter-wrap d-flex align-items-center">
<div class="my-course-sort-by-content">
<div class="question-overview-filter-item" style="margin-top: -28px">
<span class="badge font-size-14 font-weight-semi-bold">Filter By</span>
<div class="sort-ordering user-form-short mt-2">
    <select class="sort-ordering-select" id="category_change">
        @foreach($category as $row)
        <option value="{{$row->id}}">{{$row->Name}}</option>
        @endforeach
    </select>
</div>
</div><!-- end question-overview-filter-item -->
</div><!-- end my-course-sort-by-content -->
<div class="my-course-filter-by-content">
<div class="question-overview-filter-item">

<div class="d-flex align-items-center mt-2">
    <div class="sort-ordering user-form-short">
        <select class="sort-ordering-select" id="sub_category_change">
            @foreach($subcategory as $row)
        <option value="{{$row->id}}">{{$row->Name}}</option>
        @endforeach
            
        </select>
    </div>
    <div class="sort-ordering user-form-short">
        <select class="sort-ordering-select" id="subject_change">
            @foreach($subject as $row)
        <option value="{{$row->id}}">{{$row->Name}}</option>
        @endforeach
           
        </select>
    </div>
    <div class="sort-ordering user-form-short" >
        <select class="sort-ordering-select" id="language_change">
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
        </select>
    </div>
    <div class="reset-btn-box">
        <a class="theme-btn" href="{{route('Desktop-Course')}}">Reset</a>
    </div>
</div>
</div><!-- end question-overview-filter-item -->
</div><!-- end my-course-filter-by-content -->
<div class="my-course-search-content" style="margin-top: -25px">
<div class="question-overview-filter-item">
<span class="badge font-size-14 font-weight-semi-bold">Search</span>
<div class="contact-form-action mt-2">
    <form method="get" action="{{route('Desktop-Course/Search')}}">
        <div class="input-box">
            <div class="form-group mb-0">
                <input class="form-control" type="text" name="Search" placeholder="Search courses">
                <button style="position: absolute; right:0%; top:50%; border:none">
                <span class="la la-search search-icon"></span>
                </button>
            </div>
        </div><!-- end input-box -->
    </form>
</div><!-- end contact-form-action -->
</div><!-- end question-overview-filter-item -->
</div><!-- end my-course-search-content -->
</div>
</div><!-- end lecture-overview-item -->
<div class="my-course-container">
<div class="row" id="append_data">

@foreach($data as $row)

<div class="col-lg-4 column-td-half">
<div class="card-item">
<div class="card-image">
    <a href="{{url('/')}}/Course/{{$row->ProductName}}" class="card__img">
    <img src="{{url('/')}}/public/course/{{$row->Image}}" id="img_size">
    <div class="card-badge">
            <span class="badge-label">{{$row->Category}} </span>
        </div>
        <div class="play-button">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve">
                <style type="text/css">
                    .st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}
                    .st1{fill:#FFFFFF;}
                </style>
                
            </svg>
        </div>
    </a>
</div>
<div class="card-content p-4">
    <h3 class="card__title mt-0">
        <a href="{{url('/')}}/Desktop-Course/{{$row->ProductName}}">{{$row->ProductName}}</a>
    </h3>
    <p class="card__author">
        <a >{{ $row->SubDescription }}</a>
    </p>
    <div class="course-complete-bar-2 mt-2">
        <div class="progress-item mb-0">
            <div class="row">
                <div class="col-sm-12">
                    <p style="font-weight: bold;color:#0A5993; font-size: 20px">
                        @if($row->DiscountPrice!='')
                        <span style="color:gray; font-weight: normal; text-decoration: line-through;"> Rs.{{$row->Price}} </span> 

                        @endif

                        @if($row->DiscountPrice!='')
                        <span style="font-size: 25px"> Rs.{{$row->DiscountPrice}}</span>
                        <input type="hidden" name="ProductPrice" value="{{$row->DiscountPrice}}" id="ProductPrice">
                        @else
                        <input type="hidden" name="ProductPrice" value="{{$row->Price}}" id="ProductPrice">
                        <span style="font-size: 25px"> Rs.{{$row->Price}}</span>
                        @endif
                    </p>
                    <p style="color:#0A5993;">{{$row->Subject}}</p>
                </div>
            </div>     
        </div>
    </div>


    <div class="rating-wrap d-flex mt-3">
<?php if(in_array($row->id, $cookie_data)) { ?>
    <a href="{{route('Shopping-Cart')}}" style="width: 100%; text-align: center;" onclick="addtocart('{{$row->Price}}','{{$row->id}}')" class="theme-btn addtocart">View Cart</a>
       
    <?php } else { ?>
 @if($row->DiscountPrice!='')
        <a href="#" style="width: 100%; text-align: center;" id="addtocart" onclick="addtocart('{{$row->DiscountPrice}}','{{$row->id}}')" class="theme-btn addtocart">Add to Cart</a>
    @else
<a href="#" style="width: 100%; text-align: center;" id="addtocart" onclick="addtocart('{{$row->Price}}','{{$row->id}}')" class="theme-btn addtocart">Add to Cart</a>
    @endif
    <?php } ?>
    </div>



</div>


</div>
</div>
@endforeach

</div>
</div>

</div>
</div><!-- end tab-pane -->


</div>
</div>
<form action="{{route('Cart/Store')}}" method="post">
    <!-- <form> -->
    {{csrf_field()}}
    <input type="hidden" name="ProductPriceSubmit" id="ProductPriceSubmit">
    <input type="hidden" name="ProductId" id="ProductId">
    <button id="cartsubmit" style="display: none;"></button>
</form>
</div><!-- end col-lg-12 -->

</div><!-- end row -->
</div><!-- end container -->
</section><!-- end my-courses-area -->

@endsection

@section('js')
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $(document).ready(function(){
        $("#category_change").change(function(){
            var id = $(this).val();
            var appendata = "";
            $.ajax({
                url:"{{route('Category/Change')}}",
                type:"POST",
                data:{id:id,Type:'Desktop-Course'},
                success:function(data){
for (var i = 0; i < data.length; i++) {
appendata +=  '<div class="col-lg-4 column-td-half"><div class="card-item"><div class="card-image"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'" class="card__img"><img src="{{url("/")}}/public/course/'+data[i].Image+'" id="img_size"><div class="card-badge"><span class="badge-label">'+data[i].Category+'</span></div><div class="play-button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve"><style type="text/css">.st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}.st1{fill:#FFFFFF;}</style></svg></div></a></div><div class="card-content p-4"><h3 class="card__title mt-0"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'">'+data[i].ProductName+'</a></h3><p class="card__author"><a >'+data[i].SubDescription+'</a></p><div class="course-complete-bar-2 mt-2"><div class="progress-item mb-0"><div class="row"><div class="col-sm-12"><p style="font-weight: bold;color:#0A5993; font-size: 20px"><span style="color:gray; font-weight: normal; text-decoration: line-through;"> Rs.5000 </span> <span style="font-size: 25px"> Rs.1000</span></p><p style="color:#0A5993;">'+data[i].Subject+'</p></div></div>     </div></div><div class="rating-wrap d-flex mt-3"><a style="width: 100%; text-align: center; " href="#" id="addtocart" class="theme-btn">Add to Cart</a></div></div></div></div>';
                }
    $("#append_data").empty().append(appendata)
            }})})})

            </script>


<script type="text/javascript">   
    $(document).ready(function(){
        $("#sub_category_change").change(function(){

            var id = $(this).val();
            var appendata = "";
            $.ajax({
                url:"{{route('SubCategory/Change')}}",
                type:"POST",
                data:{id:id,Type:'Desktop-Course'},
                success:function(data){
for (var i = 0; i < data.length; i++) {
appendata +=  '<div class="col-lg-4 column-td-half"><div class="card-item"><div class="card-image"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'" class="card__img"><img src="{{url("/")}}/public/course/'+data[i].Image+'" id="img_size"><div class="card-badge"><span class="badge-label">'+data[i].Category+'</span></div><div class="play-button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve"><style type="text/css">.st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}.st1{fill:#FFFFFF;}</style></svg></div></a></div><div class="card-content p-4"><h3 class="card__title mt-0"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'">'+data[i].ProductName+'</a></h3><p class="card__author"><a >'+data[i].SubDescription+'</a></p><div class="course-complete-bar-2 mt-2"><div class="progress-item mb-0"><div class="row"><div class="col-sm-12"><p style="font-weight: bold;color:#0A5993; font-size: 20px"><span style="color:gray; font-weight: normal; text-decoration: line-through;"> Rs.5000 </span> <span style="font-size: 25px"> Rs.1000</span></p><p style="color:#0A5993;">'+data[i].Subject+'</p></div></div>     </div></div><div class="rating-wrap d-flex mt-3"><a style="width: 100%; text-align: center; " href="#" id="addtocart" class="theme-btn">Add to Cart</a></div></div></div></div>';
                }
    $("#append_data").empty().append(appendata)

    console.log(appendata)
            }})})})

</script>

<script type="text/javascript">
   function addtocart(price,id){
        document.getElementById('ProductId').value = id
        document.getElementById('ProductPriceSubmit').value = price
        document.getElementById('cartsubmit').click();
    }
</script>



<script type="text/javascript">   
    $(document).ready(function(){
        $("#language_change").change(function(){
            var id = $(this).val();

            var appendata = "";
            $.ajax({
                url:"{{route('Language/Change')}}",
                type:"POST",
                data:{id:id,Type:'Desktop-Course'},
                success:function(data){
for (var i = 0; i < data.length; i++) {
appendata +=  '<div class="col-lg-4 column-td-half"><div class="card-item"><div class="card-image"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'" class="card__img"><img src="{{url("/")}}/public/course/'+data[i].Image+'" id="img_size"><div class="card-badge"><span class="badge-label">'+data[i].Category+'</span></div><div class="play-button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve"><style type="text/css">.st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}.st1{fill:#FFFFFF;}</style></svg></div></a></div><div class="card-content p-4"><h3 class="card__title mt-0"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'">'+data[i].ProductName+'</a></h3><p class="card__author"><a >'+data[i].SubDescription+'</a></p><div class="course-complete-bar-2 mt-2"><div class="progress-item mb-0"><div class="row"><div class="col-sm-12"><p style="font-weight: bold;color:#0A5993; font-size: 20px"><span style="color:gray; font-weight: normal; text-decoration: line-through;"> Rs.5000 </span> <span style="font-size: 25px"> Rs.1000</span></p><p style="color:#0A5993;">'+data[i].Subject+'</p></div></div>     </div></div><div class="rating-wrap d-flex mt-3"><a style="width: 100%; text-align: center; " href="#" id="addtocart" class="theme-btn">Add to Cart</a></div></div></div></div>';
                }
    $("#append_data").empty().append(appendata)
    console.log(appendata)
            }})})})

</script>

<script type="text/javascript">
   function addtocart(price,id){
        document.getElementById('ProductId').value = id
        document.getElementById('ProductPriceSubmit').value = price
        document.getElementById('cartsubmit').click();
    }
</script>


<script type="text/javascript">   
    $(document).ready(function(){
        $("#subject_change").change(function(){
            var id = $(this).val();
            var appendata = "";
            $.ajax({
                url:"{{route('Subject/Change')}}",
                type:"POST",
                data:{id:id,Type:'Desktop-Course'},
                success:function(data){
for (var i = 0; i < data.length; i++) {
appendata +=  '<div class="col-lg-4 column-td-half"><div class="card-item"><div class="card-image"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'" class="card__img"><img src="{{url("/")}}/public/course/'+data[i].Image+'" id="img_size"><div class="card-badge"><span class="badge-label">'+data[i].Category+'</span></div><div class="play-button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" style=" enable-background:new -307.4 338.8 91.8 91.8;" xml:space="preserve"><style type="text/css">.st0{opacity:0.6;fill:#000000;border-radius: 100px;enable-background:new;}.st1{fill:#FFFFFF;}</style></svg></div></a></div><div class="card-content p-4"><h3 class="card__title mt-0"><a href="{{url("/")}}/Desktop-Course/'+data[i].ProductName+'">'+data[i].ProductName+'</a></h3><p class="card__author"><a >'+data[i].SubDescription+'</a></p><div class="course-complete-bar-2 mt-2"><div class="progress-item mb-0"><div class="row"><div class="col-sm-12"><p style="font-weight: bold;color:#0A5993; font-size: 20px"><span style="color:gray; font-weight: normal; text-decoration: line-through;"> Rs.5000 </span> <span style="font-size: 25px"> Rs.1000</span></p><p style="color:#0A5993;">'+data[i].Subject+'</p></div></div>     </div></div><div class="rating-wrap d-flex mt-3"><a style="width: 100%; text-align: center; " href="#" id="addtocart" class="theme-btn">Add to Cart</a></div></div></div></div>';
                }
    $("#append_data").empty().append(appendata)
            }})})})

</script>

<script type="text/javascript">
   function addtocart(price,id){
        document.getElementById('ProductId').value = id
        document.getElementById('ProductPriceSubmit').value = price
        document.getElementById('cartsubmit').click();
    }
</script>

@endsection