@extends('layouts.admin')
@section('title','Edit Faq')


@section('javascript')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@endsection
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Jobs</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Edit Jobs</li>
                        </ol>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Jobs List</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" name="question" value="{{$data->question}}" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" id="summary-ckeditor"
                                      name="answer">{{$data->answer}}</textarea>
                            <script>
                                CKEDITOR.replace('summary-ckeditor');
                            </script>


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
                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"> Remember me </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update Jobs
                        </button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>


            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                   class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                   class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                   class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Varun Dhavan <small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Genelia Deshmukh <small
                                            class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Ritesh Deshmukh <small
                                            class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Arijit Sinh <small
                                            class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Govinda Star <small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                                                  class="img-circle"> <span>John Abraham<small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Hritik Roshan<small
                                            class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Pwandeep rajan <small
                                            class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>


@endsection



