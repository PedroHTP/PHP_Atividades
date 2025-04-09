<?php 
    $title = "Questão 03";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 03: número par ou impar</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numeoro" id="numeoro" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numeoro"];

            $resultado = $numero % 2 == 0 ? 'par' : 'impar';
        }
    ?>

    <div class="container_resultado" <?= isset($resultado) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>
            O número é: <?=$resultado ?? ''?><br>
        </p>

    </div>

</body>
</html>