<?php
echo "<h1>SuperGlobal Variable in php<h1>";
// $a = 30;
// echo $GLOBALS['a'];


// $x = 75;

// function myFunction()
// {
//     echo $GLOBALS['x'];
// }

// myFunction();
//$num = 400;

$y = 10;
$x = 10;
function addition() { 
    global $x, $y;    
    $x = 30;  
    //echo $GLOBALS['x'];
}

echo $GLOBALS['x'];
addition();


