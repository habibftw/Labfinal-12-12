<?php
	session_start();
	require_once('db/functions.php');
	//define(name, value)
	
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$pass= $_POST['pass'];
		
	

		if(empty($uname) == true || empty($pass) == true){
			echo "null submission!";
		}else{

			$count = validate($uname, $pass);
			$utype = usertype($uname,$pass);

			if($count > 0) {
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $pass;

				setcookie("username", $uname, time()+3600, "/");
				header('location:adminhome.php');

			}else{
				echo "invalid username/password";
			}
		}
	}else{
		header('location: login.php');
	}


?>