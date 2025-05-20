<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa Jurídica</title>
</head>
<body>
    <form action="./perfil.php" method="post">
        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" required><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" required><br>

        <label for="nomefantasia">Nome fantasia:</label>
        <input type="text" name="nomefantasia" id="nomefantasia"><br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" required><br>

        <input type="hidden" name="tipo" value="juridica">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>