<?php

$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação do Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="formulario">

        <h1>Cadastro realizado com sucesso</h1>

        <p><strong>Nome:</strong> <?php echo $nome; ?></p>

        <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>

        <p><strong>Profissão:</strong> <?php echo $profissao; ?></p>

        <p><strong>Salário pretendido:</strong> R$ <?php echo $salario; ?></p>

        <p><strong>Experiência anterior:</strong> <?php echo $experiencia; ?></p>

        <hr>

        <p>
            <?php
            echo "Olá, <strong>$nome!</strong> <br>";
            echo "Seu cadastro para oportunidades na área de <strong>$profissao</strong> foi recebido com sucesso. <br>";
            echo "Sua experiência informada foi: $experiencia.";
            ?>
        </p>

        <a href="cadastro.html">Voltar ao formulário</a>

    </div>

</body>
</html>