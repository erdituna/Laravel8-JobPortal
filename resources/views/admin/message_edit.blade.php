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
                <h3 class="card-title">Message Detail</h3>
                @include('home.message')

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-xs-12">
        <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
              enctype="multipart/form-data">

            @csrf
            <table id="myTable" class="table table-bordered table-striped">

                <tr>
                    <th>ID</th>
                    <td>{{ $data->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $data->subject }}</td>

                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $data->message }}</td>
                </tr>
                <tr>
                    <th>Admin Note</th>
                    <td>
                                    <textarea class="form-control"
                                              name="note">{{ $data->note }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                    <td>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update Message
                        </button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </td>
                    </th>


                </tr>


            </table>


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

<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>


