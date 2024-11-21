@extends ('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido')

@session('actualizado')
    <script>
        Swal.fire({
            title: "Registro actualizado",
            text: "{{$value}}",
            icon: "success"
        });
    </script>
@endsession
{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $cliente)

        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}}
            </div>

            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{route('EditarCliente', ['id' => $cliente->id])}}"
                    class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
                <a href="{{route('deleteClientes', ['id' => $cliente->id])}}"
                    class="btn btn-danger btn-sm">{{__('Eliminar')}}</a>
            </div>

            <script>
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            </script>

        </div>
        {{-- Finaliza tarjetaCliente --}}
    @endforeach

</div> {{-- divcontainer --}}

@endsection