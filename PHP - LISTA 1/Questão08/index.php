<?php 
    $title = "Questão 08";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 8: 1 a 100</h1>

    <div class="container_resultado">
        <h2>Resultado</h2>
        <?php 
            for ($i=0; $i < 100; $i++) { 
                echo ($i + 1) . "<br>";
            }
        ?>
    </div>

</body>
</html>