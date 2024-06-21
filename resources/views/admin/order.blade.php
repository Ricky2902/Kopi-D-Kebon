<style type="text/css">
    table {
        border: 2px solid skyblue;
        text-align: center;
    }

    th {
        background-color: skyblue;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        color: white;
    }

    .table_center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    td {
        color: white;
        padding: 10px;
        border: 1px solid skyblue;
    }
</style>


<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    <!-- Header -->
    @include('admin.header')
    <!-- Close Header -->


    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->


    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="table_center">
                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Nomor Meja</th>
                            <th>Nama Product</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Change Status</th>
                        </tr>

                        @foreach ( $data as $data )
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->no_meja}}</td>
                            <td>{{$data->product->title}}</td>
                            <td>{{$data->product->price}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('done_progress', $data->id)}}">Done</a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>