<?php
function student($fname, $lname)
{ // formal arguments
    echo "welcome to function chapter...!<br>";
    echo "First Name " . $fname . " Last Name " . $lname . "<br>";
}

// calling the function
//function armstrong(int $num) {
function armstrong()
{
    for ($i = 10; $i <= 1000; $i++) {
        $count = 0;
        $num = $i;
        $copy = $num;
        while ($num > 1) {
            $num = (int) $num / 10;
            $count++;
        }
       // echo    "Count : " . $count . "<br>";

        $num = $copy;
        $sum = 0;
        while ($num > 1) {
            $d =  (int)$num % 10;
            $r = 1;

            for ($j = 1; $j <= $count; $j++) {
                $r = $r * $d;
            }

            $sum += $r;
            $num = (int) $num / 10;
        }

        $num = $copy;
        if ($sum == $num) {
            echo "<br>Armstrong : ".$sum;
        } else {
         //   echo "Not Armstrong <br>".$sum;
        }
    }
}

function friendNumber(){
    $num = 1234;
    $p = 1;
    $copy = $num;
    while($num>1){
        $num =(int)$num / 10;
        $p = $p * 10;
        
    }

    
    $num = $copy;
    $result  = $p - $num; 

    return $result;
}


student("abid", "hussain"); // actual arguments

// $num = 371;
//armstrong();

$res = friendNumber();
echo "Friend Number is : ".$res;

 
// $res = armstrong();
// if($res == $num){
//     echo "ArmStrong Number ".$res;
// }else{
//     echo "Not a ArmStrong :".$res;
// }


//Assignments

// Generated series: 1, 3, 7, 17, 41, 99, 239, 577 
// Generated series: 2, 7, 52, 2707, 7325412
// Generated series: 5, 7, 4, 8, 3, 9

