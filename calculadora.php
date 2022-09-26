<?php
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$oper = $_POST["operator"];

function validar($num1, $num2){
    
    $val = true;
    
    if($num1 == null || $num2==null){
        $val = false;
    }else{
        if($num1->)
    }
}

if($num1 != null  && $num2!=null){
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


