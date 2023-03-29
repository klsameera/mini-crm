@extends('layouts.app')
@section('header')
<div class="header  pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8">
                    <h6 class="h2 text-dark d-inline-block mb-0">
                        {{ __('companies.add_new_company') }}
                    </h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('companies.index') }}">
                                    {{ __('companies.all_companies') }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('companies.add_new_company') }}
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
                                    {{ __('companies.company_information') }}
                                </h6>
                                <form action="{{ route('companies.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="name">
                                                    {{ __('companies.name') }}
                                                </label>
                                                <input type="text" name="name" placeholder="Name"
                                                    class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">
                                                    {{ __('companies.email') }}
                                                </label>
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control form-control-alternative">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="website">
                                                    {{ __('companies.website') }}
                                                </label>
                                                <input type="text" name="website" placeholder="Website"
                                                    class="form-control form-control-alternative">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="inp_image">
                                                    {{ __('companies.logo') }}
                                                </label>
                                                <input type="file" class="form-control form-control-alternative dropify"
                                                    name="logos" id="inp_image"
                                                    accept="image/jpg, image/jpeg, image/png" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('companies.save') }}
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
