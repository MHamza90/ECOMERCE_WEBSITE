@extends('front.layout.master')
@section('title','Activity')
@section('extra_style')
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
                                <h1 class="large text-white uppercase mb-0">{{$setting->activity_title??null}}
                                </h1>
                                <h5 class="mb-0 text-white uppercase">
                                {!! $setting->activity_sub_title??null !!}
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



<!--News section-->
<section id="news" class="news main bg-secondary">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">Activity</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
    <!--Container-->
    <div class="container">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="switch-fot">Tuesday<br />8 Aug</h4>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="mb-0 opc-70 uppercase">
                        United States, New Orleans
                    </h6>
                    <span>Record Store Day Summer Camp || Radio Raye </span>
                </div>
                <div class="col-12 col-lg-5 col-md-5 text-md-right">
                    <a class="btn-s uppercase btn btn-primary with-ico border-2"
                        href="https://recordstoreday.com/CustomPage/614" target="blank">
                        <i class="icon-ticket"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <div class="block-content">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="switch-fot">Monday<br />24 Apr</h4>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="mb-0 opc-70 uppercase">
                        United States, Denver Colorado
                    </h6>
                    <span>Indie 102.3 Greet & Meet || Radio Raye </span>
                </div>
                <div class="col-12 col-lg-5 col-md-5 text-md-right">
                    <a class="btn-s uppercase btn btn-primary with-ico border-2"
                        href="https://www.cpr.org/event/indie-102-3s-april-local-303-meetup/" target="blank">
                        <i class="icon-ticket"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <div class="block-content">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="switch-fot">Tuesday<br />8 Aug</h4>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="mb-0 opc-70 uppercase">USA, New Orleans</h6>
                    <span>Record Store Day Summer Camp || Mike Williams </span>
                </div>
                <div class="col-12 col-lg-5 col-md-5 text-md-right">
                    <a class="btn-s uppercase btn btn-primary with-ico border-2"
                        href="https://recordstoreday.com/CustomPage/614" target="blank">
                        <i class="icon-ticket"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <div class="block-content">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="switch-fot">Friday<br />11 Aug</h4>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="mb-0 opc-70 uppercase">
                        United States, New Orleans
                    </h6>
                    <span>Record Store Day Summer Camp || Admin </span>
                </div>
                <div class="col-12 col-lg-5 col-md-5 text-md-right">
                    <a class="btn-s uppercase btn btn-primary with-ico border-2" href="https://recordstoreday.com/Home"
                        target="blank">
                        <i class="icon-ticket"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <div class="block-content">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="switch-fot">Saturday<br />19 Aug</h4>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="mb-0 opc-70 uppercase">USA, Colorado Springs Co</h6>
                    <span>YAP After Dark - Violence in Violet at Buzzed Crow || Admin
                    </span>
                </div>
                <div class="col-12 col-lg-5 col-md-5 text-md-right">
                    <a class="btn-s uppercase btn btn-primary with-ico border-2" href="https://buzzedcrowbistro.com/"
                        target="blank">
                        <i class="icon-ticket"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
        <hr />
    </div>
    <!--End container-->
</section>
<!--End news section-->

@endsection
@section('extra_script')
@endsection
