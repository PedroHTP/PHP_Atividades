<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função recursiva: Fibonacci</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <main>
        <h1>Função recursiva: Fibonacci</h1>
        <form method="POST">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required min="0" step="1" value="<?php echo isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : ''; ?>">
            <button type="submit">Calcular</button>
        </form>

        <?php
        function Fibonacci($n) {
            if ($n <= 1) {
                return $n;
            } else {
                return Fibonacci($n-1) + Fibonacci($n-2);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            $resultado = Fibonacci($numero);
            echo "<p>O "."$numero"."° número da sequência de Fibonacci é ".number_format($resultado, 0, ",", ".")."</p>";
        }

        echo 
            "
                <script>
                    document.querySelector('input[name=\"numero\"]').select();
                </script>
            ";
        ?>
    </main>
    
</body>
</html>