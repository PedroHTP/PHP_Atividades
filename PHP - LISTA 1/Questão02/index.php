<?php 
    $title = "Questão 02";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 02: Fahrenheit para Celsius</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fahrenheit = $_POST["fahrenheit"];

            // Fórmula de conversão de Fahrenheit para Celsius
            $celsius = ($fahrenheit - 32) * 5 / 9;
            $celsius = round($celsius, 2); // Arredondar para duas casas decimais
        }
    ?>

    <div class="container_resultado" <?= isset($celsius) ? '' : 'hidden' ?>>
        <h2>Resultado</h2>
        <p>
            Temperatura em Fahrenheit: <?=$fahrenheit ?? ''?> °F<br>
            Temperatura em Celsius: <?=$celsius ?? ''?> °C<br>
        </p>

    </div>

</body>
</html>