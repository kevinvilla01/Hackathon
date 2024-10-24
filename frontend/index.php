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
            background-color: #f8f9fa; /* Color de fondo claro */
        }
        .navbar {
            height: 100vh;
            padding-top: 20px;
            background-color: #343a40; /* Color de fondo de la barra de navegación */
            color: white;
        }
        .navbar h2 {
            color: #ffffff; /* Color del título */
        }
        .navbar .nav-link {
            color: #ffffff; /* Color de los enlaces */
        }
        .navbar .nav-link:hover {
            color: #ffc107; /* Color al pasar el mouse sobre los enlaces */
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .card {
            border: none; /* Sin borde en las tarjetas */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para las tarjetas */
        }
        .votos {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-right: 10px;
        }
        .btn-link {
            color: #007bff; /* Color de los botones de votos */
        }
        .btn-link:hover {
            color: #0056b3; /* Color al pasar el mouse sobre los botones de votos */
        }
        h1 {
            color: #343a40; /* Color del encabezado principal */
        }
    </style>
</head>
<body>

    <div class="navbar bg-dark flex-column">
        <h2>NRF</h2>
        <a class="nav-link" href="#">Perfil</a>
        <a class="nav-link" href="#">Principal</a>
        <a class="nav-link" href="verificador.php">Verificador</a>
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
                        <h5 class="card-title">Selena esta <h5 style="font-weight: bold;" >E M B A R A Z A D A</h5></h5>
                        <p class="card-text">Sra de las noticias da a conocer que tuvo una vision de que Selena Gomez estaba EMBARAZADA.</p>
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
                        <h5 class="card-title">En Culiacan, militares y Guardia disparan a hombre y lo detienen</h5>
                        <p class="card-text">La noche del pasado 7 de octubre, Alexis viajaba en su camioneta en la Colonia Miguel Hidalgo en Culiacán, Sinaloa, cuando militares y elementos de la Guardia Nacional le dispararon y lo detuvieron. Videos y audios obtenidos por Reforma evidencian que las fuerzas de seguridad pretendían matarlo pero se dieron cuenta que eran grabados.</p>
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

    <script src="https://code.jquery.com /jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>