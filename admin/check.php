<?php
 session_start();

	$uname=$_POST['lemail'];
	$pass=$_POST['lpass'];
	
	if(!empty($uname)  && !empty($pass) ){
		$host="localhost";
		$username="root";
		$password="";
		$database="pcbudgetexpert";
		
		try{
			$con = new PDO("mysql:host=$host;dbname=$database", $username, $password);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
			$stmt="SELECT admin_email,admin_password FROM admin";
			$returnobject=$con->query($stmt);
			
			$table=$returnobject->fetchAll(PDO::FETCH_NUM);
			
			$isvalid=false;
			foreach($table as $row){
				if($row[0] == $uname && $row[1]==$pass){
					$isvalid=true;
					break;
				}
			}
			
			if($isvalid==true){
                $_SESSION['lemail'] = $uname;
				echo "<script>window.location.assign('home.php')</script>";
			}
			else{
				echo "<script>window.location.assign('login.php?status=wrongdata')</script>";
			}
			
		}
		catch(PDOException $ex){
			echo "<script>window.location.assign('login.php?status=dberror')</script>";
		}
		
   }
	

    else{
		echo "<script>window.location.assign('login.php?status=invalid')</script>";
	}
	
?>