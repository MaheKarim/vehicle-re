@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Your Vehicle Request')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Vehicle Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('user/vehicle-request') }}">All Vehicle Requests </a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('user/vehicle-request/create') }}"> Create Request</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Vehicle Service Request<Request></Request></a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col"> Name</th>
                                            <th scope="col"> Phone</th>
                                            <th scope="col">Car Problem</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($emergencys as $vehicle)
                                            <tr>
                                                <td>{{ data_get($vehicle, "user_id") }}</td>
                                                <td>{{ data_get($vehicle, "mobile") }}</td>
                                                <td>{{ data_get($vehicle, "problem") }} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
