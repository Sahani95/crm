<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{env('APP_NAME')}}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">

    <link rel="icon" href="{{url('public/favicon.png')}}">
    

    <link rel="stylesheet" href="{{url('admin/css_admin/style.css')}}">
    <link rel="stylesheet" href="{{url('admin/css_admin/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" href="{{url('admin/plugins/summernote/summernote-bs4.css')}}" />

    @yield('after-style')
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    @include('admin.partials.header')

    @include('admin.partials.left_sidebar')

    <div class="wrapper">
        @yield('content')
    </div>

</div>
@include('admin.partials.footer_js')
@yield('admin_js')
</body>
</html>
