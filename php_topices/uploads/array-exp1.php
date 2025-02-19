<?php 
  
    function arrExp($arr){
    
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i] * $i+1;
        }
        return $arr;
    }
    
    $arr = array(1, 2, 3, 4, 5, 6);
    
    $newArr  =  arrExp($arr);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    // [1,2,2,3,3,5,7,7,1] = 5
    // 1 2 3 5 7 = 18 
    $brr = [1,2,2,3,3,5,7,7,1];
    uniqueElementSum($brr);
    function uniqueElementSum($brr){

        $sum =0;
        $c=0;
        for ($i=0; $i < count($brr); $i++) { 
            $c= 1;
            for($j = $i+1 ; $j<count($brr); $j++){
                if($brr[$i] == $brr[$j] && $i!=$j){
                    $brr[$j] = 0;
                    $c++;
                }
            }
            if($brr[$i] !=0 && $c >= 1){
                // $sum += $brr[$i];
                echo $brr[$i] ."count-->".$c."<br>";
                $newArr = array($brr[$i]);
            }
        }
        var_dump($newArr);
    }

    
?>