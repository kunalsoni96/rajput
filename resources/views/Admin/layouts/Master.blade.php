@include("Admin.layouts.Header")
  </head>
 
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- BEGIN: Header-->
  @include("Admin.layouts.TopMenu")
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include("Admin.layouts.LeftMenu")
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('MainSection')
    <!-- END: Content-->
@include("Admin.layouts.Theme")

  @include("Admin.layouts.Footer")
    <!-- END: Footer-->


 @include("Admin.layouts.Javascript")

  </body>
 
</html>