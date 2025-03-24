<?php
  require '../config/db.php';
  $recordId = $_GET['id'];
  echo $recordId;
  $name = $email = $password = $status= "";
  $getUser = "SELECT * from users where id='$recordId'";
       
  $getUserById  = mysqli_query($conn,$getUser);

  while($d = $getUserById->fetch_assoc()){
    $name = $d['name'];
    $email = $d['email'];
    $password = $d['password'];
    $status = $d['status'];
  }
  


  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $status = $_POST['status'];


       if($recordId){

        //    $sql = "UPDATE users set name='$name',email='$email',password='$password',status='$status' where id='$recordId'";
           $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`status`='$status' WHERE id='$recordId'";
           var_dump($sql);
           $res = mysqli_query($conn,$sql);
           echo $res;
           exit;
           if($res){
               echo "User Record update successfully";
            }else{
                echo "Error record is not updated";
            }
        }else{
            $sql = "INSERT into users(name, email, password, status)values('$name','$email','$password','$status')";
            var_dump($sql);
            $res = mysqli_query($conn,$sql);
            echo $res;
            exit;
            if($res){
                echo "User Record inserted successfully";
             }else{
                 echo "Error record is not created";
             }
        }
       mysqli_close($conn);
   
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">

                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="name" value=<?php echo $name ?? " "?> class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value=<?php echo $email ?? " "?>  class="form-control" placeholder="Enter email">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value=<?php echo $password ?? " "?> class="form-control" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="active" value=<?php $status ?? " " ?>>Active</option>
                        <option value="inactive" value=<?php $status ?? " " ?>>InActive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3 form-control">Submit</button>
            </form>
        </div>
        </div>
    </div>
</body>

    </html>