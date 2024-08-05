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

                    <form class="tablelist-form needs-validation" autocomplete="off" novalidate>
                        <div class="col-sm-auto">
                            <div class="input-group mb-3">
                                <div class="input-group-text"><i class="ri-shield-user-fill"></i></div>
                                <input type="text" class="form-control" wire:model="name_position" placeholder="Crear nombre de puesto" required>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El nombre del puesto es necesario
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-text"><i class="ri-file-text-fill"></i></div>
                                <input type="text" class="form-control" wire:model="description_position" placeholder="Descripción del puesto" required>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La descripción es necesario
                                </div>
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
                                <th>Nombre del puesto</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($positions->isEmpty())
                                <tr>
                                    <td class="text-center" colspan="12">Puestos sin registrar</td>
                                </tr>
                            @else
                                @foreach ($positions as $position)
                                    <tr>
                                        <td>{{ $position->id_position }}</td>
                                        <td>{{ $position->name_position }}</td>
                                        <td>{{ $position->description_position }}</td>
                                        <td>
                                            @if ($status_position == '1')
                                                <span class="badge bg-info">Activado</span>
                                            @elseif ($status_position == '0')
                                                <span class="badge bg-danger">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-sm btn-soft-danger remove-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Desactivar"><i class="ri-close-circle-line align-bottom"></i></button>
                                                <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Editar"><i class="ri-pencil-fill align-bottom"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <section class="mt-2 container">
                    {{ $positions->onEachSide(1)->links() }}
                </section>
            </div>
        </div>
    </div>

    <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</div>
