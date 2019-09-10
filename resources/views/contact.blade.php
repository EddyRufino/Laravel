@extends('layout.layout')

@section('title', 'Contacto')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{-- @if($errors->any())
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
                @endif --}}

                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact') }}" method="post">
                    @csrf

                    {{-- @if (auth()->guest()) --}}

                        <h1 class="display-4 text-primary">Envia tu duda</h1>
                        <hr>
                        <div class="form-group">
                            <label class="{{ auth()->check() ? 'd-none' : '' }}" for="name">Nombre</label>
                            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                                    id="name"
                                    type="{{ auth()->check() ? 'hidden' : 'text'}}"
                                    name="name"
                                    placeholder="Nombre..."
                                    value="{{ old('name', auth()->check() ? auth()->user()->name : '' ) }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="{{ auth()->check() ? 'd-none' : '' }}" for="email">Email</label>
                            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                                    type="{{ auth()->check() ? 'hidden' : 'email'}}"
                                    id="email"
                                    name="email"
                                    placeholder="Email..."
                                    value="{{ old('email', auth()->check() ? auth()->user()->email : '' ) }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    {{-- @endif --}}

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                                name="subject"
                                id="subject"
                                placeholder="Asunto..."
                                value="{{ old('subject') }}">

                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Mensaje</label>
                        <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                                    name="content"
                                    placeholder="Mensaje..."
                                    value="{{ old('content') }}">
                        </textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                    <a class="btn btn-large btn-block btn-outline-secondary" href="{{ route('home') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <div class="sombra-block-two">
    <div class="container mt-5 pt-5 pb-5 ">
        <h3 class="text-center text-primary">¿Aún tienes dudas?</h3>
        <p class="col-12 lead">Si estas interesado en conocer como tu empresa o marca personal puede llegar hacer conocida más rápido que las demás, nosotros te ayudamos a posicionar tu sitio web en los mejores lugares que tienen los principales motores de búsqueda.</p>
    </div>
</div>
@endsection
