@extends('layouts.admin')
@section('title','Edit Setting')


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
                    <h4 class="text-themecolor">Edit Setting</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
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
                <div class="col-sm-12 col-xs-12">

                    <form role="form" action="{{route('admin_setting_update')}}" method="post"
                          enctype="multipart/form-data">

                    @csrf



                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-home"></i></span> <span
                                        class="hidden-xs-down">General</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#smtp"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-user"></i></span> <span
                                        class="hidden-xs-down">Smtp Email</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#socialmedia"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-email"></i></span> <span
                                        class="hidden-xs-down">Social Media</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#aboutuspage"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-home"></i></span> <span
                                        class="hidden-xs-down">About Us</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contactpage"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-home"></i></span> <span class="hidden-xs-down">Contact Page</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#refencepage"
                                                    role="tab"><span class="hidden-sm-up"><i
                                            class="ti-home"></i></span> <span
                                        class="hidden-xs-down">References</span></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="general" role="tabpanel">
                                <div class="p-20">

                                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{$data->title}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" value="{{$data->company}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Adress</label>
                                        <input type="text" name="adress" value="{{$data->adress}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{$data->phone}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{$data->email}}"
                                               class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="select2 form-control custom-select" name="status"
                                                style="width: 100%; height:36px;">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>

                                        </select>
                                    </div>


                                </div>
                            </div>

                            <div class="tab-pane p-20" id="smtp" role="tabpanel">

                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="password" name="smtppasword" value="{{$data->smtppasword}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="text" name="smtpport" value="{{$data->smtpport}}"
                                           class="form-control">
                                </div>

                            </div>
                            <div class="tab-pane p-20" id="socialmedia" role="tabpanel">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">

                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}"
                                           class="form-control">
                                </div>

                            </div>
                            <div class="tab-pane p-20" id="aboutuspage" role="tabpanel">


                                <div class="form-group">
                                    <label>About us</label>
                                    <textarea class="form-control" id="aboutus"
                                              name="aboutus">{{$data->aboutus}}</textarea>

                                    <script>
                                        CKEDITOR.replace('aboutus');
                                    </script>


                                </div>

                            </div>
                            <div class="tab-pane p-20" id="contactpage" role="tabpanel">


                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea class="form-control" id="contact"
                                              name="contact">{{$data->contact}}</textarea>


                                    <script>
                                        CKEDITOR.replace('contact');
                                    </script>

                                </div>


                            </div>
                            <div class="tab-pane p-20" id="refencepage" role="tabpanel">


                                <div class="form-group">
                                    <label>References</label>
                                    <textarea class="form-control" id="references"
                                              name="references">{{$data->references}}</textarea>


                                    <script>
                                        CKEDITOR.replace('references');
                                    </script>

                                </div>


                            </div>

                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update Setting
                            </button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </div>

                    </form>
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
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                       class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark"
                                       class="green-dark-theme">8</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark"
                                       class="blue-dark-theme">10</a>
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

        </div>
    </div><!-- ============================================================== -->
     <!-- End Container fluid  -->
    <!-- ============================================================== -->


@endsection



