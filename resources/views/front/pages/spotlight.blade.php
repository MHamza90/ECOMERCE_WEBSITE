@extends('front.layout.master')
@section('title', 'Spotlight')
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
                    <img src="{{ asset('front/assets/images/123.jpg') }}" alt="" />
                </div>
                <!--Container-->
                <div class="container hero-content">
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <!--Inner hero-->
                            <div class="inner-hero">

                                <figure data-tilt style="display:flex;align-items:center;justify-content:center;">
                                    <img data-tilt src="{{ asset('front/assets/images/yap-logo.png') }}"
                                        style="width:120px; height:100%; text-align:center;">
                                </figure>
                                <!-- <div class="back-rect"></div> -->

                                <h2 class="my-heading mb-5 text-white uppercase">
                                {{$setting->spotlight_title??null}}
                                </h2>

                                <!-- <div class="front-rect"></div> -->

                                <form action="https://www.yourartistportal.com/result.php" mathod="post" class="mt-3">

                                    <input type="text" name="search" value="" id="search" class="form-control"
                                        placeholder="Artist/Song Search">
                                    <!--<input type="submit" name="send" value="search" class="btn btn-primary uppercase with-ico border-2 mt-3">-->

                                    <div id="display"></div>
                                </form>
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

<!-- **************** FEATURED_BLOG ***************** -->


<div class="blog-featured section-padding">
    <div class="container">
        <div class="row">
            @if(count($artists)>0)
               @foreach($artists as $item)
            <div data-aos="fade-right" class="col-md-6 col-lg-4 col-sm-12 mt-2">
                <article class="post">
                            <div class="feature-post">
                                <a href="{{ route('single.blog',$item->id) }}" style="text-decoration:none;"><img
                                        src='{{ asset("documents/profile/$item->profile") }}' class="img-responsive"
                                        alt="EP 3 PIECE NO GREASE"></a>
                            </div>
                            <div class="blog_style" style="background: #d66d6d;box-shadow: 0px 0px 5px #838383;">
                                <div class="header-post">
                                    <h4 class="title-post"><a
                                            style="font-size:16px;color: #fff;margin: 0;padding: 0;font-weight:600"
                                            href="{{ route('single.blog',$item->id) }}">G4REIGN</a></h4>
                                    <p class="time-post" style="font-size:14px;color:#fff;">03 Feb 22</p>
                                </div>
                                <div class="content-post" style="font-size:14px;color:#fff;">

                                    <p class="" style=" margin-bottom: 0.0001pt;"> line-h...</p>
                                    <div class=" readmore">
                                        <a href="{{ route('single.blog',$item->id) }}"
                                            style="border-bottom: 2px solid #ffffff;text-decoration:none;color: #ffffff;">Read
                                            more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                @endif


        </div>
    </div>
</div>







<!--/ FEATURED_BLOG -->


@endsection
@section('extra_script')
@endsection
