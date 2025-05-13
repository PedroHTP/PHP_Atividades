<?php

    class Conta {
        public string $nome;
        public float $saldo;

        public function __construct($nome, $saldo) {
            $this -> nome = strip_tags(string: $nome?? '') ;
            $this -> saldo = floatval(value: strip_tags(string: $saldo ?? '')) < 0 ? 0 : floatval(value: strip_tags(string: $saldo ?? ''));
        }

        public function depositar($dinheiro): string {
            if ($dinheiro > 0) {
                $this -> saldo += $dinheiro;
                return "Depósito de R$ ". number_format(num: $dinheiro, decimals: 2, decimal_separator: ',', thousands_separator: '.') ." realizado com sucesso!";
            } else {
                return "Valor inválido para depósito!";
            }
        }

        public function sacar($dinheiro): string {
            if ($dinheiro > 0 && $this -> saldo >= $dinheiro) {
                $this -> saldo -= $dinheiro;
                return "Saque de R$ ". number_format(num: $dinheiro, decimals: 2, decimal_separator: ',', thousands_separator: '.') ." realizado com sucesso!";
            } else {
                return "Valor inválido para saque ou saldo insuficiente!";
            }
        }

        public function __toString(): string {
            return 
            "
            Nome do titular: {$this -> nome} <br> 
            Saldo atual: R$ ". number_format(num: $this -> saldo, decimals: 2, decimal_separator: ',', thousands_separator: '.') ." <br>
            ";
        }
    }