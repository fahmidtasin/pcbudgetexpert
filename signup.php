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

    <div>
        <h1 style="text-align: center; background-color: #7F0000">Sign Up</h1>
        <a  href="login.php"><input type="button" value="Back to Login page" title="Login"></a>
    </div>

    <form method='post' action='checksignup.php'>
        <table style="margin-left: 38%" width="25%">

            <thead></thead>

            <tbody>
                <tr>
                    <td>
                        <h2>User Name: </h2>
                    </td>
                    <td><input type="text" name="suname" placeholder="username"></td>
        
                </tr>
                <tr>

                    <td>
                        <h2>Email: </h2>
                    </td>
                    <td><input type="email" name="semail" placeholder="email"></td>



                </tr>

                <tr>
                    <td>
                        <h2>Password: </h2>
                    </td>
                    <td><input type="password" name="spass" placeholder="password"></td>

                </tr>
                
                <tr>
                    <td>
                        <h2>Address: </h2>
                    </td>
                    <td><textarea name="saddress" rows="4" cols="50" placeholder="address"></textarea></td>

                </tr>

            </tbody>


        </table>


        <input style="margin-left: 47%" type="submit" value="Register">
    </form>

    <div id="footerSignUp">
        <span>
            Copyright @ 2018-2020 PCBudgetExpert
        </span>

        <br>

        <span><a href="#">About Us</a></span>

    </div>

</body>



</html>
