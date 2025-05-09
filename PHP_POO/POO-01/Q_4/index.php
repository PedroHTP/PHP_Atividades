<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4: Retângulo</title>
</head>
<body>
    <div class="container_form">
        <form action="./index.php" method="post">
            <h1>Questão 4: Retângulo</h1>
            <label for="base">Base (cm):</label>
            <input type="number" name="base" id="base" required min="0" value="<?= isset($_POST['base']) ? htmlspecialchars(string: $_POST['base']): ''?>">

            <label for="largura">Largura (cm):</label>
            <input type="number" name="largura" id="largura" required min="0" value="<?= isset($_POST['largura']) ? htmlspecialchars(string: $_POST['base']): ''?>">

            <button type="submit">Calcular</button>
            
        </form>
    </div>

    <div class="container_resultado">
        <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    require_once './retangulo.php';
                    $retangulo = new Retangulo(base: intval(value: strip_tags(string: $_POST['base'])), largura: intval(value: strip_tags (string: $_POST['largura'])));   
                    
                    echo
                    "
                        <p>A área do retângulo é: {$retangulo ->area()}</p>
                        <p>O perímetro do retângulo é: {$retangulo ->perimetro()}</p>
                    ";
                }
            ?>
    </div>
</body>
</html>