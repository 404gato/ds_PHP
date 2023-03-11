<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="soma.css">
    <title>Document</title>
</head>
<body>
    
<?php

/*
    $numero = 5;

    for($i=0;$i<=10;$i++){
        $soma = $i + $numero;

        echo "$numero + $i = $soma </br>";

    }

*/

/* $i = 0;
$s = 0;

while($i<=100){
    $s += $i;
    $i++;
}

echo "$s";*/

/*
                $numero = 0;
                $inicio = 0;
                $fim = 50;
                while ($inicio<= $fim) {
                  if ($numero % 2 == 0) {
                    echo "$numero </br>";
                    $inicio++;
                  }
                  $numero++;
                }
*/


$i=0;
while($i<=100){
    if($i%2 ==0){
        echo "<p class='par'>$i</p>";
    }
    else{
        echo "<p class='impar'>$i</p>";
    }
    $i++;
}
?>

</body>
</html>