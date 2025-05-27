<?php
    class Funcionario {
        public string $nome;
        public float $salario;

        public function __construct(string $nome, float $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }
        public function exibirDados(): string {
            return "Nome: {$this->nome} <br> Salário: R$ {$this->salario}";
        }


    }

    class Gerente extends Funcionario {
        public string $departamento;

        public function __construct($nome, $salario, $departamento) {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->departamento = $departamento;
        }

        public function exibirDados(): string {
            return parent::exibirDados() . "<br> Departamento: {$this->departamento}";
        }
    }

    class Programador extends Funcionario {
        public string $linguagem;

        public function __construct($nome, $salario, $linguagem) {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->linguagem = $linguagem;
        }

        public function exibirDados(): string {
            return parent::exibirDados() . "<br> Linguagem: {$this->linguagem}";
        }
    }

    $funcionario1 = new Funcionario(nome: "João", salario: 3000.00);
    echo $funcionario1->exibirDados();
    echo "<br><br>";

    $funcionario2 = new Gerente(nome:"Maria", salario: 3500.00, departamento: "Vendas");
    echo $funcionario2->exibirDados();
    echo "<br><br>";

    $funcionario3 = new Programador(nome: "Pedro", salario: 7000.00, linguagem: "PHP");
    echo $funcionario3->exibirDados();
    echo "<br><br>";