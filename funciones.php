<?php
#scope
$a = 3;

/*function foo()
{
    global $a;
    #$a=0;
    $a += 2; #$a= + $a +2
    echo $a;
}
echo "<br>";
foo();
echo $a;*/

function foo($b)
{
     $b +=2;
    echo $b;
}
foo($a);
echo "<br>";
echo $a;
?>