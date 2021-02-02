@extends('layouts.home2')
@section('title', 'Frequently Asked Question ')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

@endsection

@section('content')
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Frequently Asked Question</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <div id="accordion">

                @foreach($datalist as $rs)

                        <h3>{{$rs->question}}</h3>
                    <div>
                        <p>{!! $rs->answer !!}   </p>
                    </div>
                @endforeach


            </div>
            </div>
            <div class="col-xl-12">
            </div>
        </div>
    </div>
</div>




@endsection
