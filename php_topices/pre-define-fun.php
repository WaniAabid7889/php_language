<?php 
    echo "today topic pre define function in php<br>";


    // string
    $ch = "           you can win     ";
    echo strtoupper($ch)."<br>";
    echo strtolower($ch)."<br>";
    echo ucfirst($ch)."<br>";
    echo ucwords($ch)."<br>";
    echo strlen($ch)."<br>";
    echo trim($ch)."<br>";
    echo strlen(trim($ch))."<br>";

    $word = "hello world";
    echo str_word_count($word)."<br>";


    // number

    $num = -22;
    echo abs($num)."<br>";
    echo sqrt(16)."<br>";

    echo rand(1,10-1)."<br>";

    // directory 

    echo(__DIR__)."<br>";
    echo(__FILE__)."<br>";
    echo(__LINE__)."<br>";
    $path = __DIR__."".__FILE__."<br>";
    echo $path."<br>";


    //create new folder

    // echo mkdir("files");// create new folder
    // echo rmdir("files");// remove folder


        
?>

