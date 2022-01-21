<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do Imposto de Renda</title>
</head>
<body>
    <?php    
       
            function calularImposto($salario){

                $imposto = 0;


                if($salario <= 1903.98){
                    $imposto = 0;
                    return $imposto;
                } else if ($salario >= 1903.98 && $salario <= 2826.65) {
                    $imposto = ($salario*7.5)/100;
                    return $imposto;
                 } else if ($salario >= 2826.65 && $salario >= 3751.05) {
                    $imposto = ($salario*15)/100;
                    return $imposto;
                 } else if ($salario <= 3751.05 && $salario<= 4664.08) {
                     $imposto = ($salario*22.5)/100;
                     return $imposto;
                 } else {
                     $imposto = ($salario*27.5)/100;
                     return $imposto;
                 }

            }
    
           echo calularImposto(2000);


            

    ?>
</body>
</html>