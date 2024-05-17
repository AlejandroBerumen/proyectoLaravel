<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos personalizados para navbar dark -->
    <style>
        body {
            padding-top: 4.5rem; /* Añade espacio arriba para evitar que el navbar cubra el contenido */
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.75); /* Color de los enlaces del navbar */
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, 1); /* Color de los enlaces del navbar al pasar el mouse */
        }
    </style>
</head>
<body>

    <!-- Navbar dark -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Servicios Escolares</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Listado de Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alumnos.create') }}">Agregar Alumno</a>
                    </li>
                    <!-- Agrega más elementos de menú según sea necesario -->
                </ul>
            </div>
        </div>
    </nav>

    

    <!-- Incluir Bootstrap JS (incluye Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>