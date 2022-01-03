<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<h2>Introduce dos números</h2> 
<p>Para valores decimales poner punto(.) no poner coma(,)</p>
   <form action="./proc.php" method="post">
       <input type="text" name="num1">
       <input type="text" name="num2">
       <select name="op">
           <option value="+">Suma</option>
           <option value="-">Resta</option>
           <option value="*">Multiplicación</option>
           <option value="/">División</option>
       </select>
       <input type="submit" value="enviar">
   </form> 

</body>
</html>