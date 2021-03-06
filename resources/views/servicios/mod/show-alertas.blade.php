<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header card-header-black">
          <h3 class="card-title">Alertas del Servicio</h3>
          @can('create', 'App\Model\Alert')
            <p class="card-category">Este servicio web tiene x alertas activas.</p><a class="btn btn-outline-warning" href="{{ route('agregarAlerta', $servicio) }}">Crear Alerta</a>
          @endcan
        </div>
        <div class="card-body row">
          @foreach($servicio->alertas as $alerta)
          <div class="card col-md-6 col-lg-6">
            <a href="{{route('alert.show', $alerta )}}">
            <div class="card-header card-header-warning">
              <h3 class="card-title">{{$alerta->asunto }} </h3>
              <p class="card-category">Desde {{$alerta->fechaDeInicio()}} hasta {{$alerta->fechaFinal()}}</p>
            </div>
            <div class="card-body ">
              {{Str::of($alerta->descripcion)->words(8, ' ...')}}
            </div>
          </a>
          </div>
        @endforeach
      </div>
      </div>
    </div>
  </div>
