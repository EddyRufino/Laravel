@extends('layout.layout')

@section('title',  'Nosotros')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-6 img-about">
            <img class="img-fluid mb-4 img-about-one" src="/img/nosotros.svg" alt="Quién soy">
        </div>
        <div class="col-12 col-lg-6 my-auto">
            <h1 class="display-4 text-primary">Quienes somos</h1>
            <p class="lead ">Somos un grupo totalmente enfocados en ayudarte a crecer como empresa o marca personal y que puedas aprovechar al máximo los beneficios que nos ofrece Internet. Todo esto a un precio competitivo y que sin importar el tamaño de tu negocio puedas disfrutar el tener un sitio web profesional y de calidad.</p>
            <a class="btn btn-lg btn-block btn-outline-secondary" href="{{ route('portfolio.index') }}">Publicaciones</a>
        </div>
    </div>
</div>

<div class="sombra-block-two">
    <div class="container mt-5 pt-5 pb-5 ">
        <h3 class="text-center text-primary">¿Aún tienes dudas?</h3>
        <p class="col-12 lead">Si estas interesado en conocer como tu empresa o marca personal puede llegar hacer conocida más rápido que las demás, nosotros te ayudamos a posicionar tu sitio web en los mejores lugares que tienen los principales motores de búsqueda.</p>
    </div>
</div>
@endsection
