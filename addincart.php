<?php
session_start();
$prodid=$_GET['varp'];
 try{
            $DB_host = "localhost";
                $DB_user = "root";
                $DB_pass = "";
                $DB_name = "pcbudgetexpert";
     
                $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Check connection
                $uemail=$_SESSION['lemail'];
                echo $uemail;
               
         //  $stmt="select cart_id,product_id from cart";
          // $result=$conn->query($stmt);
          // $table=$result->fetchAll(PDO::FETCH_NUM);
           
           //foreach($table as $rows){
             //if($rows[1]!=$prodid && $result->rowCount()==1){ 
                $sql1="insert into cart (user_email,product_id) values('$uemail','$prodid')";
                $result1 = $conn->exec($sql1);
                 
            //  }
            //  else
           //        echo"<script>window.alert('product already exist in cart!')</script>";
               
          // }
 }
         catch (PDOException $ex) {
                    echo "<tr><td colspan='5' style='text-align:center'>Error!</td></tr>";
         }
     
     echo "<script>window.location.assign('viewproducts.php')</script>";
          
    
?>