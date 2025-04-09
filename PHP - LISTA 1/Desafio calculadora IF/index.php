<?php

    $title = "Desafio: calculadora";
    include_once "../models/head.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"] ?? 0;
        $num2 = $_POST["num2"] ?? 0;
        $modo = $_POST["modo"] ?? "soma";

            if ($modo == "soma") {
                $simbolo = "+";
                $resultado = $num1 + $num2;
            }
            if ($modo == "subtracao") {
                $simbolo = "-";
                $resultado = $num1 - $num2;
            }
            if ($modo == "multiplicacao") {
                $simbolo = "*";
                $resultado = $num1 * $num2;
            }
            if ($modo == "divisao") {
                $simbolo = "/";
                $resultado = $num1 / $num2;
            }
            if ($modo == "resto") {
                $simbolo = "%";
                $resultado = $num1 % $num2;
            }
    }
    
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Desafio: calculadora</h1>

    <div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="num1">1° número:</label>
            <input type="text" name="num1" id="num1" required min="0" value="<?=$_POST['num1'] ?? 0?>"><br><br>

            <label for="num2">2° número:</label>
            <input type="text" name="num2" id="num2" required min="0" value="<?=$_POST['num2'] ?? 0?>"><br><br>

            <select name="modo" id="modo">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
                <option value="resto">Resto de divisão</option>
            </select>

            <input type="submit" value="Calcular">
        </form>
    </div>

    <div class="container_resultado" <?= isset($resultado) ? '' : 'hidden'?>>
        <h2>Resultado</h2> 
        <p>
            Você escolheu a operação <?=$modo?>, o resultado é: <br>
            <?=$num1?> <?=$simbolo?> <?=$num2?> = <?=$resultado?><br><br>

        </p>
    </div>

</body>
</html>