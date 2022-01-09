<?php
session_start();

$uname=$_SESSION['lemail'];
$uopass=$_POST['uopass'];
$unpass=$_POST['unpass'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbudgetexpert";

// Create connection

// Check connection
try{

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql1="select user_password,user_email from users where '$uname'=user_email";
    $result=$conn->query($sql1);
    $table=$result->fetchAll(PDO::FETCH_NUM);

foreach($table as $row){
    if($row>0){
if($row[0]==$uopass){
    
    $sql = "UPDATE users SET user_password='$unpass' where user_email='$uname'";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo "<script>window.alert('Password Successfully Updated! Re-login!')</script>";
    echo "<script>window.location.assign('logout.php')</script>";
    
}
else{
    echo "<script>window.alert('Your old password not matched!')</script>";
}
    }
}
}catch (PDOException $ex) {
                    echo "<script>window.alert('database error')</script>";
                }

?>