@extends('layout.layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-4 mb-0">Publicaiones</h1>
        @auth
            @if (auth()->user()->hasRoles(['admin']))
                <a class="btn btn-primary" href="{{ route('portfolio.create') }}">New portfolio</a><br>
            @endif
        @endauth
    </div>
    <ul class="list-group">

        @forelse ($portfolios as $portfolio)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center"
                    href="{{ route('portfolio.show', $portfolio) }}"
                    >
                    <span class=" font-weight-bold"
                        >
                        {{ $portfolio->title }}
                    </span>
                    <span class="text-black-50"
                        >
                        {{ $portfolio->created_at->format('d/m/Y') }}
                    </span>
                </a>
            </li>

        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
        @endforelse
        {{ $portfolios->links() }}
    </ul>
</div>
@endsection
