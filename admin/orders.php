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
                    <li><a href="profiledetails.php">Profile Details</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </span>
    </div>



    <h2 style="text-align: center">Orders:</h2>
    <hr>

    <!--show admins-->
    <div>
        <form method='post' action='deleteproduct.php'>
            <input style='margin-left:84%' type='search' name='idsearch' placeholder='enter ID to delete'>
            <a style='float:right'><input type='submit' value='delete'></a>
        </form>
        <?php
        
   
// Create connection
          try{
               $conn = new PDO("mysql:host=localhost;dbname=pcbudgetexpert", "root", "");
// Check connection
        
                $sql = "select user_email,COUNT(product_id) from cart group by user_email";
                $result = $conn->query($sql);
                $table=$result->fetchAll(PDO::FETCH_NUM);
        $sum=0;
        echo "<table style='border: 1px solid black;width:100%'>"; 
         echo "<thead>";
         echo "<tr style='border: 1px solid black'>
          
          <th style='border: 1px solid black'>USER EMAIL</th>
        
          <th style='border: 1px solid black'>Total Products</th></tr>";
          echo "</thead>";
    // output data of each row
              echo "<tbody id='tbody'>";
               foreach ($table as $row) {
          
                        $sum=$sum+1;
                        echo "<tr style='border: 1px solid black'>
                        
                        <td style='border: 1px solid black'>($sum) $row[0]</td>
                        <td style='border: 1px solid black'>$row[1]</td>
                        
                        "."<td><input type='button' value='Delete' onclick='deleteM($row[0])'></td></tr>";
                        
                        }
          
                       
                    } catch (PDOException $ex) {
                    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                }
    echo "</tbody>";
    echo "</table>" ;
                
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