@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                @endif
            <form class="bg-white shadow rounded py-3 px-4"
                action="{{ route('usuarios.update', $user->id) }}" method="post">

                @csrf
                @method('PUT')
                <h4 class="display-4">Editar usuario</h4>

                @include('forms.formUser')

                <div class="form-group">
                    <label class="{{ auth()->check() ? 'd-none' : '' }}" for="password">Password</label>
                    <input class="form-control bg-light shadow-sm @error('password') is-invalid @else border-0 @enderror"
                                type="{{ auth()->check() ? 'hidden' : 'password'}}"
                                name="password"
                                id="password"
                                placeholder="Password..."
                                value="{{ old('password', auth()->check() ? auth()->user()->password : '' ) }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="{{ auth()->check() ? 'd-none' : '' }}" for="password_confirmation">Password Confirm</label>
                        <input class="form-control bg-light shadow-sm @error('password_confirmation') is-invalid @else border-0 @enderror"
                                type="{{ auth()->check() ? 'hidden' : 'password'}}"
                                name="password_confirmation"
                                id="password_confirmation"
                                placeholder="Nombre..."
                                value="{{ old('password', auth()->check() ? auth()->user()->password : '' ) }}">

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                <button class="btn btn-primary btn-lg btn-block">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
