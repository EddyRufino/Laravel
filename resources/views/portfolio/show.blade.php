@extends('layout.layout')

@section('title', 'Portfolio | ' . $portfolio->title)

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
    <h1>{{ $portfolio->title }}</h1>
    <p class="text-secondary">{{ $portfolio->description }}</p>
    <small class="text-black-50">{{ $portfolio->created_at->diffForHumans() }}</small><br>
    {{-- By <small>{{ auth()->user()->name ? 'Hola' : 'xD'  }}</small> --}}

    <div class="d-flex justify-content-between align-items-center mt-3">
        <a href="{{ route('portfolio.index') }}">Regresar</a>

        @auth
            <div class="btn-group btn-group-sm">
                <a class="btn btn-primary" href="{{ route('portfolio.edit', $portfolio) }}"
                    >Editar
                </a>
                <a class="btn btn-danger rounded-right" href="#" onclick="document.getElementById('delete-portfolio').submit()"
                    >Eliminar
                </a>
                <form class="d-none" id="delete-portfolio" action="{{ route('portfolio.destroy', $portfolio) }}" method="post">
                        @csrf @method('DELETE')
                </form>
            </div>
        @endauth
    </div>

    </div>
</div>
@endsection
