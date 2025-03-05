<?php

    class User
    {
        public $email, $password;

        function __construct($email,$password){
            $this->email = $email;
            $this->password = $password;
        }
        
        function display(): void{
            echo "Email : ".$this->email ."<br>";
            echo "Password: ".$this->password ."<br>";
        }      
    }

    class Role extends User{
        public $userRole;
        function __construct($email, $password, $userRole){
            User::__construct($email, $password);
            $this->userRole = $userRole;
        }

        function DisplayChildParent()
        {
             echo "Password: ".$this->password ."<br>";
             echo "UserRole: ".$this->userRole ."<br>";
    
        }
       
    }


    class Authorization extends Role{
        public $USER_EMAIL = "user@gmail.com";

        function __construct($email, $password, $userRole){
            if($this->USER_EMAIL === $email){
                 Role::__construct($email, $password,$userRole);
                 User::__construct($email, $password);
            } 
            else
            {
                echo "email is not confirmed";
            }
       
        }

        function DisplayChildParent(){
            
            User::display();
            Role::DisplayChildParent();
         }
     
    }
    $roleObj = new User('user@gmail.com','user@123');
    $roleObj = new Role('user@gmail.com','user@1234','admin');
    $roleObj = new Authorization('user@gmail.com','user@1234','admin');
 //   $roleObj->DisplayChildParent();
?>