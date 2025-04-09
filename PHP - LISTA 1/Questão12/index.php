<?php
    // Path: PHP - LISTA 1/Questão10/index.php
    // Sessão para armazenar dados entre páginas
    session_start();

    $_SESSION['frases'] = $_SESSION['frases'] ?? [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION['frases'][] = $_POST["frases"];

        if (count($_SESSION['frases']) < 5) {
            $index = count($_SESSION['frases']) + 1;
        } else {
            header("Location: ./resultado.php");
            exit;
        }
    }

    $title = "Questão 12";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 12: frases</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="frases">Insira 5 frases: (<?=$index ?? 1?>)</label>
            <input type="text" name="frases" id="frases" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>