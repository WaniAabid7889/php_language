<?php
    
//   include '../config/db.php';
      require '../config/db.php';

   if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT into login(email, password)values('$email','$password')";

        $res = mysqli_query($conn,$sql);
        if(!$res){
            die("Connection failed,".$res);
        }else{
            echo "inserted record";
        }
        // if (mysqli_query($conn, $sql)) {
        //     echo "Record inserted successfully";
        // } else {
        //     echo "Error: " . mysqli_error($conn);
        // }
    
        // Close connection
        mysqli_close($conn);
    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
    
    </html>