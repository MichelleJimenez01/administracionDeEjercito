<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Army Corps</title>
</head>
<body>

<h1>Registrar Army Corps</h1>

<form action="{{ route('armycorps.store') }}" method="POST">
    @csrf

    <label>
        Denominación:
        <br>
        <input type="text" name="denomination" required>
    </label>
    <br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>


