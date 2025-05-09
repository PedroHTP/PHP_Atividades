<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once './aluno.php';

        $aluno = new Aluno(nome: $_POST['nome'] ?? '', matricula: $_POST['matricula'] ?? '', quantNota: $_POST['quantNota'] ?? 2, notas: $_POST['notas'] ?? []);

    ?>
    <div class="container_form <?= $_POST['acao'] ?? '' == 'calcular'  ? 'desativado' : ''?>">
        <h1>Olá <?=$aluno->nome?></h1>

        <p>
            Matrícula : <?=$aluno->matricula?>
            <br>
            <br>
            Insira suas notas:
        </p>

        <form action="./notas.php" method="post">
            
            <?php 
                for ($i=0; $i < $aluno->quantNota; $i++) {
                    echo "
                    <label for='notas[{$i}]'>Nota ". ($i + 1) ."</label>
                    <input type='number' name='notas[{$i}]' step='0.1' required min='0' max='10'> <br>  <br> 
                    ";
                }

                input:
            ?>
            <input type="hidden" name="nome" value="<?= htmlspecialchars(string: $_POST['nome'] ?? '') ?>">
            <input type="hidden" name="matricula" value="<?= htmlspecialchars(string: $_POST['matricula'] ?? '')?>">
            <input type="hidden" name="quantNota" value="<?= htmlspecialchars(string: $_POST['quantNota'] ?? '')?>">
            <input type="hidden" name="acao" value="calcular">
            <input type="submit" value="Calcular">
        </form>

    </div>

    <div class="container_resultado <?= $_POST['acao'] ?? '' == 'calcular'  ? '' : 'desativado'?>">
        <h1>Resultado</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['notas'])) {
                echo $aluno;
            }
        ?>

    </div>
    
</body>
</html>