<!DOCTYPE html>
<html>
<!-- Mirrored from www.yourartistportal.com/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:27:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content=" " name="description" />
    <meta content=" " name="author" />
    <meta name="keywords" content="admin, dashboard html template" />
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('front/assets/admin/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Title -->
    <title>Login</title>
    <!-- Bootstrap css -->
    <link href="{{ asset('front/assets/admin/assets/assets/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front/assets/admin/assets/assets/css/loginform-style.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front/assets/admin/assets/assets/css/loginform-style-theme.css') }}" />
    <!-- Style css -->
    <!-- <link href="https://www.yourartistportal.com/admin/assets/assets/css/style.css" rel="stylesheet">   -->
    <link href="{{ asset('front/assets/admin/assets/assets/css/all.css') }}" rel="stylesheet" />
    <script src="{{ asset('front/assets/admin/assets/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/admin/assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/admin/assets/assets/js/all.js') }}"></script>

    {{-- Toastr --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <style>
        .form-content {
            background-color: #ec4c15 !important;
        }

        .sign-up-btn.text-center {
            display: -webkit-inline-box;
            border: 1px solid white;
            padding: 10px 10px;
            border-radius: 10px;
        }

        .sign-up-btn.text-center a {
            margin-left: 10px;
            color: white;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
        }

        .sign-up-btn.text-center a:hover {
            text-decoration: none;
        }

        .sign-up-btn.text-center p {
            margin: 0;
        }


    </style>
</head>

<body class="bg-light-gray">
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <a href="{{ route('home') }}"><img
                            src="{{ asset('front/assets/admin/assets/images/Yap-Logo.svg') }} " width="150"
                            alt="" /></a>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            <a href="javascript:void(0);">
                                <h2 style="font-size: 23px">YAP</h2>
                            </a>
                        </div>

                        <form id="loginForm" action="{{ route('loginAdminProcess') }}" method="POST" accept-charset="utf-8">
                            @csrf
                            <input type="email" class="form-control" name="email" placeholder="Email" value="" required/>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />

                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn">
                                    Login
                                </button>
                            </div>
                            <div class="sign-up-btn text-center">
                                <p>New user ?</p>
                                <a href="{{ route('user-register') }}">Signup Now</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script>
        $("#loginForm").validate();
    </script>
    <script type="text/javascript">
        var type = "{{ Session::get('type') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;

            }
    </script>

</body>

<!-- Mirrored from www.yourartistportal.com/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:27:14 GMT -->

</html>
