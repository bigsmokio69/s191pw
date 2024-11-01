@extends ('layouts.plantilla')
@section('titulo', 'Principal')

@section('cuerpo')

<div class="container-md text-center col-md-4 border mb-3 mt-3">
    @session('guardado')
        <script>
            Swal.fire({
                title: "Aviso de registro!",
                text: '{{$value}}',
                icon: "success"
            });
        </script>
    @endsession
    <h1>Registrar datos de un libro</h1>
    <hr>
    <div class="container">
        <form method="POST" action="/envlibro">
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}">
                <small class="text-danger fst-italic"> {{$errors->first('isbn')}} </small>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
                <small class="text-danger fst-italic"> {{$errors->first('titulo')}} </small>

            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" value="{{old('autor')}}">
                <small class="text-danger fst-italic"> {{$errors->first('autor')}} </small>

            </div>
            <div class="mb-3">
                <label for="pags" class="form-label">Páginas</label>
                <input type="text" class="form-control" name="pags" value="{{old('pags')}}">
                <small class="text-danger fst-italic"> {{$errors->first('pags')}} </small>

            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Año</label>
                <input type="text" class="form-control" name="year" value="{{old('year')}}">
                <small class="text-danger fst-italic"> {{$errors->first('year')}} </small>

            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial" value="{{old('editorial')}}">
                <small class="text-danger fst-italic"> {{$errors->first('editorial')}} </small>

            </div>
            <div class="mb-3">
                <label for="mailEdit" class="form-label">Email de la editorial</label>
                <input type="text" class="form-control" name="mailEdit" value="{{old('mailEdit')}}">
                <small class="text-danger fst-italic"> {{$errors->first('mailEdit')}} </small>

            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>
@endsection