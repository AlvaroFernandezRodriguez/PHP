<?php
$aleatorio = ["Alvaro", "Pedro", "Juan"];
echo "<table border = '2px'>";  
echo "<tr><th>nombres</th></tr>";

foreach($aleatorio as $ejemplos){
    
    echo "<tr><th>" . $ejemplos . "</th></tr>";

}
echo "</table>";
?>