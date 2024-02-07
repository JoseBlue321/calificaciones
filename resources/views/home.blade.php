<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fment</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
            <div class="card text-center align-items-center">
                <img src="{{ asset('img/logo_medicina.png')}}" width="300" height="300"   alt="...">
                <div class="card-body">
                    <h5 class="card-title">UNIVERSIDAD MAYOR DE SAN ANDRES</h5>
                    <p class="card-text">FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA <br>
                    PRIMERA FACULTAD ACREDITADA Y REACREDITADA <br>
                    <b>VICEDECANATO</b>
                    </p>
                    <div class="alert alert-primary" role="alert">
                        <b>VERIFICACIÓN DE NOTAS</b> 
                    </div>
                    @foreach ($asignaturas as $asignatura)
                    <a href="#" class="btn btn-primary">{{$asignatura->id}}</a>
                    @endforeach
                    
                </div>
            </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>