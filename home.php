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
        <span style="float:right;margin-top:15px;margin-right: 80px ">
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



    <div id="adv">
        <img src="background.jpg">
    </div>


    <ul id="menubar-list">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="viewproducts.php">All Categories</a></li>
        <li><a href="viewprocessors.php">Processors</a></li>
        <li><a href="viewrams.php">Rams</a></li>
        <li><a href="viewharddrives.php">Hard Drives</a></li>
        <li><a href="viewmobos.php">Motherboards</a></li>
        <li><a href="viewgpus.php">Graphics Cards</a></li>
        <li><a href="viewpsus.php">Power Supplies</a></li>

    </ul>


    <br>
    <form method="post" action="pcbudget.php">
        <div>
            <h2 style="text-align: center;background: black; color:red">MY BUDGET</h2>
            <h4 style="text-align:center">Select your Budget:</h4>
            
            <h5 style="text-align:center" >For Processor: <input name="option1" type="number" max="30000" min="8000" value="8000" step="1000"></h5>
            
            
            <h5 style="text-align:center">For Ram: <input  name="option2" type="number" max="12000" min="3000" value="3000" step="3000"></h5>
            
            
            <h5 style="text-align:center">For Hard Drive: <input  name="option3" type="number" max="6000" min="2500" value="2500" step="2500"></h5>
            
            
            <h5 style="text-align:center" >For Graphics Card: <input  name="option4" type="number" max="50000" min="8000" value="8000" step="1000"></h5>
            
            
            <h5 style="text-align:center" >For Motherboard: <input name="option5" type="number" max="10000" min="6000" value="6000" step="1000"></h5>
            
             <h5 style="text-align:center" >For Casing and Power Supply: <input name="option6" type="number" max="2000" min="1200" value="1200" step="100"></h5>
            
        </div>
        <!--End Range Script-->
        <br>
        <input style="margin-left: 45%" type="Submit" value="Show My Setup">

    </form>

    <br>
    <br>
    <br>

    <div id="footer">
        <span>
            Copyright @ 2018-2020 PCBudgetExpert
        </span>

        <br>

        <span><a href="#">About Us</a></span>

    </div>

</body>

</html>
<?php
}
?>