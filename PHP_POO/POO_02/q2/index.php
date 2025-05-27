<?php
    class Animal {
        public string $nome;

        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function fazerSom(): string {
            return "{$this->nome}: Som genérico";
        }
    }

    class Cachorro extends Animal {
        public function fazerSom(): string {
            return "{$this->nome}: Au Au!";
        }
    }

    class Gato extends Animal {
        public function fazerSom(): string {
            return "{$this->nome}: Miau!";
        }
    }

    $animal1 = new Animal(nome: "Genérico");
    echo $animal1->fazerSom();
    echo "<br><br>";
    $animal2 = new Gato(nome:"Mimi");
    echo $animal2->fazerSom();
    echo "<br><br>";
    $animal3 = new Cachorro(nome:"Rex");
    echo $animal3->fazerSom();