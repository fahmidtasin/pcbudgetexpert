<?php
session_start();
$delid = "";
if (isset($_GET['id']))
    $delid = $_GET['id'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=pcbudgetexpert", "root", "");

     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Check connection
                $uemail=$_SESSION['lemail'];
        
                         $stmt = "delete from cart where product_id like '%$delid%' && user_email like '%$uemail%' limit 1";
                         $conn->exec($stmt);
     
                $sql = "SELECT * FROM cart where user_email Like '%$uemail%'";
                $result = $conn->query($sql);
                $table=$result->fetchAll(PDO::FETCH_NUM);
        
            
      foreach ($table as $row) {
                        
            
                        $sql2 = "SELECT * FROM products where product_id Like '%$row[2]%'";
                        $result2 = $conn->query($sql2);
                        $table2=$result2->fetchAll(PDO::FETCH_NUM);
                        $sum=0.0;
                        foreach ($table2 as $row2) {
                        echo "<tr style='border: 1px solid black'>
                        
                        <td style='border: 1px solid black'>$row2[1]</td>
                        <td style='border: 1px solid black'>$row2[2]</td>
                        <td style='border: 1px solid black'>$row2[4]</td>
                        <td><input type='button' value='Delete'></td></tr>";
                        
                        }
    
    
    if($result2->rowCount()==0){
        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
    }
}
} catch (PDOException $ex) {
    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
}
?>

