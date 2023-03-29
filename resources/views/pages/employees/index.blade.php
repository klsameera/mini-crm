@extends('layouts.app')
@section('title', 'User | Dashboard')
@section('header')
<div class="header  pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8">
                    <h6 class="h2 text-dark d-inline-block mb-0">
                        {{ __('employees.all_employees') }}
                    </h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('employees.all_employees') }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{ route('employees.create') }}" class="btn btn-sm btn-neutral">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> {{ __('employees.add_new') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card border-0 shadow">
    <div class="table-responsive py-4">
        <table class="table" id="employees" class="dataTables">
            <thead class="thead-light">
                <th>#</th>
                <th>
                    {{ __('employees.first_name') }}
                </th>
                <th>
                    {{ __('employees.last_name') }}
                </th>
                <th>
                    {{ __('employees.company') }}
                </th>
                <th>
                    {{ __('employees.email') }}
                </th>
                <th>
                    {{ __('employees.phone') }}
                </th>
                <th>
                    {{ __('employees.action') }}
                </th>
            </thead>
            <tbody>
                @foreach ($employees as $key=>$employee)
                <tr>
                    <td>{{'#'. ++$key }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->company?$employee->company->name:"" }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <div class="dropdown no-arrow mb-1">
                            <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i> </a>
                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item edit-product"
                                    href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning"
                                    title="">
                                    <i class="fas fa-edit"></i>&nbsp; {{ __('employees.edit') }}
                                </a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item delete-product" title="">
                                        <i class="fas fa-trash"></i>&nbsp; {{ __('employees.delete') }}
                                    </button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('#employees').dataTable({
            "language": {
                "emptyTable": "No data available in the table",
                "paginate": {
                    "previous": '<i class="ni ni-bold-left"></i>',
                    "next": '<i class="ni ni-bold-right"></i>'
                },
                "sEmptyTable": "No data available in the table"
            },
        });
    });

</script>
@endpush
