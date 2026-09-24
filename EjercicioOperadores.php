<?php
    echo"<h1>Operadores básicos</h1>";
    $var1 = 20;
    $var2 = 6;
    echo"Número 1: ".$var1."<BR>";
    echo"Número 2: ".$var2."<BR>";
    echo"<h1>Operadores aritméticos</h1>";
    echo"Suma:".$var1+$var2."<BR>";
    echo"Resta:".$var1-$var2."<BR>";
    echo"Multiplicación:".$var1*$var2."<BR>";
    echo"División:".$var1/$var2."<BR>";
    echo"Resto:".$var1%$var2."<BR>";
    echo"<h1>Operadores de comparación</h1>";
    echo"¿Es mayor? ";
    if($var1>$var2){
        echo"Sí"."<BR>";
    } else {
        echo"No"."<BR>";
    }
    echo"¿Es igual? ";
    if($var1=$var2){
        echo"Sí"."<BR>";
    } else {
        echo"No"."<BR>";
    }
    echo"¿Son mayores a 5? ";
    if($var1>5 && $var2>5){
        echo"Sí"."<BR>";
    } else {
        echo"No"."<BR>";
    }
    echo"¿Es alguno menor a 5? ";
    if(5>$var1 || 5>$var2){
        echo"Sí"."<BR>";
    } else {
        echo"No"."<BR>";
    }
?>