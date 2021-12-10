@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary ">
                        <div class="card-header">Employee</div>
                        <div class="card-body">
                            <h6 class="card-title">Total Employee</h6>
                            <h2 class="card-text">{{ $employees }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-secondary " >
                        <div class="card-header">Services Center</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Services Center</h5>
                            <h2 class="card-text">{{ $services }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-success" >
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <h2 class="card-text">{{ $users }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-dark bg-info ">
                        <div class="card-header">Vehicle Request</div>
                        <div class="card-body">
                            <h5 class="card-title">Total Vehicle Request</h5>
                            <h2 class="card-text">{{ $vehicles }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
