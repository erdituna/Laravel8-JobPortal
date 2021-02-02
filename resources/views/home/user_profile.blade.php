@extends('layouts.home2')
@section('title','user profil')
@section('content')


    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
             data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>USER PROFILE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <div class="ion">

                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>MY ACCOUNT</h4>
                               @include('home.usermenu')
                            </div>

                            <!-- select-Categories End -->
                        </div>


                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                   @include('profile.show')
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->


                        </div>


                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>

@endsection
