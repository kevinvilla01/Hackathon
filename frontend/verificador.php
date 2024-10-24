<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Noticias Falsas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .verificador {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="verificador">
        <h2>Verificador de Noticias Falsas</h2>
        <p>Pega aquí el texto o la URL que deseas verificar:</p>
        <form action="mandarNot.php" method="POST" >
            <textarea class="form-control" id="inputTexto" rows="5" placeholder="Introduce texto o URL aquí..."></textarea>
        </form>
        <button class="btn btn-primary mt-3" id="btnVerificar" type="button">Verificar</button>
    </div>

    <!-- Modal para mostrar la predicción -->
    <div class="modal fade" id="prediccionModal" tabindex="-1" role="dialog" aria-labelledby="prediccionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="prediccionModalLabel">Resultado de la Verificación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="resultadoPrediccion">Aquí aparecerá el resultado de la verificación.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Simulación de la función de verificación
        document.getElementById("btnVerificar").addEventListener("click", function() {
            var texto = document.getElementById("inputTexto").value;

            // Aquí debes llamar a tu modelo predictivo y obtener la predicción
            // Por simplicidad, simularemos una respuesta
            var prediccion = "La noticia es falsa"; // Cambia esto por tu lógica de predicción

            // Actualiza el contenido del modal con la predicción
            document.getElementById("resultadoPrediccion").innerText = prediccion;

            // Muestra el modal
            $('#prediccionModal').modal('show');
        });
    </script>
</body>
</html>