@extends('layout.layout')

@section('title', 'CenterPage')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-6 my-auto">
            <h1 class="display-4 text-primary">Lo podemos diseñar.</h1>
            <p class="lead">En CenterPage te ayudamos a llegar a muchos nuevos clientes con un sitio web atractivo, funcional, adaptado a tus requerimientos y a los nuevos estandares de internet.</p>
            {{-- <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a> --}}
            <a class="btn btn-lg btn-block btn-outline-secondary" href="{{ route('portfolio.index') }}">Conoce más</a>
        </div>
        <div class="col-12 col-lg-6 img">
            <img class="img-fluid img-home" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
</div>

<div class="sombra-block-two">
    <div class="container mt-5 pt-5 pb-5 ">
        <h1 class="display-4 text-center text-primary">Unete a nosotros.</h1>
        <div class="row pt-4">
            {{-- <div class="col-12 col-lg-6 my-auto"> --}}

            <div class="col-12 col-lg-4 block">
                <h3 class="text-secondary">Moderno</h3>
                <p class="lead">Ponemos a tu disposición diseños recientes de acuerdo a tu estilo.</p>
            </div>
            <div class="col-12 col-lg-4 block">
                <h3 class="text-secondary">Calidad</h3>
                <p class="lead">Ofrecemos trabajos de la más alta calidad.</p>
            </div>
            <div class="col-12 col-lg-4 block">
                <h3 class="text-secondary">Atención</h3>
                <p class="lead">Atención personalizada para cada uno de nuestros clientes.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-6 img-block-tres">
            <img class="img-fluid img-home" src="/img/pasos.svg" alt="Desarrollo Web">
        </div>
        <div class="col-12 col-lg-6 my-auto">
            <h1 class="display-4 text-primary text-center">Guía de trabajo.</h1>
                <h3 class="text-secondary pt-3">1.- Estructura de la información</h3>
                <p class="lead">Identificamos y ordenamos tu información para organizarla en el sitio web.</p>
                <h3 class="text-secondary">2.- Flujo de trabajo y diseño</h3>
                <p class="lead">Armado de prototipos para el posible diseño de su sitio web.</p>
                <h3 class="text-secondary">3.- Maquetación y programación</h3>
                <p class="lead">Pasamos a código el diseño del prototipo elegido por el cliente.</p>
                <h3 class="text-secondary">4.- Puesta en producción</h3>
                <p class="lead">Subimos el código a los servidores para que  todo el mundo pueda ingresar a su sitio web.</p>
            {{-- <p class="lead text-secondary">En CenterPage te ayudamos a llegar a muchos nuevos clientes con un sitio web atractivo, funcional, adaptado a tus requerimientos y a los nuevos estandares de internet.</p> --}}
            {{-- <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a> --}}
            {{-- <a class="btn btn-lg btn-block btn-outline-secondary" href="{{ route('portfolio.index') }}">Conoce más</a> --}}
        </div>
    </div>
</div>

@endsection

