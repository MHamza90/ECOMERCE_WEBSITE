<!doctype html>
<html>


<!-- Mirrored from www.yourartistportal.com/admin/users/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:27:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content=" " name="description">
    <meta content=" " name="author">
    <meta name="keywords" content="admin, dashboard html template">
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('front/assets/admin/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Title -->
    <title>Register</title>
    <!-- Bootstrap css -->
    <link href="{{ asset('front/assets/admin/assets/assets/css/bootstrap.min.css') }} " rel="stylesheet" />
    <!-- Style css -->
    <link href="{{ asset('front/assets/admin/assets/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/admin/assets/assets/css/custom_style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/admin/assets/assets/css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('front/assets/admin/assets/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/admin/assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/admin/assets/assets/js/all.js') }}"></script>

    {{-- Toastr --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />
    <style>
        .login-page {
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            width: 36%;
            left: 50%;
            border: 1px solid #575962;
            border-radius: 17px;
        }

        .register-btn {
            color: #fff;
            padding: 4px 20px !important;
            text-decoration: none;
            /*border: 1px solid #575962;*/
            background: #ec4c15;
            font-weight: 700;

        }

        .register-btn:hover {
            color: #ec4c15;
            background: white;
            padding: 4px 20px !important;
            text-decoration: none;
            border: 1px solid #575962;
            text-decoration: none;
        }

        .sign-in-btn {
            display: -webkit-inline-box;
            /*text-align:center;*/
        }

        .sign-in-btn a {
            color: #ec4c15;
            text-decoration: none;
            margin-left: 10px;
            font-weight: 700;
        }

        .sign-in-btn a:hover {

            text-decoration: none;
        }

        /* .form-control{
             padding:1px 1px !important;
         } */
        .d-block {
            height: 100px;
        }

        form {
            text-align: center;
        }

        .login-form.text-center.register-form.pt-2.pb-2 h5 {
            font-size: 20px;
            font-weight: 600;
        }

        .svg-inline--fa.fa-w-11 {

            cursor: pointer;
            width: 20px;
            height: 20px;
            border: 1px solid black;
            border-radius: 50%;
            color: black;
        }

        @media (max-width:768px) {
            .login-page {
                transform: translate(-50%, -50%);
                position: absolute;
                top: 50%;
                width: 80%;
                left: 50%;
                border: 1px solid #575962;
                border-radius: 17px;
            }

        }

        .error {
            float: left;
            color: red;
        }
    </style>
</head>

<body class="bg-dark">
    <section class="login-page bg-light-gray ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class=" ">
                        <div class="row align-items-center">



                            <div class="col-md-12 col-sm-12  bg-white p-3" style="border-radius:17px;">
                                <div class="info-holder m-auto">
                                    <div class="cross-icon">
                                        <a href="{{ route('home') }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>
                                    <a class="d-block" href="#"><img
                                            src="{{ asset('front/assets/admin/assets/images/Yap-Logo.svg') }}"
                                            width="150" alt="" class="d-block m-auto"></a>
                                </div>
                                <form id="registerForm" action="{{ route('user-register-process') }}" method="POST"
                                    accept-charset="utf-8">
                                    @csrf
                                    <div class="login-form text-center register-form pt-2 pb-2">
                                        <h5 class="text-center mb-4 "> REGISTER </h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group text-center">
                                                    <!-- <label for="email">Name </label> -->
                                                    <input type="text" class="form-control " name="first_name"
                                                        placeholder="Username" value="" required>
                                                    <p class="error_p"></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="artist_stage_name"
                                                name="artist_stage_name" placeholder="Artist/Stage Name" value=""
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <!-- <label for="email">Email address </label> -->
                                            <input type="email" class="form-control " id="email" name="email"
                                                placeholder="abc@example.com" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="pwd">Password </label> -->
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <!-- <label for="pwd">Confirm Password </label> -->
                                            <input type="password" class="form-control" id="con_password"
                                                name="con_password" placeholder="Confirm Password" value="" required>
                                        </div>

                                        <!-- <p class="mt-1 mb-0 text-center">or</p> -->

                                        <button type="submit" class="btn btn-link login_link_btn px-0 register-btn">
                                            Register <small><i class="fa fa-arrow-right ml-1"></i></small>
                                        </button>

                                    </div>
                                    <div class="sign-in-btn text-center">
                                        <p>Already Registered ?</p><a href="{{ route('login') }}">Login Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script>
        $("#registerForm").validate({
            rules: {
                password: {
                minlength: 5,
                },
                con_password: {
                minlength: 5,
                equalTo: "#password"
                }
            }
        });
    </script>
    <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
</body>


<!-- Mirrored from www.yourartistportal.com/admin/users/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:27:10 GMT -->

</html>
