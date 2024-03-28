@extends('front.layout.master')
@section('title','About')
@section('extra_style')
<style>
    @font-face {
        font-family: "NexaRustSans";
        src: url("fonts/NexaRustSans-Trial-Black2.ttf");
    }

    .leads {
        text-align: center;
        font-size: 27px;
        color: red;
        font-weight: 800;
        font-family: "NexaRustSans";
        padding: 15px;
    }
</style>
@endsection
@section('content')
<div class="block-search-form">
    <div class="block-content">
        <div class="container">
            <!--end of row-->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form method="get">
                        <div class="card bg-red">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="icon-search"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-border0"
                                        placeholder="Type a keywords..." type="search" />
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary uppercase border-3">
                                        Search now
                                    </button>
                                </div>
                                <!--end of col-->
                            </div>
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
    </div>
</div>


<!--Hero section-->
<section class="hero">
    <!--Main slider-->
    <div class="main-slider slider flexslider">
        <ul class="slides">

            <li>
                <div class="background-img overlay zoom">
                    <img src="{{ asset('front/assets/yap-new/img/2.jpg') }}" alt="" />
                </div>
                <!--Container-->
                <div class="container hero-content">
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <!--Inner hero-->
                            <div class="inner-hero">
                                <h1 class="large text-white uppercase mb-0">{{$setting->about_us_title??null}}</h1>
                                <h5 class="mb-0 text-white uppercase">
                                {!! $setting->about_us_sub_title??null !!}
                                </h5>

                                <form action="https://www.yourartistportal.com/result.php" mathod="post" class="mt-3">

                                    <input type="text" name="search" value="" id="search" class="form-control"
                                        placeholder="Artist/Song Search">
                                    <!--<input type="submit" name="send" value="search" class="btn btn-primary uppercase with-ico border-2 mt-3">-->

                                    <div id="display"></div>
                                </form>

                                <!-- <a class="video-play-but popup-youtube"
                                            href="https://www.youtube.com/watch?v=Gc2en3nHxA4">
                                        </a> -->
                            </div>
                        </div>
                        <!--End row-->
                    </div>
                    <!--End container-->
                </div>
                <!--End inner hero-->
            </li>
        </ul>
    </div>
    <!--End main slider-->

    <!--Header-->
    @include('front.includes.header')
    <!--End header-->
</section>
<!--End hero section-->

<!--About section-->
@include('front.sections.about_section')
<!--End about section-->

<!--Gallery section-->

<!--End gallery section-->

<!--News section-->
@include('front.sections.news_section')
<!--End news section-->

@endsection
@section('extra_script')
@endsection
