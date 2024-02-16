<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baral | @yield('title')</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}" />

    <!-- google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/besit-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    @livewireStyles
</head>

<body>
<!-- preloader -->
<div wire:loading>
    <livewire:components.preloader/>
</div>
<!-- /.preloader -->
<div class="page-wrapper">

    <livewire:partials.head/>

    @yield('content')

    <livewire:partials.footer/>


</div>
<!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <livewire:components.mobile/>
    <!-- /.mobile-nav__wrapper -->


    <!-- /.search-popup -->

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>


    <!-- template scripts -->

    <script src="{{asset('assets/js/theme.js')}}"></script>

    @stack('scripts')

    @livewireScripts

</body>

</html>
