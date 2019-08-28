@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $message->subject }}</h1>
                <small class="text-black-50">{{ $message->tags->pluck('name')->implode(', ') }}</small>
            </div>
            <p class="text-secondary">{{ $message->content }}</p>

            <h3>Notas</h3>
            <p class="text-secondary">{{ $message->note ? $message->note->body : '' }}</p>

            <small class="text-black-50">
                Escrito por: {{ $message->name }} - {{ $message->created_at->format('d/m/Y') }}
            </small><br>

            @auth
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('messages.index') }}">Regresar</a>
                    {{-- <a class="btn btn-primary" href="{{ route('message.edit', $message) }}"
                        >Editar
                    </a> --}}

                    <a class="btn btn-danger rounded-right" href="#" onclick="document.getElementById('delete-message').submit()"
                        >Eliminar
                    </a>
                    <form class="d-none" id="delete-message" action="{{ route('messages.destroy', $message) }}" method="post">
                            @csrf @method('DELETE')
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection
