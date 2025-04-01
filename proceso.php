<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operation = $_POST['option'];


if($operation == 'sum'){
    $result = $num1 + $num2;
} else if($operation == 'rest') {
    $result = $num1 - $num2;

} else if($operation == 'div') {
    if($num1 == $num2){
        print "no se puede dividir por el mismo numero";
    }
    if($num2 == 0){
        print "La division por cero no esta definida";
    }
    $result = $num1 / $num2;
} else {
    print "operacion no valida";
}
print $result;
