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
                            <h2>Jobs List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

    </div>
    </div>


@endsection
