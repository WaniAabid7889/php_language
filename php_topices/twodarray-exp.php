<?php
echo "two d array in php";

$arr = array(
    "employees" => array("Abid", "sameer", "raj", "sumitra"),
    "post" => array("Developer", "Manager", "HR", "Clerk"),
    "department" => array("IT", "Sales", "Cloud", "Railways")
);

var_dump(json_encode($arr, JSON_PRETTY_PRINT));
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// foreach($arr as $key => $value) {
//     // echo "<pre>";
//     // var_dump($key, $value);
//     // echo "</pre>";
//     echo "<h1>". $key ."<h1>";
//     foreach($value as $key2 => $value2) {
//         echo "<span>".$value2 . " "."</span>";
//     }
// }

echo "<table border=1 cellspacing='2' rowspacing='2'>";
foreach ($arr as $key => $value) {
    echo "<tr>";
    echo "<th bgcolor=green ,text-color=white>" . $key . "</th>";
    foreach ($value as $key2 => $value2) {
        echo "<td>" . $value2 . "</td>";
    }
    echo "</tr>";
}
echo "</table>";



$brr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

//var_dump(json_encode($brr, JSON_PRETTY_PRINT));

foreach ($brr as $item) {
    foreach ($item as $value2) {
        echo "<td>". $value2 . "</td>  ";
    }
    echo "<br>";
}