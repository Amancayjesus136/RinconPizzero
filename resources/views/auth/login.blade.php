@extends('layouts.invitados')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">

            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">¡Bienvenid@ a mi inventario!</h5>
                    <p class="text-muted">Inicia sesión para continuar.</p>
                </div>
                <div class="p-2 mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Correo Electronico</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="mb-3">
                            <div class="float-end">
                                <a href="#" class="text-muted">¿Has olvidado tu contraseña?</a>
                            </div>
                            <label class="form-label" for="password-input">Contraseña</label>
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            </div>
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                        </div>

                        {{-- <div class="mt-4 text-center">
                            <div class="signin-other-title">
                                <h5 class="fs-13 mb-4 title">Inicia sesión con</h5>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

        {{-- <div class="mt-4 text-center">
            <p class="mb-0">¿No tienes una cuenta? <a href="{{ route('register') }}" class="fw-semibold text-primary text-decoration-underline"> Registrarse </a> </p>
        </div> --}}

    </div>
</div>

@endsection
