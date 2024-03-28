<section id="about" class="about overlay main">
    <div class="background-img">
        <img src="{{ asset('front/assets/yap-new/img/25.jpg') }}" alt="" />
    </div>
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row vertical-align">
            <div class="col-lg-5 col-md-12">
                <div class="front-p">
                    <h1 class="uppercase text-white">
                        Search engine powered by <br />Radio Music Catalog
                    </h1>
                    <p class="w-93">
                        Your Artist Portal is here to serve a community of recording artists supported by RMC’s
                        “Audio Music Magazines”.
                        Build that special connection with our listeners and your fans. If you have music
                        broadcast
                        in a Radio Music Catalog register today!
                    </p>

                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-4 anim-btn">
                        <a href="{{ route('user-register') }}">

                            <div
                                class="block-content front-p pt-3 pb-3 text-center rounded bg-red mb-4 mb-lg-0 btn btn-primary uppercase with-ico border-2">
                                <h3 class="uppercase mb-0 font-weight-600">
                                    Sign Up
                                </h3>
                                <span class="p mb-0">Create a new<br />
                                    Account
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 anim-btn">
                        <a href="{{ route('login') }}">

                            <div
                                class="block-content pt-3 pb-3 text-center rounded bg-dark-blue front-p mb-4 mb-lg-0 btn btn-primary uppercase with-ico border-2">
                                <h3 class="uppercase mb-0 font-weight-600">Login</h3>
                                <span class="p mb-0">Login to your <br />Account
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="block-content front-p">
                            <!--<a class="btn btn-primary uppercase with-ico border-2" href="#gallery"><i-->
                            <!--        class="icon-ticket"></i>See Photos</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
