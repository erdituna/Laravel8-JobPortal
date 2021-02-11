@extends('layouts.home2')
@section('title','user profil')

@section('headerjs')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@endsection

@section('content')

    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
             data-background="{{asset('assets')}}/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Post A JOB</h2>
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
                                <div class="ion"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                        <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                              d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                </div>
                                <h4>User</h4>
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
                <div class="col-xl-9 col-lg-9 col-md-11">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row" >
                                <div class="btn btn-block btn-lg btn-info" ><span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span></div>
                                @include('home.message')
                                <div class="table-responsive m-t-50">
                                    <table id="myTable" class="table table-bordered table-striped">

                                        @foreach ($data as $rs)

                                            <tr>
                                                <th>experience</th>
                                                <td>{{ $rs->experience }}</td>
                                            </tr>
                                            <tr>
                                                <th>firm</th>
                                                <td>{{ $rs->firm }}</td>
                                            </tr>
                                            <tr>
                                                <th>position</th>
                                                <td>{{ $rs->position }}</td>
                                            </tr>
                                            <tr>
                                                <th>career</th>
                                                <td>{!!$rs->career  !!}  </td>
                                            </tr>

                                            <tr>
                                                <th>language</th>
                                                <td>{{ $rs->language }}</td>
                                            </tr>

                                            <tr>
                                                <th>Skills</th>
                                                <td>{{ $rs->skill }}</td>
                                            </tr>


                                        @endforeach


                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        <!-- single-job-content -->





                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>

@endsection
