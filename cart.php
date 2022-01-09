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
        <a style="color:red;margin-left:70%" href="cart.php"><input type='button' value="MY CART"></a>
        <span style="float:right;margin-top:15px;margin-right: 50px ">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Profile
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <h5 style="text-align: center">Welcome
                        <?php echo $_SESSION['lemail'] ?>!</h5>
                    <li><a href="profiledetails.php">Profile Details</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </span>
    </div>



    <h2 style="text-align: center">CART:</h2>
    <hr>

    <!--show admins-->
    <div>

        <?php
               
     
 try{
// Create connection
                //$conn = new PDO($servername, $username, $password, $dbname);
      
                $DB_host = "localhost";
                $DB_user = "root";
                $DB_pass = "";
                $DB_name = "pcbudgetexpert";
     
                $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Check connection
                $uemail=$_SESSION['lemail'];
                echo $uemail;
     
     
                $sql = "SELECT * FROM cart where user_email Like '%$uemail%'";
                $result = $conn->query($sql);
                $table=$result->fetchAll(PDO::FETCH_NUM);
         echo "<table style='border: 1px solid black;width:100%'>"; 
         echo "<thead>";
         echo "<tr style='border: 1px solid black'>
          <th style='border: 1px solid black'>Product Name</th>
          <th style='border: 1px solid black'>Product Type</th>
          <th style='border: 1px solid black'>Product Price</th>";
        echo "</thead>";
     echo "<tbody id='tbody'>";
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
                        "."<td><input type='button' value='Delete' onclick='deleteMe($row2[0])'></td></tr>";
                        
                        }
          
                       
                    }    
     
           } catch (PDOException $ex) {
                    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
                }
    echo "</tbody>";
    echo "</table>" ;
          
    
         ?>

    </div>
    <!--end show admin-->
    <script>
        function deleteMe(id) {
            var req = new XMLHttpRequest();

            req.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('tbody').innerHTML = req.responseText;
                }
            }

            req.open("GET", "deletefromcart.php?id=" + id, true);
            req.send();
        }

    </script>

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
