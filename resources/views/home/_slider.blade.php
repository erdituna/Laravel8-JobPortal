<!-- slider Area Start-->

    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>Find the most exciting startup jobs</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->

                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="{{route('getjobs')}}" method="post" class="search-box">
                            @csrf

                            <div class="input-form">
                                @livewire('search')
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">ANKARA</option>
                                        <option value="">ISTANBUL</option>
                                        <option value="">Izmir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <button type="submit" style="width:160px"><a>ARA</a></button>
                            </div>
                        </form>


                        @livewireScripts

                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- slider Area End-->
