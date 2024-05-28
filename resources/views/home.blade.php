@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Bienvenido a NuestraCelular</h1>
        <p class="lead text-center">Ofrecemos los mejores dispositivos móviles del mercado.</p>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="{{ asset('images/celular.jpg') }}" class="img-fluid rounded" alt="Celular">
            </div>
        </div>
    </div>
@endsection