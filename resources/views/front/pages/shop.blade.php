@extends('front.layout.master')
@section('title',"Shop")
 @section('extra_style')
<style>
    .slick-dots li button:before,
    .slick-dots li.slick-active button:before {
        color: #fff;
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


<section id="about" class="about main" style="background: #1f1b24">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row">
            @if(count($products)>0)

            <div class="col-12 col-md-12 col-lg-12">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">SHOP</h1>
                    </div>
                </div>
            </div>
            @foreach($products as $item)
            <div class="col-md-3">
                <div class="my-card my-3">
                    <div style="border: 3px solid; min-height: 350px"
                        class="p-3 pt-3 pb-3 text-center rounded bg-dark-blue front-p mb-4 mb-lg-0 btn-primary uppercase with-ico border-2">
                        <img src='{{asset("documents/product/$item->product_image")}}' alt="Audio title"
                            class="img-fluid" style="aspect-ratio: 1/1" />

                        <h3 class="m-3">{{$item->product_name}}</h3>

                        <p class="mb-3">$ {{$item->price}}</p>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <input type="hidden" value="{{ $item->product_name }}" name="name">
                            <input type="hidden" value="{{ $item->price }}" name="price">
                            <input type="hidden" value="{{ $item->product_image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-primary with-ico uppercase">add to cart</button>
                        </form>

                        <!-- <a class="btn btn-primary with-ico uppercase" href="#">
                                buy
                            </a> -->
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>


<!--  -->

@endsection
@section('extra_script')
@endsection
