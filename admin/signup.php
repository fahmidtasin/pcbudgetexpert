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
        <h1 style="text-align: center; background-color: #7F0000">Registration Form</h1>
        <a  href="login.php"><input type="button" value="Back to Login page" title="Login"></a>
    </span>

    <form method="post" action="checksignup.php">
        <table style="margin-left: 40%" width="20%">

            <thead></thead>

            <tbody>
                <tr>

                    <td>
                        <h2>User Name: </h2>
                    </td>
                    <td><input type="text" id="suname" name="suname" placeholder="username"></td>
                    
                </tr>
            
                
                <tr>
                    <td><h2>Email: </h2></td>
                    <td><input type="email" id="semail" name="semail" placeholder="ex: abc@gmail.com"></td>
                
                </tr>
                
                <tr>

                    <td>
                        <h2>Password: </h2>
                    </td>
                    <td><input type="password" id="spass" name="spass" placeholder="password"></td>
                    
                </tr>
            
               

            </tbody>


        </table>
        
        <input style="margin-left: 47%" type="submit" id="ssubmit" value="SignUp" title="signup">
        
    </form>
    
    
    <?php
    
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
