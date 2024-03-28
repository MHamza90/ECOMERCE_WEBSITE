@extends('front.layout.master')
@section('title','Vault')
@section('extra_style')
<style>
    @font-face {
        font-family: "NexaRustSans";
        src: url("fonts/NexaRustSans-Trial-Black2.ttf");
    }

    .leads {
        text-align: center;
        font-size: 23px;
        color: red;
        font-weight: 800;
        margin-top: -112px;
        font-family: "NexaRustSans";
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
                                <h1 class="large text-white uppercase mb-0">{{$setting->vault_title??null}}
                                </h1>


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
                        <h1 class="uppercase">Vault Promotion Strategy</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
    <!--Container-->
    <div class="container">
        <ul class="news-list">
            <li class="row align-items-center justify-content-around">

                <div class="col-12 col-md-6 order-md-2">
                    <div class="block-content">
                        <a href="#"><img alt="" class="img-fluid animated" src="yap-new/img/rmc-1.png" /></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-md-1">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">Our tag “The Vault” is a symbol of our trademark policy and
                            practices.</span>
                        <h2>Radio Music Catalog <br>The Vault</h2>
                        <p class="lead">
                            For most Indie recording artists, streaming platforms pit them against the price
                            point of major artists who can afford to sell on the cheap. For the typical Indie
                            artist, trying to capture the mass market dilutes the value of their work to the
                            point where it’s not profitable. Indie artists need a better price point to make
                            things work for them, but can they expect to market their wares for as much or more
                            than Drake or Taylor Swift? Maybe? All artists need a base of loyal fans that are
                            eager and able to show their support. For today’s Indie recording artist, being
                            exclusive may be the best way to capture this kind of following.
                        </p>

                        <!-- <a href="#">Create Account ›</a> -->
                    </div>
                </div>

            </li>

            <li class="row align-items-center justify-content-around">
                <div class="col-12">
                    <h4 class="text-center mb-5" style="font-style:italic">

                        "We suggest artists don’t release their product to the mass market to build demand; but instead,
                        identify and connect to a supportive fan base, then protect the value and build strong demand
                        for the product before releasing it."

                    </h4>
                </div>
            </li>


            <li class="row align-items-center justify-content-around">

                <div class="col-12 col-md-6 order-1">
                    <div class="block-content">
                        <a href="#"><img alt="" class="img-fluid animated" src="yap-new/img/19.jpg" /></a>
                    </div>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-6 col-lg-5 order-2 text-left">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">_</span>
                        <h2>
                            Protect and Build <br> Product Value
                        </h2>
                        <p class="lead">
                            The path to a profitable product is to protect its value while creating strong
                            demand for it. RMC employs technology and skillful production techniques to help
                            artists achieve both. Songs broadcast within the RMC Vault process become functional
                            “virtual” NFTs. NFTs are a new type of digital asset; Non-Fungible Tokens (NFTs) are
                            unique pieces of digital non-duplicatable content that hold sellable value.
                        </p>
                        <!-- <a href="#">Artist of the Month ›</a> -->
                    </div>
                </div>
                <!--end of col-->
            </li>
            <li class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 order-md-2">
                    <div class="block-content">
                        <a href="#"><img alt="" class="img-fluid animated" src="yap-new/img/18.jpg" /></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-md-1">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">_</span>
                        <h2>
                            Employ Trademark <br> Production Technique
                        </h2>
                        <p class="lead">
                            Using a method not as sexy as encryption but far more practical, we’ve adopted a
                            groundbreaking music program format that builds and protects the value of the
                            products we promote. More than a clever production technique, the two minute rule is
                            the signature policy of RMC publications. Our publisher/producers capture a special
                            section of an artists composition and combine it with distinctive production
                            techniques to create a unique piece of digital promotional content; a “virtual” NFT;
                            our Teaser Tracks, the best 120 seconds of an artist’s song, are used to generate
                            global interest and sales while the artist secures their complete original
                            composition in a “safe space” until they register with our search engine to provide
                            the public with details for distribution.
                        </p>
                        <!-- <a href="#">Create Account ›</a> -->
                    </div>
                </div>
            </li>
            <li class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 order-1">
                    <div class="block-content">
                        <a href="#"><img alt="" class="img-fluid animated" src="yap-new/img/vnft-1.png" /></a>
                    </div>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-6 col-lg-5 order-2 text-left">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">_</span>
                        <h2>
                            Self Promoting NFTs
                        </h2>
                        <p class="lead">
                            NFTs offer a tremendous new opportunity to pump up profits for music products.
                            They’ve been very profitable for collectables and/or products already in high
                            demand. Fortunately for Indie artists as well as our publisher/producers, songs
                            broadcast in an RMC playlist have the ability to perform as NFTs, only better! With
                            our process, Indie artists need not just hope their products become collectables to
                            realize its best value; as a featured element of our landmark FanFund+ platform, an
                            artists work performs as a “virtual” self promoting NFT that stimulates demand and
                            builds value with every broadcast.
                        </p>
                        <!-- <a href="#">Artist of the Month ›</a> -->
                    </div>
                </div>
                <!--end of col-->
            </li>


        </ul>
        <div class="block-content text-center">
            <a class="btn btn-primary with-ico uppercase mt-5" href="#">
                Create Account</a>
        </div>
    </div>
    <!--End container-->
</section>
<!--End news section-->

@endsection
@section('extra_script')
@endsection
