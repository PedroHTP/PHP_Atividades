<?php 
    class Aluno
    {
        public string $nome;
        public string $matricula;
        public int $quantNota;
        public array $notas = [];
        public function __construct($nome, $matricula, $quantNota, $notas) {
            $this -> nome = strip_tags(string: $nome?? '') ;
            $this -> matricula = strip_tags(string : $matricula ?? '');
            $this -> quantNota = intval (value: strip_tags(string: $quantNota ?? null)) < 2 ? 2 : intval (value: strip_tags(string: $quantNota ?? null));

            foreach ($notas ?? [] as $key => $value) {
                is_numeric(value: $value) ? $this -> notas[$key] = floatval(value: $value) : $this -> notas[$key] = 0;
            }
        }

        public function media(): float {
            return array_sum(array: $this -> notas) / count(value: $this -> notas);
        }
        public function situacao(): string {
            return $this -> media() >= 6 ? "Aprovado" : "Reprovado";
        }
        public function __toString(): string {
            return 
            "
            Nome: {$this -> nome} <br> 
            Matricula: {$this -> matricula} <br> 
            Quantidade de notas: {$this -> quantNota} <br>
            Notas: " . implode(separator: ", ",  array: $this -> notas) . ".<br> 
            Média: {$this -> media()} <br> 
            Situação: {$this -> situacao()} <br>
            ";
        }

    }
    
?>