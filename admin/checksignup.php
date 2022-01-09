<?php
$uname=$_POST['suname'];
$email=$_POST['semail'];
$pass=$_POST['spass'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbudgetexpert";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Admin (admin_name,admin_email ,admin_password)
VALUES ('$uname', '$email', $pass)";

if ($conn->query($sql) === TRUE) {
     echo "<script>window.alert('Successfully Registered!')</script>";
     echo "<script>window.location.assign('signup.php?')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>