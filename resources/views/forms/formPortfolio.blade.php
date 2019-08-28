@csrf
<h1 class="display-4"></h1>

<div class="form-group">
    <label for="title">Titulo:</label>
    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
        name="title"
        placeholder="Titulo..."
        value="{{ old('title' ,$portfolio->title) }}">

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descripción:</label>
    <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
        name="description"
        placeholder="Contenido..."
        value="{{ old('description') }}"
    >{{ old('description' ,$portfolio->description) }}
    </textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<button class="btn btn-primary btn-block">{{$btnText}}</button>
<a class="btn btn-large btn-block btn-outline-success" href="{{ route('portfolio.index') }}">Cancelar</a>




{{-- <label>Description</label><br>
<textarea name="description" >{{ old('description' ,$portfolio->description) }}</textarea><br>
{{ $errors->first('description') }}<br>
<button>{{$btnText}}</button> --}}
