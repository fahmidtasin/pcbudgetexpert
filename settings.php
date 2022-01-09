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
    
    <h2 style="text-align: center">Users/Update Panel</h2>
    <hr>
    
 <form method="post" action="updateuser.php">
    
    <table style="width:25%;margin-left:37%;border: 1px solid black;text-align:center">
    
    
         <tr>
            
             <td> Old Password: </td>
             <td><input type="password" id="uemail" name="uopass" placeholder="old password"></td>
                     
        </tr>
        
        <tr>
            
             <td> New Password: </td>
             <td><input type="password" id="upass" name="unpass" placeholder="new password"></td>
                     
        </tr>
    

    </table>
    <br>
   <input style="margin-left:46%" type="submit" id="ua" value="Update">

</form>
  
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