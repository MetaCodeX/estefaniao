<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Acumulador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            margin: 10px 0;
        }
        .dado {
            font-weight: bold;
            color: #ff5722;
        }
        .total {
            font-size: 1.2em;
            color: #2196F3;
        }
        .mensaje {
            margin-top: 20px;
            font-size: 1.1em;
            color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        echo "<h1>Ejemplo de Acumulador</h1>\n";
        echo "<p>Cada juego vale $2</p>\n";
        echo "<p><strong>Inicio</strong></p>\n";
        
        $total = 0;
        for($i = 0; $i < 3; $i++) {
            $dado = rand(1, 6);
            echo "<p class='dado'>Tirada de dado: $dado</p>\n";
            $total += $dado;
        }
        
        echo "<p class='total'>Ganaste una cantidad de $total puntos.</p>\n";
        echo "<p>Si juntas más de 16 puntos, ganas $10</p>\n";
        echo "<p><strong>Fin</strong></p>\n";
        ?>
    </div>
</body>
</html>
