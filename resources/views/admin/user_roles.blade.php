<link href="{{asset('assets')}}/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="{{asset('assets')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
<!-- Dashboard 1 Page CSS -->
<link href="{{asset('assets')}}/admin/dist/css/pages/dashboard1.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Role</h3>
                @include('home.message')

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-xs-12">

            <table id="myTable" class="table table-bordered table-striped">

                <tr>
                    <th>ID</th><td>{{ $data->id }}</td>
                </tr>
                <tr>
                    <th>Name</th><td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th><td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        <a href="{{route('admin_user_role_delete',['userid'=> $data->id,'roleid'=>$row->id])}}"
                                           onclick="return confirm('Delete! Are you sure ?')">
                                            <i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Add Role</th>
                    <td>
                        <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <select name="roleid">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}"> {{$rs->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add role</button>
                            </form>
                    </td>
                </tr>



            </table>


    </div>
</div>

