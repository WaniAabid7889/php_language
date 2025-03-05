<?php
    //parameter //methods //
    abstract class person{
        public $personName;
        protected $Gender;
        private $Email;

        function __construct(){
            $this->personName = "Kamar";
            $this->Gender = "male";
            $this->Email = "kamar@gmail.com";

        }

        public function getEmail() {
            return $this->Email;
        }
        public function setEmail($e){
            $Email = $e;
        }

        public abstract function get_info();
        protected abstract function set_info($personName,$Gender,$Email);
        // public function sum() {
        //     echo "sum a + b : ". 10+20 ."";
        // }
    }

    final class student extends person{
        // function __construct($personName,$Gender,$Email){
        //     $this->personName = $personName;
        //     $this->$Gender = $Gender;
        //     $this->setEmail($Email);
        // }
        public function get_info(){
            echo "Name : ".$this->personName."<br>";
            echo "Gender : ".$this->Gender."<br>";
            echo "Email : ".$this->getEmail()."<br>";
        }

        public function set_info($personName,$Gender,$Email){
            $this->personName = $personName;
                //  $this->$Gender = $Gender;
                $this->setEmail($Email);
        }
    }

    $st = new student('abid','male','abid@gmail.com');
    $st1 = new student();
    $st1->set_info('Ali','male','ali@gmail.com');
    $st1->get_info();


?>

<!-- you need to access protected and private data in child class -->