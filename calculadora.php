<?php
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$oper = $_POST["operator"];

function validar($n1, $n2){
    
    $val = true;
    
    if($n1 == null || $n2==null){
        $val = false;
    }else{
        if(!is_numeric($n1)|| !is_numeric($n2)){
            $val = false;
        }
    }
    
    return $val;
}

if(validar($num1, $num2)){
    if($oper == "Sumar"){
        echo "La suma es ".($num1+$num2);
    }elseif($oper == "Restar"){
        echo "La resta es".($num1-$num2);
    }elseif($oper == "Multiplicar"){
        echo "La multiplicacion es ".($num1*$num2);
    }else{
        echo "La division es ".($num1/$num2);
    }
}else{
    echo "Inserte un valor correcto";
}
?>


