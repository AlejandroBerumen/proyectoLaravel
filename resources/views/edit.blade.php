<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@include('navbar')
    <div class="container mt-2">
        <h2>Editar Alumno</h2>
        <form action="{{ route('alumnos.update', $alumno->Num_Control) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $alumno->Nombre }}">
            </div>

            <div class="mb-3">
                <label for="Semestre" class="form-label">Semestre:</label>
                <input type="text" class="form-control" id="Semestre" name="Semestre" value="{{ $alumno->Semestre }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
        </form>
    </div>

    <!-- Incluir Bootstrap JS (opcional, solo si necesitas funcionalidades de Bootstrap JS) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
