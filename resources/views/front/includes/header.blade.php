<header class="header default">
    <div class="container">
        <div class="left-part">
            <a class="logo scroll" href="index.html">
                <!-- <h2 class="mb-0 uppercase">mousiqua.</h2> -->
                @php
                $header_logo = $setting->header_logo??null @endphp
                <img src='{{ asset("documents/setting/$header_logo") }}' alt="" class="img-fluid main-logo"
                    style="width:50px">
            </a>
        </div>
        <div class="right-part">
            <nav class="main-nav">
                <div class="toggle-mobile-but">
                    <a href="#" class="mobile-but">
                        <div class="lines"></div>
                    </a>
                </div>
                <ul class="main-menu list-inline">
                    <li>
                        <a class="scroll list-inline-item" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="scroll list-inline-item" href="https://www.radiomusiccatalog.com/explore">Music
                            Magazines</a>
                    </li>
                    <!-- <li>
                    <a class="scroll list-inline-item" href="#discography">discography</a>
                </li> -->
                    <!-- <li>
                    <a class="scroll list-inline-item" href="#band">Band</a>
                </li> -->
                    <!-- <li class="dropdown">
                    <a class="scroll list-inline-item" href="#tour">Tours</a>
                </li> -->

                    <li>
                        <a class="scroll list-inline-item" href="{{ route('about') }}">About Yap</a>
                    </li>
                    <li>
                        <a class="scroll list-inline-item" href="{{ route('vault') }}">Vault Promotion</a>
                    </li>
                    <li>
                        <a class="scroll list-inline-item" href="{{ route('activity') }}">Activity</a>
                    </li>

                    <li>
                        <a class="scroll list-inline-item" href="{{ route('spotlight') }}">Spotlight</a>
                    </li>

                    <li>
                        <a class="scroll list-inline-item" href="{{ route('shop') }}">Shop</a>
                    </li>

                    <li>
                        <a class="scroll list-inline-item" href="{{ route('cart.list') }}">Cart</a>
                    </li>
                    @if (auth()->user())
                    <li>
                        <a class="scroll list-inline-item" href="{{ route('product.index') }}">Dashboard</a>
                    </li>
                    @else

                    <li>
                        <a class="scroll list-inline-item" href="{{ route('user-register') }}">Sign up</a>
                    </li>
                    <li>
                        <a class="scroll list-inline-item" href="{{ route('login') }}">Sign in</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

</header>
