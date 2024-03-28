 <section id="news" class="news main bg-secondary">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">Your Chance to Connect!</h1>
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
                        <a href="#"><img alt="" class="img-fluid animated"
                                src="{{ asset('front/assets/yap-new/img/18.jpg') }}" /></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-md-1">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">_</span>
                        <h2>What is YAP?</h2>
                        <p class="lead">
                            Home for RMC's Digital Artist Promotion Profiles (DAPP) <br />
                            Your direct connection to your favorite artists! <br />
                            The best music you’ve never heard!
                        </p>
                        <a href="#">Create Account ›</a>
                    </div>
                </div>
            </li>
            <li class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 order-1">
                    <div class="block-content">
                        <a href="#"><img alt="" class="img-fluid animated"
                                src="{{ asset('front/assets/yap-new/img/19.jpg') }}" /></a>
                    </div>
                </div>
                <!--end of col-->
                <div class="col-12 col-md-6 col-lg-5 order-2 text-left">
                    <div class="block-content text-left">
                        <span class="mb-2 opc-70">Monthly Feature</span>
                        <h2>
                            Under the Spotlight
                        </h2>
                        <p class="lead">
                            We Highlight Exceptional Emerging Talent. <br />
                            Explore a new artist every month.
                        </p>
                        <a href="{{ route('spotlight') }}">Artist of the Month ›</a>
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
