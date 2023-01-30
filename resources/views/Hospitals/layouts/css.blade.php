<!-- General CSS Files -->

@if(app()->currentLocale() === 'ar' )
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-rtl.css')}}">

    <style>
        body{

            direction:rtl;

        }
    </style>

@else
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

@endif

<link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

<link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">


<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->


@yield('css')
