<?php
    // Path: PHP - LISTA 1/Questão10/index.php
    // Sessão para armazenar dados entre páginas
    session_start();

    if (!isset($_SESSION['frases'])) {
        header("Location: ./index.php");
        exit;
    }

    $title = "Questão 12";
    include_once "../models/head.php";

    
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 12: frases</h1>

    <?php 
        foreach ($_SESSION['frases'] as $value) {
            echo $value . "<br>";
        }
        session_unset();
        session_destroy();
    ?>

</body>
</html>