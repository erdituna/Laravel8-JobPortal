@extends('layouts.home2')
@section('title', $data->title)
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Jobs Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-7">
                    <!-- job single -->

                    <div class="single-job-items mb-50">
                        <div class="job-items">

                            <div class="company-img company-img-details">
                                <a href=""><img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" style="height: 20px"></a>
                            </div>

                            <div class="job-tittle">
                                <a href="">
                                    <h4>{{$data->title}}</h4>
                                </a>
                                <ul>
                                    <li>{{$data->company}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$data->location}}</li>
                                    <li>${{$data->salaries}}</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- job single End -->
                    <div class="small-section-tittle">
                        <p> {!!  $data->detail !!} </p>
                    </div>



                </div>
                <!-- Right Content -->
                <div class="col-xl-3 col-lg-3">
                    <div class="post-details3  mb-90">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span>12 Aug 2019</span></li>
                            <li>Location : <span>{{$data->location}}</span></li>
                            <li>Vacancy : <span>02</span></li>
                            <li>Job nature : <span>Full time</span></li>
                            <li>Salary :  <span>${{$data->salaries}}</span></li>
                            <li>Application date : <span>12 Sep 2020</span></li>
                        </ul>
                        <form action="{{route('user_application_add',['id'=>$data->id])}}">
                        <div class="apply-btn2">
                            <button type="submit" class="btn">Apply Now</button>

                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>






@endsection
