<?php
// Habilitar CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Aquí puedes manejar las solicitudes
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Si es una solicitud OPTIONS, simplemente devuelve un 200 OK
    http_response_code(200);
    exit();
}

// Aquí va el resto de tu código para manejar la lógica de la predicción
$data = json_decode(file_get_contents("php://input"), true);
$texto = $data['texto'];

// Aquí va la lógica para procesar el texto y devolver la respuesta
// Por ejemplo:
$response = ['resultado' => 'Aquí va el resultado de tu predicción'];
echo json_encode($response);
?>
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
        <form action="" method="POST">
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
    document.getElementById("btnVerificar").addEventListener("click", async function() {
        var texto = document.getElementById("inputTexto").value;

        // Preprocesamiento del texto
        var textoProcesado = preprocessText(texto);

        try {
            // Llama al modelo predictivo y obtén la predicción
            var prediccion = await predict(textoProcesado);

            // Actualiza el contenido del modal con la predicción
            document.getElementById("resultadoPrediccion").innerText = prediccion;

            // Muestra el modal
            $('#prediccionModal').modal('show');
        } catch (error) {
            console.error("Error en la función de verificación:", error);
            document.getElementById("resultadoPrediccion").innerText = "Error al obtener la predicción.";
            $('#prediccionModal').modal ('show');
        }
    });

    // Función para preprocesar el texto
    function preprocessText(text) {
        // Tokenización
        var tokens = text.split(" ");

        // Eliminación de stopwords
        var stopwords = ["de", "la", "que", "el", "en", "un", "los", "se", "no", "me", "a", "mi", "tu", "te", "ti", "su", "le", "lo", "ma", "mis", "tus", "sus", "nuestro", "nuestra", "nuestros", "vuestra", "vuestras", "vuestros", "mío", "mía", "míos", "mías", "tuyo", "tuya", "tuyos", "tuyas", "suyo", "suya", "suyos", "suyas", "nuestro", "nuestra", "nuestros", "nuestras"];
        tokens = tokens.filter(function(token) {
            return !stopwords.includes(token.toLowerCase());
        });

        // Eliminación de caracteres especiales
        tokens = tokens.map(function(token) {
            return token.replace(/[^a-zA-Z0-9]/g, '');
        });

        // Unión de los tokens
        var textoProcesado = tokens.join(' ');

        return textoProcesado;
    }

    // Función para hacer la predicción
    async function predict(textoProcesado) {
        try {
            // Hacer la llamada al backend
            const response = await fetch('http://localhost:5000/predict', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                mode:"cors",
                body: JSON.stringify({ texto: textoProcesado })
            });

            if (!response.ok) {
                const errorMessage = await response.text(); // Obtener el mensaje de error del servidor
                throw new Error(`Error en la predicción: ${response.status} ${errorMessage}`);
            }

            const data = await response.json();
            return data.prediccion; // Retorna la predicción del servidor
        } catch (error) {
            console.error("Error en la función predict:", error);
            throw error;
        }
    }
</script>
</body>
</html>

