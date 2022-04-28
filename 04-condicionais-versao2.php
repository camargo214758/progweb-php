<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP versao2</title>

    <style>
        .aprovado{ color: blue; }
        .reprovado{ color: red; }
        .recuperação{ color: orangered; }
    </style>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>
    <h2>simples</h2>

    <?php
    $numero = 5;
    $outroNumero = 1;
        if( $numero > $outroNumero ){
        echo "<p>$numero é maior que $outroNumero!</p>";
    }
    ?>

    <h2>Composta</h2>

    <?php
    $nota1 = 18;
    $nota2 = 229;
    $media = ($nota1 + $nota2) / 250;
    ?>
    <p>Média: <?=$media?></P>
    <?php
    if( $media >= 4 ){
        ?>
        <p class ='aprovado'>Aprovado</p>
        <?php
    } else {
        ?>
        <p class = 'reprovado'>Reprovado</p>
   <?php
    }
    ?>

    <h2>Encadeada</h2>
    <?php
    if( $media >=7 ){
        ?>
        <p class ="aprovado">Aprovado</p>
        <?php
    }elseif( $media >= 6 && $media < 6 ){
        ?>
        <p class = "recuperação">recuperação</p>
        <?php
    } else {
        ?>
        <p class= 'reprovado'>Reprovado</p>
        <?php
    }
    ?>

    <h2>switch/case</h2>

    <?php
    $opcao = 3; 

    switch($opcao){
        case 1: $assunto = "Reclamação"; break;
        case 2: $assunto = "Elogio"; break;
        case 3: $assunto = "Informações"; break;
        default: $assunto = "falar com um Humano"; break;
    }
?>
    <p> <?=$assunto?> </p>
    
</body>
</html>