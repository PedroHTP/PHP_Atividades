<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2: Triângulo</title>
</head>
<body>
    <div>
        <form action="./index.php" method="post">
            <input type="number" name="lado1" id="lado1" >
            <input type="number" name="lado1" id="lado2" >
            <input type="number" name="lado1" id="lado3" >
            <input type="submit" value="Calcular">
        </form>
    </div>

    <div>
        <h1>Resultado</h1>
    </div>
    <?php 
        class Triangulo {
            public float $lado1, $lado2, $lado3;

            public function __construct(float $lado1, float $lado2, float $lado3) {
                $this->lado1 = $lado1;
                $this->lado2 = $lado2;
                $this->lado3 = $lado3;
            }

            public function getArea(): string {
                if (!$this->ValidarTriangulo()) {
                    return "Triângulo inválido!";
                } else {
                    return $this->Area();
                }
                
            }
            
            public function ValidarTriangulo(): bool {
                if ($this->lado1 + $this->lado2 > $this->lado3 && $this->lado1 + $this->lado3 > $this->lado2 && $this->lado2 + $this->lado3 > $this->lado1) {
                    return true;
                } else {
                    return false;
                }
            }

            public function Area(): float {

                // formula de Heron
                $semi_perimento = ($this->lado1 + $this->lado2 + $this->lado3) / 2;

                $area = $semi_perimento * ($semi_perimento - $this->lado1) * ($semi_perimento - $this->lado2) * ($semi_perimento - $this->lado3);

                return sqrt(num: $area);
            }
        }

        $triangulo1 = new Triangulo(lado1: 3, lado2: 4, lado3: 5);
        echo $triangulo1->getArea();
    ?>
</body>
</html>