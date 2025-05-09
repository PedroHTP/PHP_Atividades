<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2: Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container_form">
        <?php 
            $lado1 = $_POST['lado1'] ?? null;
            $lado2 = $_POST['lado2'] ?? null;
            $lado3 = $_POST['lado3'] ?? null;
        ?>

        <h1>Calcule a área de um triângulo</h1>
        <p>Insira os lados do triângulo:</p>
        <form action="./index.php" method="post">
            <input type="number" placeholder="Lado 1" name="lado1" id="lado1" value="<?=$lado1?>" min="1">
            <input type="number" placeholder="Lado 2" name="lado2" id="lado2" value="<?=$lado2?>" min="1">
            <input type="number" placeholder="Lado 3" name="lado3" id="lado3" value="<?=$lado3?>" min="1">
            <input type="submit" value="Calcular">
        </form>
    </div>
        
    <div  class="container_form <?= $_SERVER['REQUEST_METHOD'] === 'POST' ? '' : 'desativado'?>">
        <h1>Resultado</h1>
        <?php 
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                

                if (empty($lado1) || empty($lado2) || empty($lado3)) {
                    echo "Preencha todos os campos!";
                    exit;
                }

                if ($lado1 < 1 || $lado2 < 1 || $lado3 < 1) {
                    echo "Insira valores maiores de 1!";
                    exit;
                }

                $triangulo1 = new Triangulo(lado1: $lado1, lado2: $lado2, lado3: $lado3);
                echo $triangulo1->getArea();
            }

        ?>
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

        
    ?>
</body>
</html>