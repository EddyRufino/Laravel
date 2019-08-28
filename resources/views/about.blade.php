@extends('layout.layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Quién soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quién Soy</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum vero similique neque fuga magni explicabo! Doloremque aliquam eius distinctio magnam nobis mollitia dolore accusamus necessitatibus officiis, obcaecati, voluptate recusandae!</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('portfolio.index') }}">Publicaciones</a>
        </div>
    </div>
</div>
@endsection
