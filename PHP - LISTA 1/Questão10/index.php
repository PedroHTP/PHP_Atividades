<?php
    // Path: PHP - LISTA 1/Questão10/index.php
    // Sessão para armazenar dados entre páginas
    session_start();

    $_SESSION['idades'] = $_SESSION['idades'] ?? [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["idade"] > 0) {
            $_SESSION['idades'][] = $_POST["idade"];
        } else {
            header("Location: ./resultado.php");
            exit;
        }
    }

    $title = "Questão 10";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 10: idades</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="idade">Insira uma idade (finalize digitando um valor menor que 1)</label>
            <input type="number" name="idade" id="idade" required value="<?=$_POST["idade"] ?? ""?>"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>