@extends('layouts.home2')
@section('title','Application Job ')


@section('content')
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
             data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>User</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-post-company pt-120 pb-120">
        <div class="container">

            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Form Element</h3>
                <form action="{{route('user_application_store',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="mt-10">
                        <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Name & Surname"
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Email"
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="address" value="{{Auth::user()->address}}" placeholder="Address"
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone"
                               class="single-input">
                    </div>



                        <div class="mt-10">
                            <div class="apply-btn2">
                                <button type="submit" class="btn">Submit</button>
                            </div>

                        </div>

                </form>

            </div>
        </div>
    </div>

@endsection
