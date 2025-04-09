<?php 
    $title = "Questão 07";
    include_once "../models/head.php";

    if (!isset($_POST['pedido'])) {
        header("Location: ./index.php");
        exit;
    }

    $precos = [
        "X-Burguer" => 10.00,
        "X-Salada" => 12.00,
        "X-Frango" => 14.00,
        "X-Calabresa" => 15.00,
        "X-Bacon" => 17.00,
        "X-Tudo" => 21.00
    ];

    $custo = $precos[$_POST['pedido']] * $_POST['quantidade'];
    $custo = number_format($custo, 2, ',', '.');
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Lachonete AstroFood</h1>

    <div class="container_resultado">
        <h2>Resultado</h2>
        <p>
            Você pediu <?=$_POST['quantidade'] ?? ''?> <?= $_POST['pedido'] ?? ''?><br>
            O seu pedido vai te custar <?=$custo ?? ''?> reais<br>
            <strong>Obrigado pela preferência!</strong><br>
        </p>
    </div>
</body>
</html>