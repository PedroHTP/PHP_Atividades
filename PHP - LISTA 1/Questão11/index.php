<?php
    // Path: PHP - LISTA 1/Questão10/index.php
    // Sessão para armazenar dados entre páginas
    session_start();

    $_SESSION['numeros'] = $_SESSION['numeros'] ?? [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION['numeros'][] = $_POST["numero"];

        if (count($_SESSION['numeros']) < 5) {
            $index = count($_SESSION['numeros']) + 1;
        } else {
            header("Location: ./resultado.php");
            exit;
        }
    }

    $title = "Questão 11";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 11: números</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Insira 5 números: (<?=$index ?? 1?>)</label>
            <input type="number" name="numero" id="numero" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>