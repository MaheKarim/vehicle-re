@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','All Emergency Request')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Emergency Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('user/vehicle-request') }}">All Emergency Request</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('admin/employee/create') }}"> Create Emergency Request</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Emergency Request</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Problem</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($emergencys as $vehicle)
                                            <tr>
                                                <td>{{ data_get($vehicle, "user_id") }}</td>
                                                <td>{{ data_get($vehicle, "mobile") }}</td>
                                                <td>{{ data_get($vehicle, "problem") }}</td>
                                                <td>{{ data_get($vehicle, "address") }}</td>
                                                <td>{{ data_get($vehicle, "area.name") }}</td>
                                                <td>{{ trans('boolean.status.'.$vehicle->status) }}</td>
                                                <td>{{ data_get($vehicle, "created_at") }}</td>
                                                <td>
                                                    <a href="{{ route('emergency.edit', $vehicle->id) }}" type="button" class="btn btn-outline-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {{ $emergencys->links() }}
                                    </div>
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
