<?php 

    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key

    echo "php array pre-defined methods";
    $arr = array(11,21,5,53,3,4);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
    echo sizeof($arr);
    echo "<br>";
    sort($arr);
    arsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
    $numbers = array("1"=>"one","3"=>"three","5"=>"five","2"=>"two","4"=>"four");
    ksort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "<br>";
    arsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "<br>";
    krsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    if(in_array("23", $arr)){
        echo "value is present";
    } else{
        echo "not present";
    }

    $lists  =  list($a,$b,$c);
    echo $lists;

//     //check these methods also
//     array() -> creates an array

// sizeof() -> counts the number of values in an array

// sort() -> sorts an indexed array in ascending order

// in_array() -> checks if a specified value is in array

// list() -> keep array values in variable

// compact() -> keeps variable values in associative array

// arsort() -> sorts an associative array in descending order according to the value

// array_unique() -> removes duplicate values from an array

// explode() -> converts string to array

// implode() -> converts array to string

// extract() -> converts array to variable

// array_sum() -> returns the sum of values in an array

// array_shift() -> removes the first element of an array and returns the first value from the array


// array_pop() -> deletes the last element from an array

// array_merge() -> merges multiple arrays

// array_search() -> searches for a defined value in an array and returns the key for that value

// array_reverse() -> returns an array in reverse order

// array_keys() -> returns all the keys from an array


?>