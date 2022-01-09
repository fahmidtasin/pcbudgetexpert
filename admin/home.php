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

    <hr>
    
    
    <h1 style="text-align: center">Welcome <?php echo $_SESSION['lemail'] ?>!</h1> 

    <br>      

    
    
    <div> <!--Shortcut-->
        <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class="active"><a style="background-color: skyblue" href="home.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
            <li><a href="#"><img src="../images/admin.jpg" width="100" height="100" alt="not found"/></a></li>
        <!--will work-->
        <li><a href="manageusers.php"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
	<li><a href=""><span class="glyphicon glyphicon-envelope"></span> Mange  Notification</a></li>
        <li><a href="addproducts.php"><span class="glyphicon glyphicon-plus"></span>Add Products</a></li>
        <li><a href="viewproducts.php"><span class="glyphicon glyphicon-list"></span>View All Products</a></li>
               <li><a href="orders.php"><span class="glyphicon glyphicon-pencil"></span>View Orders</a></li>
          </ul>
        </div>
      </div>
    </div>      

    </div><!--shortcut-->
    
    
    
    <br><br>
    <div style="margin-top:500px" id="footer">
        <span>
            Copyright @ 2018-2020 PCBudgetExpert
        </span>

        <br>

        <span><a href="#">About Us</a></span><br>
        Follow Us On <a href="https://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:24px"></i></a>
    </div>

</body>

</html>
<?php
}
?>