<?php 
    class Users{
        protected $email;
        protected $password;

        public function __construct($email,$password){
            $this->email = $email;
            $this->password = $password;
        }

        public function __destruct(){
            echo "our program is end";
        }
        public function showUser(){
            echo "User email : ".$this->email."<br>";
            echo "User Password : ".$this->password."<br>";
        }

        public function set_email($email){
            $this->email = $email;
        }
        
        public function set_password($password){
            $this->password = $password;
        }

        public function get_email(){return $this->email;}
        public function get_password(){return $this->password;}
    }
    

    //$user_obj = new Users("test@gmail.com","test@123");
    // echo get_class($user_obj)."<br>";
    // var_dump($user_obj instanceof Users);echo "<br>";
    // var_dump(get_class_methods($user_obj));echo "<br>";
    // echo "Show user Information <br>";
    // $user_obj->showUser();

    // echo $user_obj->get_email() ."<br>";
    // $user_obj->set_email("sumitra@gmail.com");
    // $user_obj->showUser();
    // echo $user_obj->get_email();


    $userObj = new Users("admin@gmail.com",password:"admin@123");
    $userObj->showUser();
    $userObj->set_email("hello@gmail.com");
    $userObj->showUser();


?>