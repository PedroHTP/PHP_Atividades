<?php
    class Produto {
        public string $nome;
        public float $preco;

        public function __construct(string $nome, float $preco) {
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function exibirProduto(): string {
            return "Nome: {$this->nome} <br> Preço: R$ {$this->preco}";
        }
    }

    class Livro extends Produto {
        public string $autor;

        public function __construct(string $nome, float $preco, string $autor) {
            parent::__construct(nome: $nome, preco: $preco);
            $this->autor = $autor;
        }

        public function exibirProduto(): string {
            return parent::exibirProduto() . "<br> Autor: {$this->autor}";
        }
    }

    class DVD extends Produto {
        public string $duracao;

        public function __construct(string $nome, float $preco, string $duracao) {
            parent::__construct(nome: $nome, preco: $preco);
            $this->duracao = $duracao;
        }

        public function exibirProduto(): string {
            return parent::exibirProduto() . "<br> Diretor: {$this->duracao}";
        }
    }

    $produto1 = new Produto(nome: "Produto Genérico", preco: 50.00);
    echo $produto1->exibirProduto();
    echo "<br><br>";
    $produto2 = new Livro(nome: "Livro PHP", preco: 30.00, autor: "João Silva");
    echo $produto2->exibirProduto();
    echo "<br><br>";
    $produto3 = new DVD(nome: "Filme Ação", preco: 40.00, duracao: "120 minutos");
    echo $produto3->exibirProduto();
    echo "<br><br>";