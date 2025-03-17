<!-- what is interface ? -->

<?php 
interface InterfaceExp{
    function run();
    //when we use interface we cant create object
    //we cant create a constructor
    //all stuff inside the interface it will represent as abstract
    // interface always implement other class 

    // public function __construct(){

    // }
}
// $obj = new InterfaceExp(); // not allowed to instance

class Car implements InterfaceExp{
    public $model;
    public $color;
    function __construct($model,$color){
        $this->model = $model;
        $this->color = $color;
    }
    public function run(){
        echo "Car is running<br>";
    }

    public function display(){
        echo "Car model : ". $this->model."<br>";
        echo "Car Color : ". $this->color."<br>";
    }
}

class Engine extends Car {
    public $engineName;
    public $price;
    function __construct($model, $color, $name,$price){
        Car::__construct($model,$color); 
        $this->engineName = $name;
        $this->price = $price;
    }
    // public function run(){
    //     echo "Car is running <br>";
    // }

    public function run(){
        echo "Car is running engine name : ".$this->engineName."<br>";
    }

    public function display(){
        Car::display();
        echo "Engine Name : ". $this->engineName."<br>";
        echo "Engine Price : ". $this->price."<br>";
    }

}

class newFeature extends car implements InterfaceExp{
    public function run(){
        
    }
}


$carObj = new Car("2025","white"); 
$carObj->run();
$carObj->display();

//Engine class object 
$engObj = new Engine("2032","white","4XPower",12000);
$engObj->run();
$engObj->display();

?>