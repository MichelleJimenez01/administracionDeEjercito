<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Company</title>
</head>
<body>

<h1>Registrar Company</h1>

<form action="{{ route('companies.store') }}" method="POST">
    @csrf

    <label>
        Actividad de Compañía:
        <br>
        <input type="text" name="activityCompany" required>
    </label>
    <br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>

