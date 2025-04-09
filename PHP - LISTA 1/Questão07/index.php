<?php 
    $title = "Questão 07";
    include_once "../models/head.php";
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Lachonete AstroFood</h1>

    <form action="./cardapio.php" method="post">
        <label for="nome">Qual seu nome?</label>
        <input type="text" name="nome" id="nome" required value="<?=$_POST["nome"] ?? ""?>"><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>