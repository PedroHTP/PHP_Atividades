<?php

    $title = "Questão 14";
    include_once "../models/head.php";

    function soma($num1, $num2) {
        return $num1 .' + '. $num2 ." = ". $num1 + $num2;
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 14: função soma</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="num1">Insira o 1° número:</label>
            <input type="number" name="num1" id="num1" required min="0"><br><br>

            <label for="num2">Insira o 2° número:</label>
            <input type="number" name="num2" id="num2" required min="0"><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="container_resultado" <?=isset($_POST["num1"]) ? "" : "hidden"?>>
        <h2>Resultado</h2>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo soma($_POST["num1"] ?? 0, $_POST["num2"] ?? 0);
            }
        ?>
    </div>

</body>
</html>