<?php 
    $title = "Questão 04";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 04: maioridade</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST["idade"];

            
            if ($idade >= 18) {
                $resultado = true;
            } else {
                $resultado = false;
                $restante = 18 - $idade;
                $ano = '';
                $restante > 1 ? $ano = "anos" : $ano = "ano";
            }
        }
    ?>

    <div class="container_resultado" <?= isset($resultado) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>
            Se você tem <?= $idade ?? ''?> anos, <br>
            Você é <?= $resultado ? 'maior' : 'menor'  ?? ''?> de idade.<br> 
            <?php
                if (!$resultado) {
                    echo "
                    Faltam $restante $ano para você completar 18 anos.<br>
                    ";
                }
            ?>
            <?= $resultado ? 'Parabéns!' : 'Aproveite sua juventude!' ?><br>
        </p>

    </div>

</body>
</html>