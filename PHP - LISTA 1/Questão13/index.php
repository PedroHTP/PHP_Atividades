<?php

    $title = "Questão 13";
    include_once "../models/head.php";

    function escreva($texto) {
        echo strip_tags($texto);
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Questão 13: função escreva</h1>

    <div class="container_resultado">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="frases">Insira um texto:</label>
            <input type="text" name="texto" id="texto" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="container_resultado" <?=isset($_POST["texto"]) ? "" : "hidden"?>>
        <h2>Resultado</h2>
        <?php 
            escreva($_POST["texto"] ?? "");
        ?>
    </div>

</body>
</html>