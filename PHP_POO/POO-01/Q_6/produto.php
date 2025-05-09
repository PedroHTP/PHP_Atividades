<?php

    class Produto
    {
        public string $nome;
        public float $preco;
        public int $quantidade;

        public function __construct($nome, $preco, $quantidade) {
            $this -> nome = strip_tags(string: $nome?? '') ;
            $this -> preco = floatval(value: strip_tags(string: $preco ?? '')) < 0 ? 0 : floatval(value: strip_tags(string: $preco ?? ''));
            $this -> quantidade = intval (value: strip_tags(string: $quantidade ?? null)) < 0 ? 0 : intval (value: strip_tags(string: $quantidade ?? null));
        }

        public function valorTotal(): float {
            return $this -> preco * $this -> quantidade;
        }
        public function __toString(): string {
            return 
            "
            Nome: {$this -> nome} <br> 
            Preço: {$this -> preco} <br> 
            Quantidade: {$this -> quantidade} <br>
            Valor Total: R$ ". number_format(num: $this -> valorTotal(), decimals: 2, decimal_separator: ',', thousands_separator: '.') ." <br>
            Estoque: {$this -> VerificarEstoque()} <br>
            ";
        }

        public function VerificarEstoque(): string {
            return $this -> quantidade > 0 ? "Produto disponível" : "Produto indisponível";
        }

        public function consumir($quantidadeConsumida): string {
            if ($this -> quantidade >= $quantidadeConsumida) {
                $this -> quantidade -= $quantidadeConsumida;
                return "Produto consumido com sucesso!";
            } else {
                return "Quantidade insuficiente em estoque!";
            }
        }
    }