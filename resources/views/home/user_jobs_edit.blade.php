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
                            <h2>Job EDIT</h2>
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
                <div class="col-xl-9 col-lg-9 col-md-10">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form role="form" action="{{route('user_jobs_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">

                                                <label>Category</label>
                                                <br>
                                                <select class="select2 form-control custom-select" name="category_id"
                                                        style="width: 100%; height:80%;">


                                                    @foreach ($datalist as $rs)

                                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                    @endforeach


                                                </select>
                                                <br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="location" value="{{$data->location}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>salaries</label>
                                                <input type="number" name="salaries" value="{{$data->salaries}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea class="form-control" id="summary-ckeditor"
                                                          name="detail">{{$data->detail}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('summary-ckeditor');
                                                </script>


                                            </div>
                                            <div class="form-group">
                                                <label>slug</label>
                                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" value="{{$data->image}}" class="form-control">

                                                @if($data->image)
                                                    <img src="{{ Storage::url($data->image)}}" height="100"alt="">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>status</label>
                                                <select class="select2 form-control custom-select" name="status"
                                                        style="width: 100%; height:36px;">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <br>
                                                <div class="checkbox checkbox-success">
                                                    <br>
                                                    <input id="checkbox1" type="checkbox">

                                                    <label for="checkbox1"> Remember me </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Updated Jobs
                                            </button>
                                            <button type="submit" class="btn btn-inverse waves-effect waves-light">
                                                Cancel
                                            </button>
                                        </form>
                                    </div>
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
