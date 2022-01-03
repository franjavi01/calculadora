<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];
$resultado = 0;

if($op=="+"){
    $resultado = $num1+$num2;
} else if($op=="-"){
    $resultado = $num1-$num2;
} else if($op=="*"){
    $resultado = $num1*$num2;
} else if($op=="/"){
    $resultado = $num1/$num2;
}

echo "<h1>El resultado de la operación es $resultado </h1>";
echo "<p><a href='./index.php'> Otra operación </a></p>";

