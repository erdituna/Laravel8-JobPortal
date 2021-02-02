@extends('layouts.home2')
@section('title', ' Contact -'.$setting->title)
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
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-6">

            <h3> {!!  $setting->contact !!} </h3>

            </div>

            <div class="col-md-6">
                <h3>İletişim Formu :</h3>
                @include('home.message')
                <form class="form-contact contact_form" action="{{route('sendmessage')}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" placeholder="Name & Surname">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control valid" name="phone" id="phone" type="text" placeholder="Enter your Phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>


            </div>

        </div>
    </div>




@endsection
