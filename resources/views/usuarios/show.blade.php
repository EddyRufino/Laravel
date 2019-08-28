@extends('layout.layout')

@section('content')
<div class="container">
    <h1 class="display-4">{{ $user->name }} | Editar</h1>

    <table class="table">
        <tr>
            <th>Nombre:</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Roles:</th>
            <td>
                @foreach ($user->roles as $role)
                    {{ $role->display_name }}
                @endforeach
            </td>
        </tr>
    </table>
    <div class="row">
        @can('edit', $user)
        <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-info mr-1">Editar</a>
        @endcan

        @can('destroy', $user)
        <form action="{{ route('usuarios.destroy', $user) }}"
            method="post">
            @csrf @method('DELETE')
            <button class="btn btn-danger">Eliminar</button>
        </form>
        @endcan
    </div>
</div>
@endsection
