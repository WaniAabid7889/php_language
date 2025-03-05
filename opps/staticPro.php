<?php
    class weather{
        public static $tempCondition = ['cold','mild','warm'];

        public static function celcuisToFahrenheit($c){
            return $c  * 9 / 5 +32;
        } 
        public static function fahrenheitToTemp($f) {
            if($f<40){
                return self::$tempCondition[0];
            } elseif ($f < 70){
                return self::$tempCondition[1];
            } else {
                return self::$tempCondition[3];
            }
        }
    }
    
    print_r(weather::$tempCondition);
    echo "<br>";
    echo weather::celcuisToFahrenheit(10);
    echo "<br>";
    echo weather::fahrenheitToTemp(50);
?>