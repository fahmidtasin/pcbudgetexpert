<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$ppin=$_POST['ppin'];
$pprice=$_POST['pprice'];
$pvalidity=$_POST['pvalidity'];

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

$sql = "INSERT INTO products (product_id,product_name ,product_type,product_pin,product_price,product_validity)
VALUES ($pid, '$pname', '$ptype', '$ppin', '$pprice', '$pvalidity')";

if ($conn->query($sql) === TRUE) {
     echo "<script>window.alert('Successfully Added!')</script>";
     echo "<script>window.location.assign('addproducts.php?')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>