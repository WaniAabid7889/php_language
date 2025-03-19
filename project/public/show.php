<?php
    require_once('../config/db.php');
    $sql = "SELECT * from login";
    $res = mysqli_query($conn,$sql);
    
    var_dump($res);
    while($data = $res->fetch_assoc()){
        // var_dump($data);
        echo $data["id"]." ".$data["email"] ." ".$data['password']."<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>