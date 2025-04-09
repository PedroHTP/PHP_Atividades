<?php 
    $title = "Questão 09";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 9: pares de 1 a 100</h1>

    <div class="container_resultado">
        <h2>Resultado</h2>
        <?php 
            for ($i=1; $i <= 100; $i++) { 
                if ($i % 2 != 0) continue;
                echo ($i) . "<br>";
            }
        ?>
    </div>

</body>
</html>