<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1> Procesamento de Dados</h1>
    <hr>

    <?php
    if( empty( $_POST["nome"]) || empty($_POST["email"]) ){
        ?>

        <p style="color:red">Por favor preencha nome e e-mail!</p>
        <p> <a href="08-formulario.html">Voltar</a></p> <!--opcional-->
        <?php
        echo "<p>Por favor preencha nome e e-mail!<p>";
       

    } else {
    
    
    /*echo "<pre>";
    var_dump($_POST);
    echo "</pre"; */

    // Capturando os dadod enviados a partit do formulario
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    /* SE existir o $_POST[ íntaresses],
    o que foi selecionado fica na variavel. Caso contrario, deixe um array vazio na variavel.*/
    $interesses = $_POST["interesses"] ?? [];
    $informativos= $_POST["informativos"];
    $mensagem = $_POST["mensagem"];

    ?>
    <h2>Dados</h2>
    <ul>
    <?php } ?>

    <li> Nome: <?=$nome?> </li>
    <li> E-mail: <?=$email?> </li>
    <li> Idade: <?=$idade?> </li>
    <?php if (!empty($interesses)){ ?>
    <li> Interesses: 
        <ul>
        <?php foreach($interesses as $interesse){ ?>
            <!-- Aqui usamos o operador de navegação para (!) inverter a logica da função empty

             Se interesse Não estiver vazio-->
            <li> <?=$interesse?> </li>
            <?php } ?>
        </ul>

</li>

    <li> Informativos: <?=$informativos?> </li>
    <li> Mensagem :<?=$mensagem?> </li>

    </ul>
    <?php } ?>
    
</body>
</html>
