<?php 

    //if else statement
    // $num = 32;
    // if($num > 18){
    //     echo "you are eligible for vote...!";
    // }else{
    //     echo "You are not 18 years old wait for you voting we are notify for you when you are eligible";
    // }

    // if elseif ladder statement


    // $num = 1234;

    // $a = (int)$num%10;
    // $b = (int)$num/10%10;
    // $c = (int)$num/100%10;
    // $d = (int)$num/1000%10; 

    // echo "A : ".$a."<br>B : ".$b."<br>C : ".$c."<br>D : ".$d."<br>";
    
    // //how to reverse to actual number 1234 and reverse version 4321
    // $rev = $a*1000 + $b*100+ $c*10+ $d*1;
    // echo "<h1>Reverse Value of ".$rev."<h2>";

    // if($a>$b && $a>$c && $a>$d){
    //     echo "<h1>A Is MaxValue : ".$a."<h1>";
    // }else if($b>$c && $b>$d){
    //     echo "<h1>B Is MaxValue : ".$b."<h1>";
    // }else if($c>$d && $c>$d){
    //     echo "<h1>C Is MaxValue : ".$c."<h1>";
    // }else{
    //     echo "<h1>D Is MaxValue : ".$d."<h1>";
    // }

    //switch
    //grade system 



    // per = 70% -> grade point 4
    
    $student = "Sumitra";
    $sub1 = "Science";
    $sub2 = "Math";
    $sub3 = "ComputerScience";
    $sub4 = "English";
    $sub5 = "EVS";

    echo "Student Name :".$student."<br>";
    echo "Science ".$sub1."<br>";
    echo "Math ".$sub2."<br>";
    echo "Computer Science ".$sub3."<br>";
    echo "English ".$sub4."<br>";
    echo "EVS ".$sub5."<br>";

    $Math = 70; $Science = 30; $EVS = 60; $CS = 10; $Eng = 60;
    $sum = $Math+$Science+$EVS+$CS+$Eng;
    $per = (float)$sum/500 * 100;
    

    echo "Total Marks : ".$sum. "<br><b>Total Percentage : ".$per."<b><br>";

    $gradePoints =$per/10;
    $gradePo    nts = (int)$gradePoints;
    echo "Total Grade Point ".$gradePoints."<br>";

    switch ($gradePoints) {
        case 10: case 9: case 8: case 7: case 6:
            echo  "Position A : ".$gradePoints."<br>";  
        break;
        case 5: case 4 :
            echo "Position B : ".$gradePoints."<br>";
        break;
        case 3: 
            echo "Position C : ".$gradePoints."<br>";
        break;
        case 2: case 1:
            echo "Fail D , E ".$gradePoints."<br>";
        default;
            echo "invalid grade point";
    }



?>