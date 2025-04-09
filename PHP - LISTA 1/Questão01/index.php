<?php 
    $title = "Questão 01";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 01</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num2">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <label for="num2">Número 4:</label>
        <input type="number" name="num4" id="num4" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $num4 = $_POST["num4"];

            $soma = $num1 + $num2 + $num3 + $num4;
            $media = $soma / 4;
        }
    ?>
    
    <div class="container_resultado" <?= isset($media) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>Média: <?=$media ?? ''?></p>
        <p>Resultado: <?= isset($media) ? ($media >= 7 ? 'Aprovado' : 'Reprovado') : ''; ?></p>

    </div>
</body>
</html>