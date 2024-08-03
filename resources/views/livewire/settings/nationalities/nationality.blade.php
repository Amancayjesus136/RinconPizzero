<div>
    <div class="row">
        <div class="d-flex justify-content-end">
            @if(session('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show" role="alert">
                    <i class="ri-notification-off-line label-icon"></i><strong>Registrado</strong> - {{ session('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">

                    <form>
                        <div class="col-sm-auto">
                            <div class="input-group mb-3">
                                <div class="input-group-text"><i class="ri-flag-fill"></i></div>
                                <input type="text" class="form-control" wire:model="name_national" placeholder="Crear nombre nacionalidad">
                            </div>

                            <div class="input-group mb-3 d-flex justify-content-end">
                                <button wire:click.prevent="store()" class="btn btn-primary">+ Registrar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mt-3">
                <div class="card-header d-flex">
                    <div class="ml-auto">
                        <a href="#" class="btn btn-success mr-2"><i class="ri-file-excel-2-fill"></i> Reporte Excel</a>
                        <a href="#" class="btn btn-danger"><i class="ri-file-ppt-2-fill"></i> Reporte PDF</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre de la nacionalidad</th>
                                <th>Estado</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($nationalitys->isEmpty())
                                <tr>
                                    <td class="text-center" colspan="12">Nationality not registered</td>
                                </tr>
                            @else
                                @foreach ($nationalitys as $nationality)
                                    <tr>
                                        <td>{{ $nationality->id_nationality }}</td>
                                        <td>{{ $nationality->name_national }}</td>
                                        <td>
                                            @if ($status_nationality == '1')
                                                <span class="badge bg-info">Activado</span>
                                            @elseif ($status_nationality == '0')
                                                <span class="badge bg-danger">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="#" class="link-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Desactivar"><i class="ri-close-circle-line"></i></a>
                                                <a href="#" class="link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Editar"><i class="ri-pencil-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <section class="mt-2 container">
                    {{ $nationalitys->onEachSide(1)->links() }}
                </section>
            </div>
        </div>
    </div>

</div>
