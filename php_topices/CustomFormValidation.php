<?php

$name = $email = $password = "";
$error = $nameError = $emailError = $passwordError = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        // if (strlen($name) <= 3) {
        //     $nameError = "Name should be at least 4 character";
        // }
        if (!preg_match('/^(?!-)(?!.*-$)[a-zA-Z-]{4,}$/', $name)) {
            $nameError = "Name should be at least 4 characters and contain only letters and hyphens";
        }
    } else {
        $nameError = "Name is Required";
    }
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        $regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (!preg_match($regex, $email)) {
            $emailError = "Invalid email format. Please use a valid email address.";
        }
    } else {
        $emailError = "Email address is required.";
    }

    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8}$/";
        if (!preg_match($passwordRegex, $password)) {
            $passwordError = "Password should contain at least one uppercase letter, one lowercase letter, one digit, one special character and length should be between 8-15 characters.";
        } else {
            $passwordError = "";
        }
    }
    else if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){
        echo `<script> alert('form submitted successfully')</script>`;
    }
    else {
        $passwordError = "Password Is Required";
    }
    
   
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Custom PHP Form Validation</title>
</head>

<body>
    <h2>PHP Form Validation Example</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <span style="color: red;"><?php echo $nameError; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <span style="color: red;"><?php echo $emailError; ?></span>
        <br><br>

        Password: <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
        <span style="color: red;"><?php echo $passwordError; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>


<!-- //you have assignment
create a student form
then check all custom validation like name <= 3 or email is required with rxq from and also other field

    when you submit form then submit otherwise all filed is required -->