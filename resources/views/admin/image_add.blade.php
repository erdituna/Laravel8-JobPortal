<html>
<head>
    <title> Image Gallery</title>
    <link href="{{asset('assets')}}/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('assets')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('assets')}}/admin/dist/css/pages/dashboard1.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>
<body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Job : {{$data->title}}</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form role="form" action="{{route('admin_image_store',['jobs_id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        <div class="form-group">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"> Remember me </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add Image
                        </button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive m-t-40">

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title(s)</th>
                        <th>Image</th>
                        <th>Delete</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($images as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>

                            <td>{{ $rs->title }}</td>

                            <td>
                                @if($rs->image)
                                    <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                                @endif
                            </td>


                            <td><a href="{{route('admin_image_delete',['id'=> $rs->id,'jobs_id'=>$data->id])}}"
                                   onclick="return confirm('Record will be Delete! Are you sure ?')">
                                    <i class="fa fa-trash-o"></i></a></td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>


        </div>


</body>

</html>



