@extends('front.layout.master')
@section('title','Profile')
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
<section id="about" class="about main">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent placerat, urna vitae mattis commodo, est ipsum
                    ultricies est, id convallis quam nisi id metus. Praesent sit
                    amet arcu vel sapien imperdiet consectetur. Proin posuere ligula
                    lectus, sit amet imperdiet nisl rhoncus et. Fusce et mi
                    dignissim, posuere eros in, mollis diam. Phasellus ut sapien at
                    lectus mollis facilisis. Donec id urna neque. Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit. Vestibulum a eleifend
                    lacus. Sed hendrerit orci vel porttitor scelerisque. Etiam in
                    finibus risus. Ut libero nibh, venenatis sit amet nisl id,
                    pulvinar rhoncus velit. Ut sed auctor lacus. Suspendisse
                    potenti. In risus tellus, fringilla vel volutpat id, dapibus
                    volutpat nulla. Nullam scelerisque quam a lobortis semper.
                    Aenean aliquet ultrices risus ac convallis. Pellentesque ante
                    mi, facilisis vitae gravida vel, vehicula id est. Aenean
                    convallis mi non turpis vehicula, ut tristique tellus faucibus.
                    Fusce at rhoncus magna. Phasellus libero tellus, fringilla
                    sodales odio at, dapibus scelerisque felis. Duis nec vestibulum
                    est, eu convallis dui. Quisque dignissim felis molestie est
                    mollis scelerisque. Suspendisse accumsan, ligula eu dictum
                    cursus, massa lectus scelerisque dui, a tincidunt nibh enim ut
                    nibh. Donec suscipit sit amet ante nec faucibus. Donec aliquam
                    facilisis convallis. Proin rhoncus at metus pulvinar placerat.
                    Mauris bibendum accumsan neque, et vestibulum ipsum imperdiet
                    sed. Praesent erat est, vulputate sit amet massa quis, lacinia
                    condimentum dui. Nunc interdum, leo sed malesuada egestas, risus
                    eros vehicula eros, luctus vulputate libero purus in dui.
                    Vestibulum ultrices porttitor nibh, a rutrum ante imperdiet sit
                    amet. Vestibulum ante ipsum primis
                </div>
            </div>
        </div>
    </div>
</section>

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
                <div class="col-md-4">
                    <div class="my-card my-3">
                        <div style="border: 3px solid; min-height: 350px"
                            class="p-3 pt-3 pb-3 text-center rounded bg-dark-blue front-p mb-4 mb-lg-0 btn-primary uppercase with-ico border-2">
                            <img src='{{asset("documents/product/$item->product_image")}}' alt="Audio title" class="img-fluid"
                                style="aspect-ratio: 1/1" />

                            <h3 class="m-3">{{$item->product_name}}</h3>

                            <p class="mb-3">$ {{$item->price}}</p>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <input type="hidden" value="{{ $item->product_name }}" name="name">
                                <input type="hidden" value="{{ $item->price }}" name="price">
                                <input type="hidden" value="{{ $item->product_image }}"  name="image">
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
<section id="about" class="about main" style="background: #1f1b24">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">ADD YOUR COMMENT</h1>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-12">
                <form id="contact-us" method="post" action="comment.php">
                    <input type="hidden" name="artist_id" value=" " />
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required class="form-control mb-3"
                                placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="email" id="email" required class="form-control mb-3"
                                placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="website" id="website" required class="form-control mb-3"
                                placeholder="Website" />
                        </div>
                        <div class="col-md-6">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form-control mb-3" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit"
                                class="d-block m-auto btn btn-primary uppercase with-ico border-2">
                                POST COMMENT
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-12" style="margin-top: 4rem">
                <div class="text-left">
                    <h2 class="mb-5">All Comments</h2>

                    <div class="comment-box mb-3">
                        <p class="lead mb-1">comment text</p>
                        <p class="lead text-right" style="color: #d0343a; font-weight: bold">
                            comment name -
                            <span>comment date</span>
                        </p>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
<!--  -->
<!--  -->

@endsection
@section('extra_script')
@endsection
