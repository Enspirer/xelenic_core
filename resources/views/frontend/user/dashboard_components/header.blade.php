
<!DOCTYPE html>
<!--
Template Name: dashgrin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{env('APP_NAME')}} - Cloud Platform for APIs and Web Website</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="_token" content="{{csrf_token()}}" />

    <!-- Toggles CSS -->
    <link href="{{url('/')}}/FrontDashboard/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/FrontDashboard/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/FrontDashboard/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<style>
    /* Center the loader */
    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;



    }




    #myDiv {
        display: none;
        text-align: center;
    }
</style>

<body onload="myFunction()" style="margin:0;">

<div id="loader">
    <img src="{{url('/')}}/images/preloader.gif">
</div>

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav" style="display:none;position: relative;" id="myDiv">
