<?php

class User
{
     public $email, $password;


     function __construct($email,$password)
     {
        $this->email = $email;
        $this->password = $password;
     }

     function display()
     {
        echo "<br>Child Display :<br>";
        echo "Email :".$this->email. "<br>";
        echo "Password :".$this->password."<br>";

     }

}
 class Role extends User{
        public $userRole;

        function __construct($email,$password,$userRole)
        {
            //Parent Constructor
            User::__construct($email, $password);
               $this->userRole=$userRole;
        }

        function DisplayChildParent()
        {

            echo "<br>Parent Display :";
            echo "<br>  UserRole :".$this->userRole."<br>";
            echo "Password : ".$this->password."<br>";
   
        }

}


    // CHECK EMAIL AUTHORIZATION
class Authorization extends Role{
    public $User_Email="user@gmail.com";
    public $Auth_password="user@1234";
    public $Admin_Name ="Admin";
    function __construct($email,$password,$userRole)
    {
        if($this->User_Email === $email)
        {
            Role::__construct($email, $password , $userRole);
            User::__construct($email, $password);
        }
        else
        {
            echo "Email is not valid...!";
        }
        if($this->Auth_password === $password)
        {
            Role::__construct($email, $password , $userRole);
            User::__construct($email, $password);
        }
        else
        {
            echo "Password is not valid";
        }
        if($this->Admin_Name === $userRole && $this->Admin_Name !=$userRole)
        {

            Role::__construct($email, $password , $userRole);
            User::__construct($email, $password);
        }
        else
        {
            echo "Admin is not valid";
        }
    }
    function DisplayChildParent()
    {
        User::display();
        Role::DisplayChildParent();
    }
}
// :: iska use tab kiya jata h jab bina object create kiye  class ko call krna chahe

$UserObj = new User("user@gmail.com","use@r123");
//$UserObj->display();
$RoleObj = new Role("user@gmail.com","user123","admin");
//$RoleObj->ParentChildDisplay();
$Authorization = new Authorization("user@gmail.com","user@1234","admin");
$Authorization->DisplayChildParent();

?>