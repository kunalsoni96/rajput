
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Dashboard </title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/forms/toggle/switchery.min.css">
   
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/timeline/vertical-timeline.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/components.min.css">


    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  
    <!-- END: Page CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <?php echo $__env->yieldContent('css'); ?>
<style type="text/css">
.avatar-upload {
  position: relative;
  max-width: 100%;
  margin-top: 20px;

}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 0px;
  z-index: 1;
  top: -12px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 100%;
  height: 250px;
  position: relative;
  border-radius: 3%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 3%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.avatar-upload2 {
  position: relative;
  max-width: 100%;
  margin-top: 20px;
}
.avatar-upload2 .avatar-edit2 {
  position: absolute;
  right: 0px;
  z-index: 1;
  top: -12px;
}
.avatar-upload2 .avatar-edit2 input {
  display: none;
}
.avatar-upload2 .avatar-edit2 input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload2 .avatar-edit2 input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload2 .avatar-edit2 input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload2 .avatar-preview2 {
  width: 100%;
  height: 250px;
  position: relative;
  border-radius: 3%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload2 .avatar-preview2 > div {
  width: 100%;
  height: 100%;
  border-radius: 3%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

</style>
    <!-- END: Custom CSS--><?php /**PATH C:\xampp\htdocs\rajput_backup\resources\views/Admin/layouts/Header.blade.php ENDPATH**/ ?>