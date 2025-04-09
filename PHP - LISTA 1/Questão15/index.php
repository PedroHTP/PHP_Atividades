<?php

    $title = "Questão 15";
    include_once "../models/head.php";

    function calculaAreaRetangulo($largura, $altura) {
        return $largura * $altura;
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 15: calcular área do retângulo</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="largura">Insira a largura da área (em metros):</label>
            <input type="number" name="largura" id="largura" required><br><br>

            <label for="altura">Insira a altura da área (em metros):</label>
            <input type="number" name="altura" id="altura" required><br><br>

            <input type="submit" value="Calcular">
        </form>
    </div>

    <div class="container_resultado" <?=isset($_POST["largura"]) ? "" : "hidden"?>>
        <h2>Resultado</h2>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "A área do retângulo é " . calculaAreaRetangulo($_POST["largura"] ?? 0, $_POST["altura"] ?? 0) . " m².";
            }
        ?>
    </div>

</body>
</html>