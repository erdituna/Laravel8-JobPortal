@extends('layouts.home2')
@section('title', $search . " Jobs List")

@section('content')
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Jobs List</h2>
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
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                        <div class="ion"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="20px" height="12px">
                                                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                                      d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                            </svg>
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
                                        <h4>Job Category</h4>
                                    </div>
                                    <!-- Select job items start -->
                                    <div class="select-job-items2">
                                        <select name="select">
                                            <option value="">All Category</option>
                                            <option value="">Category 1</option>
                                            <option value="">Category 2</option>
                                            <option value="">Category 3</option>
                                            <option value="">Category 4</option>
                                        </select>
                                    </div>
                                    <!--  Select job items End-->
                                    <!-- select-Categories start -->
                                    <div class="select-Categories pt-80 pb-50">
                                        <div class="small-section-tittle2">
                                            <h4>Job Type</h4>
                                        </div>
                                        <label class="container">Full Time
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Part Time
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Remote
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Freelance
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- select-Categories End -->
                                </div>
                                <!-- single two -->
                                <div class="single-listing">
                                    <div class="small-section-tittle2">
                                        <h4>Job Location</h4>
                                    </div>
                                    <!-- Select job items start -->
                                    <div class="select-job-items2">
                                        <select name="select">
                                            <option value="">Anywhere</option>
                                            <option value="">Category 1</option>
                                            <option value="">Category 2</option>
                                            <option value="">Category 3</option>
                                            <option value="">Category 4</option>
                                        </select>
                                    </div>
                                    <!--  Select job items End-->
                                    <!-- select-Categories start -->
                                    <div class="select-Categories pt-80 pb-50">
                                        <div class="small-section-tittle2">
                                            <h4>Experience</h4>
                                        </div>
                                        <label class="container">1-2 Years
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">2-3 Years
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">3-6 Years
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">6-more..
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- select-Categories End -->
                                </div>
                                <!-- single three -->
                                <div class="single-listing">
                                    <!-- select-Categories start -->
                                    <div class="select-Categories pb-50">
                                        <div class="small-section-tittle2">
                                            <h4>Posted Within</h4>
                                        </div>
                                        <label class="container">Any
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Today
                                            <input type="checkbox" checked="checked active">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Last 2 days
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Last 3 days
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Last 5 days
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Last 10 days
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- select-Categories End -->
                                </div>
                                <div class="single-listing">
                                    <!-- Range Slider Start -->
                                    <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                        <div class="small-section-tittle2">
                                            <h4>Filter Jobs</h4>
                                        </div>
                                        <div class="widgets_inner">
                                            <div class="range_item">
                                                <!-- <div id="slider-range"></div> -->
                                                <input type="text" class="js-range-slider" value="" />
                                                <div class="d-flex align-items-center">
                                                    <div class="price_text">
                                                        <p>Price :</p>
                                                    </div>
                                                    <div class="price_value d-flex justify-content-center">
                                                        <input type="text" class="js-input-from" id="amount" readonly />
                                                        <span>to</span>
                                                        <input type="text" class="js-input-to" id="amount" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                    <!-- Range Slider End -->
                                </div>
                            </div>
                            <!-- Job Category Listing End -->
                        </div>
                        <!-- Right content -->
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <!-- Featured_job_start -->
                            <section class="featured-job-area">
                                <div class="container">
                                    <!-- Count of Job list Start -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="count-job mb-35">
                                                <span>39, 782 Jobs found</span>
                                                <!-- Select job items start -->
                                                <div class="select-job-items">
                                                    <span>Sort by</span>
                                                    <select name="select">
                                                        <option value="">None</option>
                                                        <option value="">job list</option>
                                                        <option value="">job list</option>
                                                        <option value="">job list</option>
                                                    </select>
                                                </div>
                                                <!--  Select job items End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Count of Job list End -->
                                    <!-- single-job-content -->
                                    @foreach($datalist as $rs)
                                    <div class="single-job-items mb-90">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href=""><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 22px"></a>
                                            </div>
                                            <div class="job-tittle job-tittle2">

                                                    <h4>{{$rs->title}}</h4>

                                                <ul>
                                                    <li>{{$rs->company}}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{$rs->location}}</li>
                                                    <li>${{$rs->salaries}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link items-link2 f-right">
                                            <a href="{{route('jobs',['id'=>$rs->id,'slug'=>$rs->slug])}}">Apply</a>
                                            <span></span>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </section>
                            <!-- Featured_job_end -->
                        </div>
                    </div>
                </div>
            </div>




@endsection
