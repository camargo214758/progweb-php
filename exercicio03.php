<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de Salario</title>

</head>
<body>
    <h1>condicionais</h1>
    <hr>
    <h2>Calculo</h2>
      <?php
    $salario = 1800; 

    if( $salario < 500){
       $rejuste = $salario*9.15;
       
    } elseif( $salario <= 1000 ){
        $reajuste = $salario*9.10; 

    } else { $reajuste = $salario*1.09;
        
    }
              
    ?>
    <p> <?=$salario?> e <?=$reajuste?> </p>
    

    
</body>
</html>