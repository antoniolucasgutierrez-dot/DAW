<?php
    $var1 = 4;
    $var2 = 2;
    echo$var1+$var2."<br>";
    echo$var1-$var2."<br>";
    echo$var1*$var2."<br>";
    echo$var1/$var2."<br>";
    echo$var1%$var2."<br>";
    echo$var1**$var2."<br>";

    echo"Hola Mundo"."<br>";
    echo"Hola", "mundo"."<br>";
    print"Hola Mundo"."<br>";
    print"Hola". "Mundo"."<br>";

    $var = 20;
    function PruebaSinGlobal(){
        $var++;
        echo "Prueba sin global. \$var :". $var . "<BR>";
    }
    function PruebaConGlobal(){
        global $var;
        $var++;
        echo "Prueba con global. \$var :". $var . "<BR>";
    }
    function PruebaConGlobals(){
        $GLOBALS["var"]++;
        echo "Prueba con GLOBALS. \$var :". $GLOBALS["var"] . "<BR>";
    }
    PruebaSinGlobal();
    PruebaConGlobal();
    PruebaConGlobals();
?>