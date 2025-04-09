<?php 
    $title = "Questão 05";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 05: velocidade máxima</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="velocidade">velocidade:</label>
        <input type="number" name="velocidade" id="velocidade" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $velocidade = $_POST["velocidade"];
            $velocidade_maxima = 110;

            $resultado = $velocidade > $velocidade_maxima ? 'foi multado' : 'não foi multado';
            $excesso = $velocidade - $velocidade_maxima;
        }
    ?>

    <div class="container_resultado" <?= isset($resultado) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>
            O seu carro está a <?= $velocidade ?? ''?> km/h<br>
            A velocidade máxima permitida é de <?= $velocidade_maxima ?? ''?> km/h<br>
            Você <?= $resultado ?? ''?><br>
            <?php
                if ($resultado == 'foi multado') {
                    echo "Você excedeu a velocidade máxima em $excesso km/h!";
                }
            ?>
            <?= $resultado == 'foi multado' ? 'Cuidado!' : 'Continue assim!' ?><br>
        </p>
    </div>

</body>
</html>