<?php
    class Cliente {
        public string $logradouro;
        public string $bairro;

        public function verEndereco(): string {
            return "Logradouro: {$this -> logradouro} <br> Bairro: {$this -> bairro}";
        }
    }
    
    class ClientePessoaFisica extends Cliente {
        
        public string $nome;
        public string $cpf;

        public function __construct($logradouro, $bairro, $nome, $cpf) {
            $this->logradouro = $logradouro;
            $this->bairro = $bairro;
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function verInformacaoUsuario() : string {
            return "Nome: {$this->nome} <br> CPF: {$this->cpf}";
        }
    }

    class ClientePessoaJuridica extends Cliente {

        public string $nomeFantasia;
        public string $cnpj;

        public function __construct($logradouro, $bairro, $nomeFantasia, $cnpj) {
            $this->logradouro = $logradouro;
            $this->bairro = $bairro;
            $this->nomeFantasia = $nomeFantasia;
            $this->cnpj = $cnpj;
        }

        public function verInformacaoEmpresa(): string {
            return "Nome fantasia: {$this->nomeFantasia} <br> CNPJ: {$this->cnpj}";
        }
        
    }