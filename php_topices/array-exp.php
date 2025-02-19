<?php 
echo php_ini_loaded_file();

// index array or associative array
             // 0 1 2 3
// index array [1,2,3,4]
// associative array ["name"=>"abid"]


    $arr = array(1,2,3,4,5);
    $brr = [1,2,3,4,5];
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    echo "<pre>";
        print_r($brr);
    echo "</pre>";


    $asscoArr  = ["name"=>"abid","age"=>"21","address"=>"Delhi Gate", "arr"=>[1,2,3,4,5],"brr"=>$brr];

    $asscoArr2 = [1=>"one",2=>[3,4,5],"crr"=>$brr];

    var_dump($asscoArr2);

    echo "<pre>";
        print_r($asscoArr);
    echo "</pre>";


    $asscoSec = array(
        "1"=> "one",
        "2"=> "two",
        "3"=> "three",
        "4"=> "four",
        "5"=>  "five"

    );
    
    var_dump($asscoSec);


    $student = [
        "id" => 101,
        "name" => "Rahul Sharma",
        "age" => 20,
        "course" => "B.Tech",
        "year" => 3,
        "email" => "rahul.sharma@example.com",
        "phone" => "9876543210"
    ];
    
    var_dump($student);
?>