@extends('layout.layout')

@section('title',  'Servicios')

@section('content')
	<div class="container mt-4">
		<h1 class="display-4 pb-2 text-primary">Te ofrecemos:</h1>
		<div class="card-group">
		  <div class="card">
		    <img src="/img/app.jpg" class="card-img-top diseno" alt="Diseño y Desarrollo Web">
		    <div class="card-body">
		      <h4 class="card-title text-primary">Diseño y Desarrollo Web</h4>
		      <p class="card-text lead">Déjanos transformar tu idea en una página web hecha a la medida de tus necesidades.</p>
		      <a href="/contacto" class="btn btn-outline-secondary">Conoce más</a>
		    </div>
		  </div>
		  <div class="card">
		    <img src="/img/coker.jpg" class="card-img-top" alt="Desarrollo de Aplicaciones Web">
		    <div class="card-body">
		      <h4 class="card-title text-primary">Desarrollo de Aplicaciones Web</h4>
		      <p class="card-text lead">Evaluamos los requerimientos de su empresa para desarrollar la aplicación web a la medida.</p>
		      <a href="/contacto" class="btn btn-outline-secondary">Conoce más</a>
		    </div>
		  </div>
		  <div class="card">
		    <img src="/img/seo.jpg" class="card-img-top" alt="SEO - Posicionamiento Web">
		    <div class="card-body">
		      <h4 class="card-title text-primary">SEO - Posicionamiento Web</h4>
		      <p class="card-text lead">Mejoramos el posicionamiento y visibilidad de su página web en Google.</p>
		      <a href="/contacto" class="btn btn-outline-secondary">Conoce más</a>
		    </div>
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