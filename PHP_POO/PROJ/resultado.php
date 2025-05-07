<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro confirmado</title>
</head>
<body>
    
    <?php 

        // require_once 'usuario.php';
        // $usuario = new Usuario();
        // $msg = $usuario->Cadastrar();
        // echo $msg;

    Class Usuario {
       public string $nome;
       public string $email;
       public int $idade;

       public function Cadastrar($nome, $email, $idade): string {

            $nome =  htmlspecialchars (string: strip_tags(string: $nome));
            $email = htmlspecialchars (string: strip_tags (string: $email));
            $idade = intval (value: htmlspecialchars(string: strip_tags(string: $idade)));

            $primeirocaractere = $nome[0];
            $nome = strtoupper(string: $primeirocaractere) . substr(string: $nome, offset: 1);

            if (empty($nome) || empty($email) || empty($idade)) {
                return "Preencha todos os campos!";
            } else if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
                return "E-mail inválido!";
            } else if ($idade < 0 || $idade > 120) {
                return "Idade inválida!";
            }

            $this->nome = $nome;
            $this->email = $email;
            $this->idade = $idade;

            return "O usuário <strong> {$this->nome}</strong>, de {$this->idade} anos, com o e-mail <strong> {$this->email} </strong> cadastrado com sucesso!";
        }

    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $usuario = new Usuario();
        $msg = $usuario->Cadastrar(nome: $_POST['usuario'], email: $_POST['email'], idade: $_POST['idade']);
        echo $msg;
    } else {
        header(header: 'Location: index.php');
        exit;
    }
    ?>
    
    <p><button onclick="voltar()">Voltar</button></p>

    <script>
        function voltar() {
            window.history.back();
        }
    </script>
</body>
</html>