<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .navbar {
            height: 100vh;
            padding-top: 20px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .votos {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="navbar bg-light flex-column">
        <h2>NRF</h2>
        <a class="nav-link" href="#">Perfil</a>
        <a class="nav-link" href="#">Principal</a>
        <a class="nav-link" href="#">Verificador</a>
        <a class="nav-link" href="#">Preguntas Frecuentes</a>
        <a class="nav-link" href="#">Nosotros</a>
    </div>

    <div class="content">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Buscar</button>
            </div>
        </div>

        <h1>Bienvenido a NRF</h1>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h5 class="card-title">Título de la Publicación 1</h5>
                        <p class="card-text">Contenido de la publicación 1. Aquí puedes escribir sobre cualquier tema que desees discutir.</p>
                    </div>
                    <!-- Votos -->
                    <div class="col-md-1 votos">
                        <button class="btn btn-link" style="font-size: 24px;">↑</button>
                        <span id="votos">10</span>
                        <button class="btn btn-link" style="font-size: 24px;">↓</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h5 class="card-title">Título de la Publicación 2</h5>
                        <p class="card-text">Contenido de la publicación 2. Comparte tus pensamientos y opiniones.</p>
                    </div>
                    <!-- Votos -->
                    <div class="col-md-1 votos">
                        <button class="btn btn-link" style="font-size: 24px;">↑</button>
                        <span id="votos">5</span>
                        <button class="btn btn-link" style="font-size: 24px;">↓</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>