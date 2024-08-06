@extends('layouts.admin-sidebar')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Empleados</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a>Usuarios</a></li>
                                <li class="breadcrumb-item active">Empleados</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @livewire('users.employees.employee')

        </div>
    </div>
</div>

@endsection
