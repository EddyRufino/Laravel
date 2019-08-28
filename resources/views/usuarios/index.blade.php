@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 mx-auto">
                <table class="table col-10 bg-white shadow rounded">
                    <h1 class="display-4">Usuarios</h1>
                    <a class="btn btn-primary pull-right" href="{{ route('usuarios.create') }}">New User</a>
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Notas</th>
                        <th scope="col">Etiquetas</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{ $user->roles->pluck('display_name')->implode(' - ') }}
                                    {{-- @foreach ($user->roles as $role)
                                        {{ $role->display_name }}
                                    @endforeach --}}
                                </td>
                                <td>{{ $user->note ? $user->note->body : '' }}</td>
                                <td>{{ $user->tags->pluck('name')->implode(', ') }}</td>
                                <td>
                                    <a  class="btn btn-success"
                                        href="{{ route('usuarios.edit', $user->id) }}"
                                        >Editar
                                    </a>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}"
                                        method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <span>No hay nada</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
