<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/A765">Zona de inicio </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        &nbsp;
    </button>
</nav>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Placa</th>
            <th scope="col">Marca</th>
            <th class= "" scope="col">Anotaciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($vehiculos as $vehiculo)
            <tr>
            @if($vehiculo->Marca=='Toyota')
                <th  color="red"><font color="red">{{$vehiculo->Placa}}</font></th>
                <td>{{$vehiculo->Marca}}</td>
            @else
                <td>{{$vehiculo->Placa}}</td>
                <td>{{$vehiculo->Marca}}</td>
                @if($vehiculo->Marca=='Mazda')
                    <td color="#22c548"><font color="#22c548">Los  Mazda son los mejores</font></td>
                @endif
            @endif
             </tr>
        @endforeach
        </tbody>
        </table>
<label  for=""></label>
<label  for=""></label>

<div class="container">


</div>

</body>
</html>