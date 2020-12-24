@include('Admin.layouts.Header')
 <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/app-assets/css/plugins/charts/chartist.min.css">
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  @include('Admin.layouts.TopMenu')


    <!-- BEGIN: Main Menu-->
   @include('Admin.layouts.LeftMenu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
       
        <div class="content-body"><!-- chartist bar charts section start -->



<!-- chartist pie charts section start -->
<section id="chartist-pie-charts">
    <!-- Gradient Donut Chart -->
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-danger">Todays Sale</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                       <h1 ><b><a href="{{route('Admin/Sales')}}" class="text-danger">{{$today_sale}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-success">Total Sale</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                         <h1 class="text-danger"><b><a href="{{route('Admin/Sales')}}" class="text-success">{{$all_sale}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-primary">Pending Delivery</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Sales')}}" class="text-primary">{{$pending}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-danger">Cancelled</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Sales')}}" class="text-danger">{{$cancelled}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-primary">Total Delivered Income Amount</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Order/Delivered')}}" class="text-primary">Rs. {{$delivered_income}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-info">Total Pending Income Amount</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Sales')}}" class="text-info">Rs. {{$pending_income}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-info">Delivered</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Sales')}}" class="text-info">{{$delivered}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
    <!-- Gradient icon Donut Chart -->
      
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Customer')}}" class="text-danger">Total User</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                 
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                            
                        <h1><b><a href="{{route('Admin/Customer')}}" class="text-danger">{{$customer}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Customer/Active')}}" class="text-success">Active User</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                           
                        <h1 ><b><a href="{{route('Admin/Customer/Active')}}" class="text-success">{{$active_customer}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><a href="{{route('Admin/Sales')}}" class="text-primary">Total Admission Fee Amount</a></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                   
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">                       
                        <h1 class="text-danger"><b><a href="{{route('Admin/Order/Delivered')}}" class="text-primary">Rs. {{$admission_fee}}</a></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

</section>
<!-- // chartist pie charts section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->
@include('Admin.layouts.Theme')

   
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com/" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
        </ul>
      </div>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('/')}}/public/assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('/')}}/public/assets/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('/')}}/public/assets/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/bar/vertical-bar.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/bar/stacked-bar.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/line/area.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/line/line.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/pie/pie.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/public/assets/app-assets/js/scripts/charts/chartist/pie/donut.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/chartist-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 15:19:16 GMT -->
</html>