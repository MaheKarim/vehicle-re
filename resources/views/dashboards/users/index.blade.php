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
        <h3 style="align-content: center">All Service Center List</h3> <hr>
        <div class="container-fluid">
            @foreach($centers as $center)
                <div class="card text-center">
                    <div class="card-header">
                        {{ $center->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Start Time: {{ $center->start_time }} - End Time: {{ $center->end_time }}</h5>
                        <p class="card-text"><b> Address: </b>{{ $center->area->name }}, {{ $center->address }}</p>
                        <a href="#" class="btn btn-primary">Call: 0{{ data_get($center, "phone") }} / 0{{ data_get($center, "phone_2") }}</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ data_get($center, "mail") }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
