@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Vehicle ')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vehicle Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Vehicle Request Create</li>
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
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Vehicle Service <Request></Request></a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="{{ route('vehicle.store') }}" id="AdminInfoForm">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName" value="{{ Auth::user()->name }}" name="customer_name">

                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="customer_phn">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 col-form-label">Service Type</label>
                                            <div class="col-sm-10">
                                                <select name="service_type" id="service_type" class="form-control">
                                                    @foreach(trans('service.service_type') as $key => $item)
                                                        <option value="{{$key}}"> {{ $item }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Car Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="car_name">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Car Model</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="car_model">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Car Color</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="car_color">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Car Pickup Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="car_pickup_address">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Problem</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="car_problem">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Date (for schedule service)</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Booking Hour Start</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="start_time">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Booking Hour Start</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="end_time">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Note</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="note">
                                                <span class="text-danger error-text car_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
