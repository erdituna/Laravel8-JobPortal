<div class="container">

    <div class="row align-items-center">


        <div class="col-lg-2 col-md-1">
            <!-- Logo -->
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo/logo.png" alt=""></a>
            </div>
        </div>
        <div class="col-lg-10 col-md-11">
            <div class="menu-wrapper">
                <!-- Main-menu -->
                <div class="main-menu">
                    <nav class="d-none d-lg-block">
                        <ul id="navigation">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('user_jobs')}}">Post A Job</a></li>
                            <li><a href="{{route('aboutus')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('references')}}">References</a></li>
                            <li><a href="{{route('myprofile')}}">Extra Page</a>
                                <ul class="submenu">
                                    <li><a href="{{route('myprofile')}}">MyAccount</a></li>

                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Header-btn -->
                <div class="header-btn d-none f-right d-lg-block">
                    @auth()
                    <a href="{{'myaccount'}}" class="btn head-btn2">{{Auth::user()->name}}</i></a>
                    @endauth()
                    @guest()

                    <a href="/login" class="btn head-btn2">Login</a><a href="/register" class="btn head-btn2">Join</a>
                        @endguest


                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
        </div>


    </div>

</div>
