<style type="text/css">
    .header-action-list li{
        border-right: none;
    }
</style>
<header class="header-menu-area">
<div class="header-top">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">

</div><!-- end col-lg-6 -->
<div class="col-lg-6">
<div class="header-widget d-flex align-items-center justify-content-end">

<div class="header-right-info">
<div class="shop-cart">
<ul  >
 
<li>
    <p class="shop-cart-btn d-flex align-items-center">
        <i class="la la-shopping-cart"></i>
        <span class="product-count ml-1">{{$cart_count}}</span>
    </p>
    <ul class="cart-dropdown-menu">
    @php 
    $beforeprice = (int)0; 
    $discountprice = (int)0;
    @endphp
    @foreach($cart as $row)
        <li>
            <a href="#" class="cart-link">
                <img src="{{url('/')}}/pubilc/course/{{$row->Image}}" alt="product">
            </a>
            <p class="cart-info">
                <a >
                    {{$row->ProductName}}
                </a>
                <span class="cart__author">{{$row->Type}}</span>
                <span class="cart__price">
                       Rs. {{$row->DiscountPrice}} <span class="before-price">Rs. {{$row->Price}}</span>
                       @php 
                       $beforeprice += (int)$row->Price;
                       $discountprice += (int)$row->DiscountPrice;
                       @endphp
                </span>
            </p>
        </li>
    @endforeach
       @if($cart!='[]')
        <li>
            <p class="cart-total">Total: Rs. {{$discountprice}}<span class="before-price">Rs. {{$beforeprice}}</span></p>
        </li>
        <li>
            <a class="theme-btn w-100 text-center" href="{{route('Shopping-Cart')}}">View Cart</a>
        </li>
        @endif
    </ul>
</li>



</ul>
</div><!-- end shop-cart -->
</div><!-- end header-right-info -->
<div class="header-right-info">
<ul class="header-action-list">
<li><a href="#"><span class="la la-phone mr-2"></span>+91 7089040001</a> </li>
@if(isset(Auth::user()->id))

<li>
   <div class="shop-cart">
<ul  >
 
<li>
    <p class="shop-cart-btn d-flex align-items-center" style="font-size: 15px">
        <i class="fa fa-user"></i> 
        <span style="margin-left: 10px"> Profile</span>
    </p>
    <ul class="cart-dropdown-menu">
   
        <li style="display: block;"><a href="{{route('My-Course')}}" >My Course</a></li>
        <li style="display: block;" onclick="logout()"><a href="#">Logout</a></li>
        <form action="{{route('logout')}}" method="post">
            <button type="submit" style="display: none;" id="logout"></button>
        </form>
    </ul>
</li>



</ul>
</div><!-- end shop-cart -->
</li>

@else 
<li><a href="{{url('auth/google')}}">Login</a></li>

<li><a href="{{url('auth/google')}}">Register</a></li>
@endif
</ul>
</div><!-- end header-right-info -->
</div><!-- end header-widget -->
</div><!-- end col-lg-6 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end header-top -->
<div class="header-menu-content">
<div class="container-fluid">
<div class="main-menu-content">
<div class="row align-items-center">
<div class="col-lg-2">
<div class="logo-box">
<a href="{{route('Index')}}" class="logo"><img src="{{url('/')}}/public/frontend/assets/images/logo.png" alt="Rajput Tutorials"></a>
<div class="menu-toggler">
<i class="la la-bars"></i>
<i class="la la-times"></i>
</div>
</div>
</div><!-- end col-lg-2 -->
<div class="col-lg-10">
<div class="menu-wrapper">

<nav class="main-menu">
<ul>
<li>
    <a href="{{route('Index')}}">Home</a>
</li>

<li>
    <a href="#">About</a>
    <ul class="dropdown-menu-item">
        
        <li><a href="{{route('About')}}">About Rajput</a></li>
		<li><a href="{{route('About-CGPSC')}}">About CGPSC</a></li>
    </ul>
</li>
<li>
    <a href="#">Courses</a>
    <ul class="dropdown-menu-item" style="width: 270px">
        <li><a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank">Mobile Course</a></li>
        <li><a href="{{route('Desktop-Course')}}">Desktop Course</a> <!-- <span class="new-page-badge">comming soon</span></li> -->
		<li><a href="{{route('Pendrive-Course')}}">Pendrive Course</a> <!-- <span class="new-page-badge">comming soon</span></li> -->
    </ul>
</li>
<li>
    <a href="#">Student Corner</a>
    <ul class="dropdown-menu-item">
        @foreach($subject_student_corner as $row)
        <li><a href="{{url('StudentCorner')}}/{{$row->Name}}">{{$row->Name}}</a></li>
        @endforeach
        <li><a href="{{url('/')}}/Videos/DemoVideos">Demo Videos </a></li>
    </ul>
</li>

<li>
    <a href="#">Gallery</a>
    <ul class="dropdown-menu-item">
        <li><a href="{{route('Images')}}">Images </a></li>
        <li><a href="{{route('News-&-Media')}}">News & Media</a></li>
        <li><a href="{{url('Videos/Videos')}}">Video</a></li>
        
    </ul>
</li>

<!-- <li><a href="{{route('Career')}}">Career</a></li> -->
<li><a href="{{route('Result')}}">Toppers</a></li>
<li><a href="{{route('Contact')}}">Contact</a></li>
</ul><!-- end ul -->
</nav><!-- end main-menu -->
<div class="logo-right-button">
<a href="{{route('Admission')}}" class="theme-btn">Admission Now </a>
</div><!-- end logo-right-button -->
</div><!-- end menu-wrapper -->
</div><!-- end col-lg-10 -->
</div><!-- end row -->
</div>
</div><!-- end container-fluid -->
</div><!-- end header-menu-content -->
</header>
<script type="text/javascript">
    function logout(){
        $("#logout").click();
    }
</script>