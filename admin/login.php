<!DOCTYPE html>

<html>

<head>

    <style>
        #body {
 
            background: url(background.jpg);
            color: white;
            background-attachment: fixed;
            background-size: 100% 100%;
            background-repeat: no-repeat;


        }

        #footerSignUp {
            background-color: black;
            width: 100%;
            color: wheat;
            height: 100px;
            text-align: center;
            margin-top: 28%;
        }

    </style>


</head>

<body id="body">

    <span>
        <h1 style="text-align: center; background-color: #7F0000">Admin Login/SignUp</h1>
        
    </span>

    <form method="post" action="check.php">
        <table style="margin-left: 40%" border="1px solid black"    width="20%">

            <thead></thead>

            <tbody>
                <tr>

                    <td>
                        <h2>User Email: </h2>
                    </td>
                    <td><input type="text" id="luname" name="lemail" placeholder="username"></td>
                    
                </tr>
            
                
                <tr>
                    <td><h2>Password: </h2></td>
                    <td><input type="password" id="lpass" name="lpass" placeholder="password"></td>
                
                </tr>

            </tbody>


        </table>
        
        <input style="margin-left: 47%" type="submit" id="lsubmit" value="Log In" title="login">
        <a style="margin-left: 25px"  href="signup.php"><input type="button" value="Registration" title="signup"></a>
    </form>
    
    
    <?php
    
    $status="";
    if(isset($_GET['status'])){
        
               $status=$_GET['status'];
        
           if($status=='invalid'){
                        echo "<script>window.alert('Invalid input')</script>";
              }
           else if($status=='dberror'){
            echo "<script>window.alert('Database Connection Error!')</script>";
              }
        else if($status=='wrongdata'){
            echo "<script>window.alert('Wrong username or password')</script>";
              }
        }
    
    
    ?>
    
    

        <div id="footerSignUp">
            <span>
                Copyright @ 2018-2020 PCBudgetExpert
            </span>

            <br>

            <span><a href="#">About Us</a></span>

        </div>
    
</body>



</html>
