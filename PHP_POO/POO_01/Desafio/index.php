<!DOCTYPE html>
<html lang="php">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <form action="./resultado.php" method="post">
        <label for="nome">Nome do titular:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="saldo">Saldo: </label>
        <input type="number" name="saldo" id="saldo" step="0.01" required><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>