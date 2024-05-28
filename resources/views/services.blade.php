@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Nuestros Servicios</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Reparación</h5>
                        <p class="card-text">Ofrecemos servicios de reparación para todos los modelos de celulares.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Venta</h5>
                        <p class="card-text">Tenemos una amplia gama de dispositivos móviles de las mejores marcas.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Accesorios</h5>
                        <p class="card-text">Encontrarás todo tipo de accesorios para complementar tu dispositivo móvil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection