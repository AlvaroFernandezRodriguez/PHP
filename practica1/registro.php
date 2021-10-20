<?php

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

   /*  if($valor1 > $valor2){

        
        
      
          echo "La resta es.." . $valor1 - $valor2;
    
    }
    
    else{

       echo "No se puede restar un numero mayor a un numero menor";
    } 
    
     echo "El resultado es.." . $valor1 + $valor2;

*/

$nombres = array ("hola","soy","el","bola");
/*echo "<br>";
echo $nombres[0];
echo "<br>";
echo $nombres[3] */

foreach($nombres as $nombre){
    echo "<br>";
    echo $nombre;
    echo "<br>";
    $contador ++; //$contador= $contador +1;
    echo $contador;
}


?>