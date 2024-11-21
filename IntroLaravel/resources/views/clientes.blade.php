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

@session('eliminado')
    <script>
        Swal.fire({
            title: "Usuario eliminado",
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
                    {{ $cliente->nombre }}
                </div>

                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>

                <div class="card-footer text-muted">
                    <a href="{{ route('EditarCliente', ['id' => $cliente->id]) }}" class="btn btn-warning btn-sm">
                        {{ __('Actualizar') }}
                    </a>
                    <button class="btn btn-danger btn-sm btn-delete" data-id="{{ $cliente->id }}" data-nombre="{{ $cliente->nombre }}">
                        {{ __('Eliminar') }}
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Formulario oculto para enviar la solicitud DELETE --}}
    <form id="deleteForm" action="" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const deleteButtons = document.querySelectorAll(".btn-delete");

            deleteButtons.forEach(button => {
                button.addEventListener("click", (e) => {
                    const clientId = button.getAttribute("data-id");
                    const clientName = button.getAttribute("data-nombre");
                    const deleteForm = document.getElementById("deleteForm");
                    const deleteUrl = `{{ route('deleteCliente', ['id' => ':id']) }}`.replace(':id', clientId);

                    Swal.fire({
                        title: "¿Eliminar cliente?",
                        text: `Se borrara permanentemente al cliente ${clientName}`,
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Eliminar",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deleteForm.action = deleteUrl;
                            deleteForm.submit();
                        }
                    });
                });
            });
        });
    </script>

</div> {{-- divcontainer --}}

@endsection