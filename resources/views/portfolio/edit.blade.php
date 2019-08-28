@extends('layout.layout')

@section('title', 'Edit Portfolio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('portfolio.update', $portfolio) }}" method="post">
                @method('PUT')
                <h3 class="display-4">Editar Post</h3>
                <hr>
                @include('forms.formPortfolio', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection
