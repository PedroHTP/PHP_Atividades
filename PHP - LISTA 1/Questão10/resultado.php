<?php
    // Path: PHP - LISTA 1/Questão10/index.php
    // Sessão para armazenar dados entre páginas
    session_start();

    if (!isset($_SESSION['idades'])) {
        header("Location: ./index.php");
        exit;
    }

    $title = "Questão 10";
    include_once "../models/head.php";

    foreach ($_SESSION['idades'] as $value) {
        if ($value < 18) {
            $menores[] = $value;
        } else if ($value > 65) {
            $maiores[] = $value;
        }
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 10: </h1>

    <?php 
        if (!empty($menores)) {
            echo "Temos ". count($menores) . " menor". (count($menores) > 1 ? 'es' : '') . " de idade (menos de 18 anos)<br>";
        }

        if (!empty($maiores)) {
            echo "Temos ". count($maiores) . " maior". (count($maiores) > 1 ? 'es' : ' ') ." de idade (mais de 65 anos)<br>";
        }
        session_unset();
        session_destroy();
    ?>

</body>
</html>