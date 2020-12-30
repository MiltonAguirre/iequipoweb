@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center row card-dark-opacity p-5">
        <div class="col-md-8">
            <div class="row mb-4">
                <div class="col-md-2 logo-md">
                    <img src="{{ asset('img/logo.png') }}" alt="logo futbol 5">
                </div>
                <div class="col-md-8">
                <h1 class="title-text">IEquipo</h1>

                </div>
            </div>
            <p class="subtitle-text">Jugar F5 nunca fue tan fácil...</p>
            <div class="py-4 px-1 mt-3">
                <p class="text my-2">Con IEquipo podras generar reservas en tus canchas preferidas facilmente</p>
                <div class="col-md-4 offset-md-4 mt-4 mb-3">
                    <button class="btn bg-mix btn-block btn-download">Descarga la APP</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="phone">
                <img src="{{ asset('img/smartphone.png') }}" alt="smartphone">
            </div>
            
        </div>
        
    </div>
</div>
@endsection
