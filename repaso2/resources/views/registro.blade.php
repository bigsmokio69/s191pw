@extends ('layouts.plantilla')
@section('titulo', 'Principal')

@section('cuerpo')

<div class="container-md text-center col-md-4 border mb-3 mt-3">
    <h1>Registrar datos de un libro</h1>
    <hr>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor">
            </div>
            <div class="mb-3">
                <label for="pags" class="form-label">Páginas</label>
                <input type="text" class="form-control" name="pags">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Año</label>
                <input type="text" class="form-control" name="year">
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial">
            </div>
            <div class="mb-3">
                <label for="mailEdit" class="form-label">Email de la editorial</label>
                <input type="text" class="form-control" name="mailEdit">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>
@endsection