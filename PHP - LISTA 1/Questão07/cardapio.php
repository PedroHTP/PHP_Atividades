<?php 
    $title = "Cardápio";
    include_once "../models/head.php";

    if (!isset($_POST["nome"])) {
        header("Location: ./index.php");
        exit;
    }

?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Lachonete AstroFood</h1>

    <form  action="./resultado.php" method="post" ?>
        <h2>Olá, <?= $_POST["nome"] ?? ""?>! O que você deseja pedir?</h2>
        <strong>Cardápio:</strong>
        <ul class="lista-produtos">
            <li>
                <span class="produto-nome">1 - X-Burguer:</span>  
                <span class="produto-preco">R$ 10,00</span>
            </li>
            <li>
                <span class="produto-nome">2 - X-Salada:</span>
                <span class="produto-preco">R$ 12,00</span>
            </li>
            <li>
                <span class="produto-nome">3 - X-Frango:</span>
                <span class="produto-preco">R$ 14,00</span>
            </li>
            <li>
                <span class="produto-nome">4 - X-Calabresa:</span>
                <span class="produto-preco">R$ 15,00</span>
            </li>
            <li>
                <span class="produto-nome">5 - X-Bacon:</span>
                <span class="produto-preco">R$ 17,00</span>
            </li>
            <li>
                <span class="produto-nome">6 - X-Tudo:</span>
                <span class="produto-preco">R$ 21,00</span>
            </li>
        </ul>
        <label for="pedido">Escolha seu pedido:</label><br>
        <select name="pedido" id="pedido" required>
            <option value="">Selecione</option>
            <option value="X-Burguer">X-Burguer</option>
            <option value="X-Salada">X-Salada</option>
            <option value="X-Frango">X-Frango</option>
            <option value="X-Calabresa">X-Calabresa</option>
            <option value="X-Bacon">X-Bacon</option>
            <option value="X-Tudo">X-Tudo</option>
        </select><br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" min="1" max="30" required value="1"><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>