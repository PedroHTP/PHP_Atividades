<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa Física</title>
</head>
<body>
    <form action="./perfil.php" method="post">
        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" required><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required><br>

        <input type="hidden" name="tipo" value="fisica">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>