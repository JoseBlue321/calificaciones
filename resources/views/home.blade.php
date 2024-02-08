<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row justify-content-start align-items-start">
            @foreach ($asignaturas as $asignatura)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$asignatura->nombre}}</h5>
                      <p class="card-text">{{$asignatura->detalle}}</p>
                      <a href="asignaturas/{{$asignatura->id}}" class="btn btn-info">Ver Calificaciones</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>



    @include('partials.js')
</body>
</html>