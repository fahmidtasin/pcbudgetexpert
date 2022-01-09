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
    

    <br>      

    
    
    <div> <!--Shortcut-->
         <form method="post" action="checkaddproduct.php">
    
    <table style="width:25%;margin-left:37%;border: 1px solid black;text-align:center">
    
    
         <tr>
            
             <td>Product ID: </td>
             <td><input type="text" id="pid" name="pid" placeholder="ex. 0125"></td>
                     
        </tr>
        
        <tr>
            
             <td>Product Name: </td>
             <td><input type="text" id="pname" name="pname" placeholder="product name"></td>
                     
        </tr>
        
        <tr>
            
             <td>Product Type: </td>
             <td><input type="text" id="ptype" name="ptype" placeholder="product type"></td>
                     
        </tr>
         
        <tr>
            
             <td>Product Pin: </td>
             <td><input type="text" id="ppin" name="ppin" placeholder="product pin"></td>
                     
        </tr>
        
        <tr>
            
             <td>Product Price: </td>
             <td><input type="text" id="pname" name="pprice" placeholder="product price"></td>
                     
        </tr>
        
        <tr>
            
             <td>Product Validity: </td>
             <td><input type="text" id="pname" name="pvalidity" placeholder="product validity"></td>
                     
        </tr>
        
    </table>
    <br>
   <input style="margin-left:46%" type="submit" id="ua" value="ADD">

</form>

    </div><!--shortcut-->
    
    
    
    <br><br>
    <div style="margin-top:500px" id="footer">
        <span>
            Copyright @ 2018-2020 PCBudgetExpert
        </span>

        <br>

        <span><a href="#">About Us</a></span><br>
        Follow Us On <a href="https://www.facebook.com" <i class="fa fa-facebook-square" style="font-size:24px"></i></a>

    </div>

</body>

</html>
<?php
}
?>