<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3: Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $marca = strip_tags(string: $_POST['marca']);
            $modelo = strip_tags(string: $_POST['modelo']);
            
            $velocidadeAtual = $_POST['velocidadeAtual'] ?? 0;

            $carro = new Carro(marca: $marca, modelo: $modelo, velocidadeAtual: $velocidadeAtual);
            
            if (isset($_GET['acelerar'])) {
                $passo = intval(value: $_POST['passo']) ?? 0;
                $carro->acelerar(velocidade: $passo);
            } elseif (isset($_GET['frear'])) {
                $passo = intval(value: $_POST['passo']) ?? 0;
                $carro->frear(velocidade: $passo);
            }

            if ($carro->velocidadeAtual < 0) {
                $carro->velocidadeAtual = 0;
            }
        }
    ?>
    <div class="container_form <?= $_SERVER['REQUEST_METHOD'] === 'POST' ? 'desativado' : ''?>">
        <h1>Registre seu carro</h1>
        
        <form action="./index.php" method="post">
            <input type="text" name="marca" id="marca" placeholder="Marca" value="<?= $_POST['marca'] ?? ''?>">
            <input type="text" name="modelo" id="modelo" placeholder="Modelo" value="<?= $_POST['modelo'] ?? ''?>">
            <input type="submit" value="Registrar">
        </form>
        
    </div>
        
    <div class="container_form <?= $_SERVER['REQUEST_METHOD'] === 'POST' ? '' : 'desativado'?>">
        <h1>Carro registrado</h1>
        
            Marca: <?=$carro->marca?>
            <br>
            Modelo: <?=$carro->modelo?>
            <br>
            VelocidadeAtual: <?=$carro->velocidadeAtual?> km/h

            <?php
                if ($carro->velocidadeAtual > 0) {
                    echo "<br>O carro está em movimento!";
                } else {
                    echo "<br>O carro está parado!";
                }
            ?>
            <br><br>
        
        <form action="./index.php" method="post">
            <input type="hidden" name="marca" value="<?=$carro->marca?>">
            <input type="hidden" name="modelo" value="<?=$carro->modelo?>">
            <input type="hidden" name="velocidadeAtual" value="<?=$carro->velocidadeAtual?>">
            <input type="number" name="passo" id="passo" placeholder="Quanto acelerar/frear?" value="<?= $_POST['passo'] ?? ''?>">
            <input type="submit" value="Acelerar" formaction="./index.php?acelerar=true">
            <input type="submit" value="Frear" formaction="./index.php?frear=true">
        </form>
        
    </div>
    <?php 
        class Carro {
            public string $marca, $modelo;
            public int $velocidadeAtual;

            public function __construct($marca, $modelo, $velocidadeAtual) {
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->velocidadeAtual = $velocidadeAtual;
            }

            public function acelerar(int $velocidade): void {
                $this->velocidadeAtual += $velocidade;
            }

            public function frear(int $velocidade): void {
                $this->velocidadeAtual -= $velocidade;
            }
            
        }
    ?>
</body>
</html>