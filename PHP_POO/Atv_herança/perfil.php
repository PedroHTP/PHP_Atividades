<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <?php 
        require_once './cliente.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['tipo'] === 'fisica') {
                $cliente = new ClientePessoaFisica(logradouro: $_POST['logradouro'], bairro: $_POST['bairro'], nome: $_POST['nome'], cpf: $_POST['cpf']);
                

                echo $cliente->verEndereco();
                echo "<br>";
                echo $cliente->verInformacaoUsuario();

            } else if ($_POST['tipo'] === 'juridica') {
                $cliente = new ClientePessoaJuridica(logradouro: $_POST['logradouro'], bairro: $_POST['bairro'], nomeFantasia: $_POST['nomefantasia'], cnpj: $_POST['cnpj']);

                echo $cliente->verEndereco();
                echo "<br>";
                echo $cliente->verInformacaoEmpresa();
                
            } else {

            }
        }

    ?>
    <div>

    </div>
</body>
</html>