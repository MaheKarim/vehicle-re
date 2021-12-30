@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Emergency Request')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Emergency Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Emergency Request Create</li>
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
                                    <form class="form-horizontal" method="POST" action="{{ route('emergency.store') }}" id="AdminInfoForm">
                                        @csrf
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <input type="text" class="form-control" id="inputName" value="{{ Auth::user()->name }}" name="user_id">--}}

{{--                                                <span class="text-danger error-text name_error"></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="mobile">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Area</label>
                                            <div class="col-sm-10">
                                                <select id="area_id" name="area_id" class="form-control">
                                                    @foreach($areas as $area)
                                                        <option value="{{ $area->id }}"> {{ $area->name}}  </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

{{--                                        <div class="form-group row">--}}
{{--                                            <label for="status" class="col-sm-2 col-form-label">Service Type</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <select name="service_type" id="service_type" class="form-control">--}}
{{--                                                    @foreach(trans('boolean.status') as $key => $item)--}}
{{--                                                        <option value="{{$key}}"> {{ $item }} </option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Problem</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="problem">
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
