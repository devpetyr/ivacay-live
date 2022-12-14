<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <meta name="title" content="Volt Bootstrap 5 Dashboard - Sign in page"> -->
<meta name="title" content="Ivacay Dashboard - Sign in page">
<!--<meta name="author" content="Themesberg">-->
<!--<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">-->
<!--<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />-->
<link rel="canonical" href="">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin/assets/img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('admin/assets/img/favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('admin/assets/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

@include('admin.layouts.css')
</head>

<body>
@include('admin.layouts.header')
@yield('content')
@include('admin.layouts.footer')
@include('admin.layouts.js')
</body>
</html>
