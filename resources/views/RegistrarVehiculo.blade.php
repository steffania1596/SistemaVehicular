<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/A765">Zona de inicio </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    </div>
</nav>
<label  for=""></label>
<label  for=""></label>

<div class="container">
    <div>
        <form method="get" action="/RegistrarVehiculo/store">
            <div class="form-group-row">
                <label for="exampleFormControlInput1">Nombre del dueño </label>
                <input type="text" class="form-control" name='NombreDueno'>
                @error('NombreDueno')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group-row">
                <label for="exampleFormControlInput1">Documento de identidad  </label>
                <input type="text" class="form-control" name='Documento'>
                @error('Documento')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Marca </label>
                <select class="form-control" id="exampleFormControlSelect1" name="Marca">
                    <option>Mazda</option>
                    <option>Chevrolet</option>
                    <option>Toyota</option>
                </select>
                @error('Marca')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <div class="form-group-row">
                <label for="exampleFormControlInput1">Placa del vehiculo  </label>
                <input type="text" class="form-control" name='Placa'>
                @error('Placa')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                &nbsp;
            </div>

            <button type="submit" class="btn btn-success">Registrar Vehiculo</button>

        </form>
    </div>

</div>

</body>
</html>