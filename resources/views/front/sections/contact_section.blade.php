 <section id="contact" class="contact main bg-secondary">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="block-content gap-one-bottom-md text-center">
                    <div class="block-title">
                        <h1 class="uppercase">stay in touch</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <ul class="feature-list feature-list-sm text-center row">
                    <li class="col-md-6 col-lg-4">
                        <div class="card text-center">
                            <!-- <div class="card-body">
                                <h2 class="uppercase">Contact</h2>
                                <p class="mb-0">
                                    <em class="uppercase h5 opc-70">Radio Music Catalog <br />
                                        Pueblo Colorado</em>
                                    T+(815)299-0244<br />
                                    radiomusiccatalog@gmail.com
                                </p>
                            </div> -->
                        </div>
                    </li>

                    <li class="col-md-6 col-lg-4">
                        <div class="card text-center">
                            <div class="card-body">
                                {!! QrCode::size(100)->generate('https://www.yourartistportal.com/'); !!}
                                <h2 class="uppercase">{{$setting->contact??null}}</h2>
                                <p class="mb-0">
                                    <em class="uppercase h5 opc-70">{!! $setting->contact_description??null!!}</em>
                                    {{$setting->phone??null}}<br />
                                    {{$setting->email??null}}
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-6 col-lg-4">
                        <div class="card text-center">
                            <!-- <div class="card-body">
                                <h2 class="uppercase">info</h2>
                                <p class="mb-0">
                                    <em class="uppercase h5 opc-70">Youssef Ait</em>
                                    T+(513)352-3209<br />
                                    info@mousiqua.net
                                </p>
                            </div> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <ul class="block-social list-inline text-center mt-4">
                    <li class="list-inline-item">
                        <a href="#"> <i class="socicon-facebook"></i> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="socicon-instagram"></i> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="socicon-twitter"></i> </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <a href="#"><i class="socicon-youtube"></i> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="socicon-apple"></i> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="socicon-amazon"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!--End container-->
</section>
