<?php
session_start();

$uname=$_SESSION['lemail'];
$uemail=$_POST['uaemail'];
$upass=$_POST['uapass'];

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

$sql = "UPDATE admin SET admin_password='$upass', admin_email='$uemail' where '$uname'=admin_email";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.assign('settings.php')</script>";
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>