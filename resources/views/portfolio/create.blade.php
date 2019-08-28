@extends('layout.layout')

@section('title')
    {{ config('app.name') }} | Nuevo Portafolio
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('portfolio.store') }}" method="post">
                <h3 class="display-4">Nuevo Post</h3>
                <hr>
                @include('forms.formPortfolio', ['btnText' => 'Guardar'])

            </form>

        </div>
    </div>
</div>
@endsection
