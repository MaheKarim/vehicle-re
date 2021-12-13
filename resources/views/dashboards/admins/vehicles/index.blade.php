@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Vehicle Request')

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
                        <li class="breadcrumb-item"><a href="{{ url('admin/vehicle/all') }}">All Vehicle Requests </a></li>
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
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Customer PHN</th>
                                            <th scope="col">Car Info</th>
                                            <th scope="col">Service Type</th>
                                            <th scope="col">Booking Date</th>
                                            <th scope="col">Pickup Address</th>
                                            <th scope="col">Start Hour</th>
                                            <th scope="col">End Hour</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Note</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($vehicles as $vehicle)
                                            <tr>
                                                <td>{{ data_get($vehicle, "customer_name") }}</td>
                                                <td>{{ data_get($vehicle, "customer_phn") }}</td>
                                                <td>{{ data_get($vehicle, "car_name") }} -{{ data_get($vehicle, "car_model") }} [{{ data_get($vehicle, "car_color") }}]</td>
                                                <td>{{ trans('service.service_type.'.data_get($vehicle, "service_type")) }}</td>
                                                <td>{{ data_get($vehicle, "date") }}</td>
                                                <td>{{ data_get($vehicle, "car_pickup_address") }}</td>
                                                <td>{{ data_get($vehicle, "start_time") }}</td>
                                                <td>{{ data_get($vehicle, "end_time") }}</td>
                                                <td>{{ trans('boolean.status.'.data_get($vehicle, "status")) }}</td>
                                                <td>{{ data_get($vehicle, "note") }}</td>
                                                <td>{{ data_get($vehicle, "created_at") }}</td>
                                                <td>
                                                    <a href="{{ route('vehicle.edit', $vehicle->id) }}" type="button" class="btn btn-outline-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {{ $vehicles->links() }}
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
