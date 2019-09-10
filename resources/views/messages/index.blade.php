@extends('layout.layout')
@section('title',  'Mensajes')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4 text-primary">Mensajes</h1>
        </div>

        <ul class="list-group">

            @forelse ($messages as $message)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between align-items-center"
                        href="{{ route('messages.show', $message) }}"
                        >
                        <span class=" font-weight-bold"
                            >
                            {{ $message->subject }}
                        </span>
                        <span class="text-black-50"
                            >
                            {{ $message->created_at->format('d/m/Y') }}
                        </span>
                    </a>
                </li>

            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
            @endforelse
            <div class="overflow-auto">
                {{ $messages->links() }}
            </div>
        </ul>

    </div>




        {{-- <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 mx-auto">
                <table class="table col-10 bg-white shadow rounded">
                    <h1 class="display-4">Mensajes</h1>
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">email</th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Contenido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>
                                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->content }}</a>
                                </td>

                            </tr>
                        @empty
                            <span>No hay nada</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection


{{-- <td>
    <a  class="btn btn-success"
        href="{{ route('messages.edit', $message) }}"
        >Editar
    </a>
    <form action="{{ route('messages.destroy', $message) }}"
        method="post">
        @csrf @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
    </form>
</td> --}}
