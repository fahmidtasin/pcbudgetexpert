<?php
 session_start();
 $id=$_POST['idsearch'];
 $uname=$_SESSION['lemail'];
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
// sql to delete a record
$sql = "DELETE FROM admin where '$uname'!=admin_name && '$id'=admin_id";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.assign('profiledetails.php')</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>