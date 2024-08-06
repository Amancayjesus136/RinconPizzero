<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <div class="flex-grow-1">
                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#createEmployee" wire:click='modal()'><i class="ri-add-fill me-1 align-bottom"></i> Add Company</button>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="hstack text-nowrap gap-2">
                                <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <button class="btn btn-danger"><i class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                                <button class="btn btn-soft-success">Import</button>
                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1" style="">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Last Week</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card" id="companyList">
                <div class="card-header">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for company...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-3">
                            <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="name" scope="col">Company Name</th>
                                        <th class="sort" data-sort="owner" scope="col">Owner</th>
                                        <th class="sort" data-sort="industry_type" scope="col">Industry Type</th>
                                        <th class="sort" data-sort="star_value" scope="col">Rating</th>
                                        <th class="sort" data-sort="location" scope="col">Location</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all"><tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="#" class="fw-medium link-primary">#VZ10</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/brands/slack.png') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                </div>
                                                <div class="flex-grow-1 ms-2 name">Syntyce Solutions</div>
                                            </div>
                                        </td>
                                        <td class="owner">Herbert Stokes</td>
                                        <td class="industry_type">Health Services</td>
                                        <td><span class="star_value">2.9</span> <i class="ri-star-fill text-warning align-bottom"></i></td>
                                        <td class="location">Berlin, Germany</td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-phone-line fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-question-answer-line fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0);" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a class="edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                    <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                        <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ companies We did not find any companies for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            {{-- paginate --}}
                        </div>
                    </div>

                    <div wire:ignore.self class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content border-0">
                                <div class="modal-header bg-soft-info p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $accion }} cuenta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form class="tablelist-form" wire:submit.prevent="save">
                                    <div class="modal-body">
                                        <input type="hidden" id="id-field">
                                        <div class="row g-3">
                                            <div class="col-lg-5 mt-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="ri-user-fill"></i></div>
                                                    <input type="text" class="form-control" wire:model="name" placeholder="Ingresar apodo" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mt-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="ri-mail-fill"></i></div>
                                                    <input type="email" class="form-control" wire:model="email" placeholder="Ingresar correo electrónico" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 mt-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="ri-lock-fill"></i></div>
                                                    <input type="password" class="form-control" wire:model="password" placeholder="Ingresar nueva contraseña" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-4">
                                                <div class="input-group">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="ri-key-fill"></i> Generar contraseña
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 mt-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="ri-lock-fill"></i></div>
                                                    <input type="password" class="form-control" wire:model="password_confirmation" placeholder="Confirmar nueva contraseña" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6 mt-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="ri-men-fill"></i></div>
                                                    <select class="form-select" wire:model="gender">
                                                        <option value="" disabled selected>Seleccionar género</option>
                                                        <option value="Hombre">Hombre</option>
                                                        <option value="Mujer">Mujer</option>
                                                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="ri-briefcase-fill"></i></div>
                                                    <select class="form-select" wire:model="position">
                                                        <option value="" disabled selected>Seleccionar puesto</option>
                                                        @foreach ($positions as $position)
                                                            <option value="{{ $position->name_position }}">{{ $position->name_position }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-text"><i class="ri-user-settings-fill"></i></div>
                                                    <select class="form-select" wire:model="user_type">
                                                        <option value="">Seleccionar tipo de usuario</option>
                                                        @foreach ($users_type as $user_type)
                                                            <option value="{{ $user_type->name_user_type }}">{{ $user_type->name_user_type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-text"><i class="ri-shield-user-fill"></i></div>
                                                    <select class="form-select" wire:model="role_id">
                                                        <option value="" disabled selected>Seleccionar rol</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id_role }}">{{ $role->role }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="ri-close-fill"></i> Cerrar</button>
                                            <button type="submit" class="btn btn-primary" wire:click='save()'>
                                                <i class="ri-user-add-fill"></i> {{ $accion }} empleado
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--end add modal-->

                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4 class="fs-semibold">You are about to delete a company ?</h4>
                                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will remove all of your information from our database.</p>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal">
                                                <i class="ri-close-line me-1 align-middle"></i> Close
                                            </button>
                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end delete modal -->

                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        {{-- modal show --}}
            <div class="col-xxl-3">
                <div class="card" id="company-view-detail">
                    <div class="card-body text-center">
                        <div class="position-relative d-inline-block">
                            <div class="avatar-md">
                                <div class="avatar-title bg-light rounded-circle">
                                    <img src="{{ asset('assets/images/brands/slack.png') }}" alt="" class="avatar-sm rounded-circle object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-3 mb-1">Syntyce Solutions</h5>
                        <p class="text-muted">Herbert Stokes</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item avatar-xs">
                                <a href="#" class="avatar-title bg-ligth-subtle text-ligth fs-15 rounded">
                                    <i class="ri-global-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="#" class="avatar-title bg-ligth-subtle text-ligth fs-15 rounded">
                                    <i class="ri-mail-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="#" class="avatar-title bg-ligth-subtle text-ligth fs-15 rounded">
                                    <i class="ri-question-answer-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Information</h6>
                        <p class="text-muted mb-4">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
                        <div class="table-responsive table-card">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium" scope="row">Industry Type</td>
                                        <td>Health Services</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Location</td>
                                        <td>Berlin, Germany</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Employee</td>
                                        <td>01-60</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Rating</td>
                                        <td>2.9 <i class="ri-star-fill text-warning align-bottom"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Website</td>
                                        <td>
                                            <a href="javascript:void(0);" class="link-primary text-decoration-underline">www.syntyce.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Contact Email</td>
                                        <td>info@syntyce.com</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Since</td>
                                        <td>2009</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
        {{-- modal show --}}
        <!--end col-->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('notificar_accion', function () {
                var myModalEl = document.getElementById('createEmployee');
                var modal = bootstrap.Modal.getInstance(myModalEl);
                if (modal) {
                    modal.hide();
                } else {
                    console.error('Bootstrap modal instance not found.');
                }
            });
        });
    </script>


</div>
