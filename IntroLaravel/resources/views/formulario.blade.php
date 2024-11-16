@extends ('layouts.plantilla1') <!--Nos sirve para traer el codigo de la plantilla-->

@section('titulo', 'Formulario Clientes')

  @section('contenido') <!--Delimita nuestra seccion de contenido-->  

      <div class="container mt-5 col-md-6 border">
          @if (session('exito'))
            <x-Alert tipo="success">{{session('exito')}}</x-Alert>
          @endif

          @session('exito')
              <x-Alert tipo="danger">{{session('exito')}}</x-Alert>
          @endsession

          @session('exito')
            <script>
              Swal.fire({
              title: "Respuesta del servidor!",
              text: '{{$value}}',
              icon: "success"
              });
            </script>
          @endsession
        <div class="card font-monospace">
        
          <div class="card-header fs-5 text-center text-primary">
            {{__('Registro de Clientes')}}
          </div>

          <div class="card-body text-justify ">

            <form method="POST" action="{{route('procCliente')}}">
              @csrf
                <div class="mb-3">
                  <label for="txtnombre" class="form-label">{{__('Nombre:')}} </label>
                  <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                  <small class="text-danger fst-italic"> {{$errors->first('txtnombre')}} </small>
                </div>
                <div class="mb-3">
                  <label for="txtapellido" class="form-label">{{__('Apellido:')}} </label>
                  <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                  <small class="text-danger fst-italic"> {{$errors->first('txtapellido')}} </small>

                </div>
                <div class="mb-3">
                  <label for="txtcorreo" class="form-label">{{__('Correo:')}} </label>
                  <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                  <small class="text-danger fst-italic"> {{$errors->first('txtcorreo')}} </small>
                </div>
                <div class="mb-3">
                  <label for="txttelefono" class="form-label">{{__('Teléfono:')}} </label>
                  <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
                  <small class="text-danger fst-italic"> {{$errors->first('txttelefono')}} </small>

                </div>
                </div>
              <div class="card-footer text-muted">

              <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-primary success btn sm"> {{__('Guardar Cliente')}} </button>
              </div>
            </form>
          </div>
      </div>
    </div>
  @endsection