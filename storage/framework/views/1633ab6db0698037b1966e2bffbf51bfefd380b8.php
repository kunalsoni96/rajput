<?php echo $__env->make("Admin.layouts.Header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
 
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- BEGIN: Header-->
  <?php echo $__env->make("Admin.layouts.TopMenu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php echo $__env->make("Admin.layouts.LeftMenu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <?php echo $__env->yieldContent('MainSection'); ?>
    <!-- END: Content-->
<?php echo $__env->make("Admin.layouts.Theme", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make("Admin.layouts.Footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->


 <?php echo $__env->make("Admin.layouts.Javascript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
 
</html><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/layouts/Master.blade.php ENDPATH**/ ?>