<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="{{asset('guider/css/all.css')}}" rel="stylesheet">
<link href="{{asset('guider/css/dashboard-style.css')}}" rel="stylesheet">
<link href="{{asset('guider/css/custom.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/choices.min.css')}}">
<link type="text/css" href="{{asset('admin/css/custom.css')}}" rel="stylesheet">




<!-- ================================== -->
<!-- Toaster CSS-->
<link href="{{asset('build/toastr.css')}}" rel="stylesheet" type="text/css" />
<style>
    #toast-container *{
        font-size:100% !important;
    }
</style>

@stack('css')
