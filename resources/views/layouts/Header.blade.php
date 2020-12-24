<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Home </title>
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/simple-line-icons.css">
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/slick.css">
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/slick-theme.css">
<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/owl.carousel.min.css">
<link href="{{url('/')}}/public/frontend/css/style.css" rel="stylesheet">
<style type="text/css">
	 .tox-notifications{
    display: none;
  }

  .dropdown-menu1{
  	left: 222px;
  	margin-top:-3px;
  }
  body.vertical-layout[data-color=bg-chartbg] .content-wrapper-before, body.vertical-layout[data-color=bg-chartbg] .navbar-container{
  	background-color:black !important;
  }
</style>

@yield('css')
</head>