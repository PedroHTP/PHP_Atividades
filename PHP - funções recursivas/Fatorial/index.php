<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função recursiva: fatorial</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <main>
        <h1>Função recursiva: fatorial</h1>
        <form method="POST">
            <div class="input-group">
                <span>Número:</span>
                <input type="number" name="numero" id="numero" required min="0" step="1" value="<?php echo isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : ''; ?>">
                <button type="submit">Calcular</button>
            </div>
        </form>

        <?php
        function fatorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * fatorial($n - 1);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            $resultado = fatorial($numero);
            echo "<p>O fatorial de $numero é ".number_format($resultado, 0, ",", ".")."</p>";
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