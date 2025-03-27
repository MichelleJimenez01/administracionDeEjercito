<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Quarter</title>
</head>
<body>

<h1>Registrar Quarter</h1>

<form action="{{ route('quarters.store') }}" method="POST">
    @csrf

    <label>
        Nombre del Quarter:
        <br>
        <input type="text" name="name_quarter" required>
    </label>
    <br>

    <label>
        Ubicación:
        <br>
        <input type="text" name="location" required>
    </label>
    <br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>

