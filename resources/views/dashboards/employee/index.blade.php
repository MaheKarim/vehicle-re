@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-white bg-primary ">
                        <div class="card-header">Vehicle Request</div>
                        <div class="card-body">
                            <h6 class="card-title">Total Vehicle Servicing Request</h6>
                            <h2 class="card-text">{{ $vehicles }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-info">
                        <div class="card-header">Emergency Request</div>
                        <div class="card-body">
                            <h6 class="card-title">Total Emergency Request</h6>
                            <h2 class="card-text">{{ $emergencys }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
