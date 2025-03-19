
 <?php
$servername = "localhost";
$username = "root";  // Change if necessary
$password = "";      // Change if necessary
$database = "e_commerce"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $database);
//mysqli_connect() if use then dont need to create a object 
//mysqli if use then you can crate a object

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "connected";
}
?>