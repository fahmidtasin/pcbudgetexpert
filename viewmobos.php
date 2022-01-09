<!DOCTYPE html>
<?php session_start();

if (!isset($_SESSION['lemail'])) {
    echo "<script>window.location.assign('login.php')</script>";
}else{
 ?>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">


</head>

<body id="body">

    <div id="upperdiv">
        <a href="home.php"><img src="brand.png" style="height: 100%"></a>
        <span style="float:right;margin-top:15px;margin-right: 50px ">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Profile
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <h5 style="text-align: center">Welcome <?php echo $_SESSION['lemail'] ?>!</h5>
                    <li><a href="profiledetails.php">Profile Details</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </span>
    </div>
    
    
    
    <h2 style="text-align: center">Motherboards:</h2>
    <hr>
    
    <!--show admins-->
      <div>
          
        <?php
        
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

                $sql = "SELECT product_name ,product_type,product_price,product_validity FROM products where product_type Like ('%mother%')";
                $result = $conn->query($sql);

             if ($result->num_rows > 0) {
    // output data of each row
               echo "<table style='width:100%;text-align: center;border:1px solid black'>";
                     echo "<thead>";
                     
                     
                     echo "<th style='text-align: center;border:1px solid black'>";
                     echo "Name";
                     echo "</th>";
                     echo "<th style='text-align: center;border:1px solid black'>";
                     echo "Type";
                     echo "</th>";
                     
                    
                     echo "<th style='text-align: center;border:1px solid black'>";
                     echo "Price";
                     echo "</th>";
                     
                     echo "<th style='text-align: center;border:1px solid black'>";
                     echo "Validity";
                     echo "</th>";
                     
                     echo "</thead>";
              
                     while($row = $result->fetch_assoc()) {
                  
                     
                     echo "<tr>";
                     
            
                     
                     echo "<td style='border:1px solid black'>";
                     echo $row["product_name"]; 
                     echo "</td>";
                     
                     
                     echo "<td style='border:1px solid black'>";
                     echo $row["product_type"]; 
                     echo "</td>";
                     
                   
                     echo "<td style='border:1px solid black'>";
                     echo $row["product_price"]; 
                     echo "</td>";
                     
                     echo "<td style='border:1px solid black'>";
                     echo $row["product_validity"]; 
                     echo "</td>";
                     
                     echo "</tr>";
                     
                  
                     } 
                  echo "</table>";
              } else {
                         echo "<h2 style='color:red'>No any data exists !!!</h2>";
                     } 
                 $conn->close();
         ?>
    </div>
    <!--end show admin-->

  
    <br>



    <br><br>
    <div style="margin-top:500px" id="footer">
        <span>
            Copyright @ 2018-2020 PCBudgetExpert
        </span>

        <br>

        <span><a href="#">About Us</a></span><br>
        

    </div>

</body>

</html>
<?php
}
?>