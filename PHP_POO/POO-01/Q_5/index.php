<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <div class="container_form">
        <form action="./notas.php" method="post">
            <h1>Questão 5: Aluno</h1>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?= htmlspecialchars(string: $_POST['nome'] ?? '') ?>">

            <label for="marticula">Matricula:</label>
            <input type="text" name="matricula" id="matricula" required value="<?= htmlspecialchars(string: $_POST['matricula'] ?? '')?>">

            <label for="quantNota">Quantidade de notas:</label>
            <input type="number" name="quantNota" id="quantNota" required value="<?= htmlspecialchars(string: $_POST['quantNota'] ?? '')?>">

            <input type="submit" value="Entrar">
            
        </form>

    </div>
</body>
</html>