<?php
//loop is a represent a repeat statement 

//categories the loop in php

//entry level for ,while, foreach forin for-of map
//exit level do-while

// $num = 10;
// for ($i=1; $i <= $num; $i++) { 
//     echo "".$i;
// }

// echo "Starting loop execution...\n";
// for ($i=1; $i <= $num; $i++) { 
//     echo "Iteration: $i\n";
//     echo ""+$i;
//     echo "Iteration $i completed.\n";
// }
// echo "Loop execution completed.\n";

$size = 10;

// for($i=1;$i<=$size;$i++){
//     for($s=1;$s<=$size-$i;$s++){
//         echo "<td>".'5'."</td>";
//     }
//     for($j= 1;$j<=$i;$j++){
//         echo "<td>*</td>";
//     }
//     echo "<br>";
// }

// for($i=1;$i<=$size;$i++){
//     for($s=1;$s<=$size;$s++){
//         if($s<=$size-$i){
//             echo "_";
//         }else{
//             echo "*";
//         }
//     }
//     echo "<br>";
// }


// for($i=1;$i<=$size;$i++){
//     for($s=1;$s<=$size-$i;$s++){
//         echo "_";
//     }
//     for($j= 1;$j<$i*2;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }

// echo "<br>";

// $size = 20;

// for($i= 1;$i<=$size;$i++){
//     for($s= 1;$s<=$size;$s++){
//         if($s==1 ||$s==$i || $i==1||$i==$size || $s==$size || $s==$size+1-$i ||$i==$size/2+1 || $s==$size/2){
//             echo "*";
//         }else{
//             echo "_";
//         }
//     }
//     echo "<br>";
// }

// $num = 1234;
//     while($num>1){
//         $n = (int)$num%10;
//         echo $n;
//         $num = (int)$num /10;
//     }

$num1 = 121;
//   var_dump($_POST['input']);

$num = 0;

if (!isset($_POST["submit"])) {
    $input = $_POST["input"];
    $num = $input;
}

echo "number is " . $num . "<br>";
$sum = 0;
$c = $num;

while ($num > 1) {
    $n = (int)$num % 10;

    $sum = $sum * 10 + $n;

    $num = (int) $num / 10;
}

$num = $c;
echo "" . $sum . "<br>";
if ($num == $sum) {
    echo "it is palindrome number " . $sum;
} else {
    echo "it is not palindrome number" . $sum;
}

echo "<br>";
    //do while
    //1 2 3 6 10 15 21 28 .... 
    $n=1;
    $x = 1;
    do{
        echo " ".$x;
        $n++;
        $x += $n;
    }while($n<8);


    // 0 1 1 2 3 5 8 13 21
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="LoopStatement.php" method="POST">
    <input type="number" name="input" value="input"> 
    <input type="submit" value="submit"/>
</form>
</body>

</html>
