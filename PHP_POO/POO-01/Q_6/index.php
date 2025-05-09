<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once './produto.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $produto = new Produto(nome: $_POST['nome'] ?? '', preco: $_POST['preco'] ?? 0, quantidade: $_POST['quantidade'] ?? 0); 
        }

        if (isset($_POST['quantidadeConsumida'])) {
                $quantidadeConsumida = intval(value: $_POST['quantidadeConsumida'] ?? 0);
                $msg = $produto->consumir(quantidadeConsumida: $quantidadeConsumida);
        }

    ?>
    <form action="./index.php" method="post" class="<?= isset($_POST['acao'])  ? 'desativado' : ''?>">
            <h1>Questão 6: Produto</h1>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?= htmlspecialchars(string: $_POST['nome'] ?? '') ?>">

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" required value="<?= htmlspecialchars(string: $_POST['preco'] ?? '')?>">

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required value="<?= htmlspecialchars(string: $_POST['quantidade'] ?? '')?>">
            <input type="text" name="acao" id="acao" value="calcular" hidden>
            <br>
            <br>
            
            <input type="submit" value="Resgistrar Produto">
            
    </form>
    
    <div class="container_resultado <?= $_POST['acao'] ?? '' == 'calcular'  ? '' : 'desativado'?>">
        <h1>Resultado</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['acao'] == 'calcular') {
                echo $produto;
            }
            if (isset($_POST['quantidadeConsumida'])) {
                    echo $produto;
                    echo $msg;
                }
        ?>
        <p>
            <form action="./index.php" method="post">
                <label for="quantidadeConsumida">Quantidade Consumida:</label>
                <input type="number" name="quantidadeConsumida" id="quantidadeConsumida" required value="<?= htmlspecialchars(string: $_POST['quantidadeConsumida'] ?? '')?>">
                <input type="text" name="acao" id="acao" value="consumir" hidden>
                <input type="hidden" name="nome" value="<?= htmlspecialchars(string: $produto->nome ?? '') ?>">
                <input type="hidden" name="preco" value="<?= htmlspecialchars(string: $produto->preco  ?? '')?>">
                <input type="hidden" name="quantidade" value="<?= htmlspecialchars(string: $produto->quantidade ?? '')?>">
                <br>
                <br>
                
                <input type="submit" value="Consumir Produto">
                
            </form>
            <br>
            <button onclick="novo()">Registrar novo produto</button>  
        </p>
    </div>

    <script>
        function novo() {
            window.location.href = "./index.php";
        }
    </script>
</body>
</html>