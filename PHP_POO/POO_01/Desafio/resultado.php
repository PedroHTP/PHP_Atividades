<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
        require_once './conta.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conta = new Conta(nome: $_POST['nome'] ?? '', saldo: $_POST['saldo'] ?? 0); 
        }

        if (isset($_POST['dinheiro'])) {
                $dinheiro = floatval(value: $_POST['dinheiro'] ?? 0);
                $acao = $_GET['acao'] ?? '';
                $msg = $acao == 'depositar' ? $conta->depositar(dinheiro: $dinheiro) : $conta->sacar(dinheiro: $dinheiro);
        }
    ?>
<body>
    
    <div class="resultado <?= isset($_GET['acao'])  ? '' : 'desativado'?>">
        <?php 
            echo $msg ?? '';
            echo "<br>";
            echo $conta;
        ?>
    </div>

    <form action="./resultado.php" method="post">
        <label for="dinheiro">Valor a depositar/sacar:</label>
        <input type="number" name="dinheiro" id="dinheiro" step="0.01" required>
        
        <input type="hidden" name="nome" id="nome" required value="<?=$conta->nome?>"><br>

        <input type="hidden" name="saldo" id="saldo" required value="<?=$conta->saldo?>"><br>

        <input type="submit" value="Despositar" formaction="./resultado.php?acao=depositar">
        <input type="submit" value="Sacar" formaction="./resultado.php?acao=sacar">
    </form>
</body>
</html>