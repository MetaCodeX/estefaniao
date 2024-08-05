<?php
// Lista de enlaces
$enlaces = [
    'https://www.google.com',
    'https://www.facebook.com',
    'https://www.twitter.com',
    'https://www.instagram.com'
];

// Generar un índice aleatorio
$indiceAleatorio = array_rand($enlaces);

// Obtener el enlace aleatorio
$enlaceAleatorio = $enlaces[$indiceAleatorio];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirección Aleatoria</title>
    <style>
        .button {
            background-color: #4CAF50; /* Verde */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Usamos un formulario para manejar la redirección -->
    <form method="post">
        <button type="submit" class="button">Haz clic aquí para ir a un enlace aleatorio</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Redirigir al enlace aleatorio
        header("Location: $enlaceAleatorio");
        exit;
    }
    ?>
</body>
</html>
