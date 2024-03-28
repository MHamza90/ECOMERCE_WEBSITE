<head>
    <!-- Metas -->
    <meta charset="utf-8" />

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <!-- END: Vendor CSS-->
    <!-- Css -->
    <link rel="icon" href="{{ asset('front/assets/admin/assets/images/favicon.png') }}" type="image/x-icon">


    <link href="{{ asset('front/assets/yap-new/unpkg.com/aos%402.3.1/dist/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/yap-new/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{ asset('front/assets/yap-new/css/base.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('front/assets/yap-new/css/main.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('front/assets/yap-new/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css') }}" />

    <link href="{{ asset('front/assets/yap-new/css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('front/assets/yap-new/css/magnific-popup.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <link href="{{ asset('front/assets/yap-new/css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,400i,600,700,800" rel="stylesheet" />
    <title>Your Artist Portal - @yield('title')</title>

    <style>
        div#display {
            display: none;
            margin-top: 1rem;
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid #fff;
            color: #fff;
            text-align: start;
            padding: 1rem 0;
        }

        div#display ul li a {
            margin: auto;
            width: 95%;
            color: #fff;
            padding: 1rem;
            display: block;
            border-bottom: 1px solid #fff;
        }

        div#display ul li a:hover {
            background: rgba(255, 255, 255, .4);
        }
    </style>






</head>
