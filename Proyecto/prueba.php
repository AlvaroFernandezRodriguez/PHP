<?php
 #fopen funcion para trabajar con ficheros
 # Se puede leer y escribir
 # tiene 2 parmetros la ruta del fichero (Si es W es \\)
 # segundo es la forma de abrirlo r--> leer w--> escribir
 # $fichero es una variable que en prog se deomina handler
 # es una varianle donde apunta/almacena/guarda al fichero abierto
 # Exclamacion ! sigfnifica NOT
 # feof Final de fichero
 /* $fichero= fopen("D:\\xampp\\apache\\logs\\error.log", "r");
 echo "<textarea>";
 while (!feof($fichero)){
     $linea= fgets($fichero);
     echo $linea;
 } 
 fclose($fichero);
 echo "</textarea>"; */

 #ejecutar comando en el sistema
 
 //$salida = shell_exec('dir');
 //echo "<pre>$salida</pre>"

 $mystring = "abc";
 $findme = "a";
 $pos = strpos($mystring, $findme);
 if($pos !== false){
    echo "La cadena '$findme' fue encontrada en '$mystring' en la posicion '$pos'";
 }
 else{
    echo "No ha sido encontrado";
}
?>