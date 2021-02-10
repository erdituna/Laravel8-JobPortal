
<!-- Our Services Start -->
@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp



<div class="our-services section-pad-t30">
    <div class="container">



        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED TOURS Packages</span>
                    <h2>Browse Top Categories </h2>
                </div>
            </div>
        </div>


            <div class="row d-flex justify-contnet-center">
                @foreach($parentCategories as $rs)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">

                            <h5><a href="{{route('categoryjobs',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a></h5>
                            <li></li>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>






    </div>
</div>
