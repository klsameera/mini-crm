@extends('layouts.app')
@section('header')
<div class="header  pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8">
                    <h6 class="h2 text-dark d-inline-block mb-0">
                        {{ __('employees.add_new_employee') }}
                    </h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('employees.index') }}">
                                    {{ __('employees.all_employees') }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('employees.add_new_employee') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="box box-success">
                        <div class="box-body chat">
                            <div class="pl-lg-4">
                                <h6 class="heading-small text-muted mb-4">
                                    {{ __('employees.employee_information') }}
                                </h6>
                                <form action="{{ route('employees.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="first_name">
                                                    {{ __('employees.first_name') }}
                                                </label>
                                                <input type="text" name="first_name" placeholder="First Name"

                                                    class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="last_name">
                                                    {{ __('employees.last_name') }}
                                                </label>
                                                <input type="text" name="last_name" placeholder="Last Name"

                                                    class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">
                                                    {{ __('employees.email') }}
                                                </label>
                                                <input type="email" name="email" placeholder="Email"

                                                    class="form-control form-control-alternative">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="phone">
                                                    {{ __('employees.phone') }}
                                                </label>
                                                <input type="text" name="phone" placeholder="phone"
                                                    class="form-control form-control-alternative">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="inp_image">
                                                    {{ __('employees.company') }}
                                                </label>
                                                <select name="company_id" class="form-control form-control-alternative">
                                                    <option value="">Select Company</option>
                                                    @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('employees.save') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });

</script>
@endpush
