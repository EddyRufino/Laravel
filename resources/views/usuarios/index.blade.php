@extends('layout.layout')
@section('title',  'Lista usuarios')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justift-content-center align-items-center  justify-content-around">
            <h1 class="display-4 text-primary">Usuarios</h1>
            <a class="btn btn-primary pull-right d-block" href="{{ route('usuarios.create') }}">New User</a>
        </div>
        <div class="row col-12">

            <div class="col-12 table-responsive  mx-auto">
                <table class="table bg-white shadow rounded">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">email</th>
                        <th scope="col">Role</th>
{{--                         <th scope="col">Notas</th>
                        <th scope="col">Etiquetas</th> --}}
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
                                    <div class="d-flex">
                                        <a  class="btn btn-success"
                                            href="{{ route('usuarios.edit', $user->id) }}"
                                            >Editar
                                        </a>
                                        <form action="{{ route('usuarios.destroy', $user->id) }}"
                                            method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
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
