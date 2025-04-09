<?php 
    $title = "Questão 06";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 06: temperatura do corpo</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="temperatura">Temperatura do corpo:</label>
        <input type="number" name="temperatura" id="temperatura" required value="<?=$_POST["temperatura"] ?? 0?>"><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperatura = $_POST["temperatura"];
            $temperatura_normal = 36.7;

            $resultado = $temperatura > $temperatura_normal ? 'Você está com febre.' : 'Vecê está saudável.';
        }
    ?>

    <div class="container_resultado" <?= isset($resultado) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>
            Seu corpo está a <?= $temperatura ?? ''?>°C<br>
            A temperatura normal é de <?= $temperatura_normal ?? ''?>°C<br>
            <?= $resultado ?? ''?><br>
        </p>
    </div>

</body>
</html>