<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1: Apresentção</title>
</head>
<body>
    <?php 
        class Pessoa {
            public string $nome;
            public int $idade;

            public function __construct(string $nome, int $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
            }
            public function Apresentar(): void {
                echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.<br>";
            }
        }
        
        $pessoa1 = new Pessoa(nome: "João", idade: 25);
        $pessoa2 = new Pessoa(nome: "Maria", idade: 30);

        $pessoa1 ->Apresentar();
        $pessoa2 -> Apresentar();
    ?>
</body>
</html>