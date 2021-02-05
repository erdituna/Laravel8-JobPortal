@extends('layouts.home2')
@section('title', ' About Us -'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')

    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>UI/UX Designer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">{!!  $setting->aboutus !!}</h3>
            <p class="sample-text">


            </p>
        </div>
    </section>

@endsection
