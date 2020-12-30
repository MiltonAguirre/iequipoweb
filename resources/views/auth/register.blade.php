@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-dark-opacity">
                <div class="card-header bg-primary-color">Registrarse</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6 row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                        name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Apellido</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                        name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 row">
                                <label for="nick" class="col-md-4 col-form-label text-md-right">Nick</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('nick') is-invalid @enderror" 
                                        name="nick" value="{{ old('nick') }}" required>
                                    @error('nick')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" 
                                        name="city" value="{{ old('city') }}" required autofocus>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">Localidad</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                        name="location" value="{{ old('location') }}" required>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-1">
                                <span class="col-form-label">Sexo</span>
                            </div>
                            <div class="col-md-7 row border rounded justify-content-center text-center">
                                <div class="form-check col-md-4">
                                    <input class="form-check-input" id="sex_m" type="radio" name="sex" value="male" checked>
                                    <label class="form-check-label" for="sex_m">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check col-md-4">
                                    <input class="form-check-input" id="sex_f" type="radio" name="sex" value="female">
                                    <label class="form-check-label" for="sex_f">
                                        Femenino
                                    </label>
                                </div>
                                <div class="form-check col-md-4">
                                    <input class="form-check-input" id="sex_o" type="radio" name="sex" value="other">
                                    <label class="form-check-label" for="sex_o">
                                        Otro
                                    </label>
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <div class="col-md-6 row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Celular</label>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                        name="phone" value="{{ old('phone') }}" required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 row">
                                <label for="birthday" class="col-md-4 col-form-label text-md-right">Cumpleaños</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                                        name="birthday" value="{{ old('birthday') }}" required>
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>











                        <div class="form-group row">
                            <div class="col-md-6 row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6 row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Registrarme</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
