<?php
    require_once('../config/db.php');
    //login
    // $sql = "SELECT * from login";
    // $res = mysqli_query($conn,$sql);
    
    // var_dump($res);
    // while($data = $res->fetch_assoc()){
        //     // var_dump($data);
        //     echo $data["id"]." ".$data["email"] ." ".$data['password']."<br>";
        // }
        
    //user information Select Query 
    $sql1 = "SELECT * from users";
    $getAllUser = mysqli_query($conn,$sql1);
    while($d = $getAllUser->fetch_assoc()){
        echo "<pre>";
        // print_r($d);
        echo "</pre>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
</head>
<body>
    <table border="2px" cellpadding="0px" cellspacing="0">
        <tr>
            <th  style="padding: 4px;">Id</th>
            <th  style="padding: 4px;">Name</th>
            <th  style="padding: 4px;">Email</th>
            <th  style="padding: 4px;">Password</th>
            <th  style="padding: 4px;">Status</th>
            <th colspan="2" style="padding: 4px;">Action</th>
        </tr>
        <tr>
    <?php 
        $getAllUser = mysqli_query($conn,$sql1);
        $getAllUser->data_seek(0); // reset the pointer
        while($d = $getAllUser->fetch_assoc()){
            echo "<tr>";
            echo "<td style='padding: 5px;' >".$d['id']."</td>";
            echo "<td style='padding: 5px;'>".$d['name']."</td>";
            echo "<td style='padding: 5px;'>".$d['email']."</td>";
            echo "<td style='padding: 5px;'>".$d['password']."</td>";
            echo "<td style='padding: 5px;'>".$d['status']."</td>";
            echo "<td style='padding: 5px;'><a href='./users.php?update=".$d['id']."'>Edit</a></td>";
            echo "<td style='padding: 5px;'><a href='./users.php?delete=".$d['id']."'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
</tr>
    </table>
</body>
</html>