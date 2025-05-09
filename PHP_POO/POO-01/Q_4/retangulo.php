<?php 
    class Retangulo {
        private $base;
        private $largura;

        public function __construct($base, $largura) {
            $this->base = $base;
            $this->largura = $largura;
        }

        public function area(): float|int {
            return $this->base * $this->largura;
        }

        public function perimetro(): int {
            return 2 * ($this->base + $this->largura);
        }
    }
?>