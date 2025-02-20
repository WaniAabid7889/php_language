<?php 
    class Accessmodifer{
        public $id = "101";
        protected $name="abid";
        protected $email="abid@gmail.com";
        private $password = "test@123";
        private $role="admin";
    }

    class access extends Accessmodifer{
        function display(){
            echo $this->name;
           // echo $this->password; // is not access because its private
        }
    }
    
    $obj = new Accessmodifer();
    echo $obj->id."<br>";
    //echo $obj->email; // not access because it is protected 
   // echo $obj->password."<br>"; // is not access because its private
    $obj1 = new access();
    $obj1->display();
   
?>