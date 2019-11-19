<?php

$cpf = $_GET["CPF"];
if (strlen($cpf) == 9){
    
    $soma = 0;
    $Resto = 0;
    $peso = 10;

    for ($i = 0; $i<= 8; $i++){

        $soma += $cpf[$i] * $peso;
        $peso--;
    }

    $Resto = ($soma * 10)  % 11;

    if ((Resto == 10) || (Resto == 11)) {
        $Resto = 0;
    }

    $cpf = $cpf . $Resto;

    $peso = 11;
    $soma = 0;
    $Resto = 0;

    for ($i = 0; $i<= 9; $i++){

        $soma += $cpf[$i] * $peso;
        $peso--;
    }

    $Resto = ($soma * 10)  % 11;

    if ((Resto == 10) || (Resto == 11)) {
        $Resto = 0;
    }

    $cpf = $cpf . $Resto;
    echo json_encode($cpf, true);
  
}

if (strlen($cpf) == 12){
    $peso = 5;
    $soma = 0;

    for($i = 0; $i<=11; $i++){
        $soma += $cpf[$i] * $peso;
        $peso--;

        if ($peso == 1){
            $peso = 9;
        }

        $Resto = $soma % 11;

        if ($Resto < 2){
            $Resto = 0;
        }else{
            $Resto = 11 - $Resto ;
        }
    }

    $cpf = $cpf . $Resto;

    $peso = 6;
    $soma = 0;
    $Resto = 0;

    for($i = 0; $i<=12; $i++){
        $soma += $cpf[$i] * $peso;
        $peso--;

        if ($peso == 1){
            $peso = 9;
        }

        $Resto = $soma % 11;

        if ($Resto < 2){
            $Resto = 0;
        }else{
            $Resto = 11 - $Resto ;
        }
    }
    $cpf = $cpf . $Resto;
    var_dump(json_encode($cpf, true));
  

}
