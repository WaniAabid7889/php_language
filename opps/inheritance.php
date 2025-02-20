<?php 
    class father{
        public $name, $assign;

        function __construct($name,$assign){
            $this->name = $name;
            $this->assign = $assign;
        }
        
        function display(){
            echo "Name : ".$this->name ."<br>";
            echo "Assign Work : ".$this->assign ."<br>";
        }
    }

    class Child extends father{
        public $sname;
        public $work;
       function __construct($work,$sname,$name,$assign){
           $this->sname = $sname;        
           $this->work = $work;                                            // :: is use for php and c++ and other language access parent class method and attributes
           father::__construct($name,$assign); // :: is a scope resolution using like a super keyword in java and other lang.
        }

        function display(){
            father::display();
            echo "Student Name : ".$this->sname."<br>";
            echo "I am Work : " . $this->work ."<br>";
        }
    }
    
    // $pObj = new father();
    // $pObj->display();

     $cObj  = new Child("i am doing a job in it sector","abid","Sultan","find job");
     $cObj->display();
?>