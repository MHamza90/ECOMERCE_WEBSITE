<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.yourartistportal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:26:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('front.includes.head')

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Preloader inner -->
        <div class="loader-inner">
            <svg width="220" height="320" viewbox="0 0 100 100" class="loading-spinner" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <circle class="spinner" cx="50" cy="50" r="21" fill="#13181d" stroke-width="5" />
            </svg>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    <!--Wrapper-->
    @yield('extra_style')
    <div class="wrapper" id="butter">

        @yield('content')


        @include('front.includes.footer')
        <a class="block-top scroll" href="#wrapper">
            <i class="icon-angle-up"></i></a>
    </div>
    <!-- End wrapper-->
    @include('front.includes.foot')

</body>


<!-- Mirrored from www.yourartistportal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 23:26:43 GMT -->

</html>
