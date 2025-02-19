<?php
    class Student{
        //attributes
        public $name = "abid";
        public $age = 21;
        //methods
        
        function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
        function display(){
            echo "Name : ".$this->name." Age : ".$this->age."";
        }

        function __get($name){
            return $this->name;
        }
        function __set($name, $value){
            $this->name = $name;
        }

        
    }

    $obj = new Student("sumitra",23);
    // echo get_class($obj);
     $obj->display();
    // var_dump(get_class_methods($obj));
   
    // echo "--------------";
    // echo $obj->__get("a");

    $obj->__set("user","");

    $obj->display();
    
?>