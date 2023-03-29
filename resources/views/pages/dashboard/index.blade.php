@extends('layouts.app')
@section('title', "Home | Mini CRM ")
@section('header')
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="col align-items-center py-4">
                <h6 class="h2 text-dark d-inline-block mb-0">Dashboard</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-block ">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection
@section('content')
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Companies</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $company_count }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape text-white rounded-circle shadow" style="background: #4b6cb7;">
                            <i class="ni ni-chart-bar-32"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a class="text-success mr-2" href="#"><i class="fas fa-arrow-circle-right"></i>
                        More info</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Employees</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $employee_count }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape text-white rounded-circle shadow" style="background: #4b6cb7;">
                            <i class="ni ni-bulb-61"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a class="text-success mr-2" href="#"><i class="fas fa-arrow-circle-right"></i> More
                        info</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
