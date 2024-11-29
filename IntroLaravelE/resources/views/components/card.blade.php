<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            {{$encabezado}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$titulo}}</h5>
            <p class="card-text">{{ $slot }}</p> <!-- slot es algo que todos los componentes tienes, puede usarse para texto -->
            <a href="#" class="btn btn-primary">{{$textoboton}}</a>
        </div>
    </div>
</div>