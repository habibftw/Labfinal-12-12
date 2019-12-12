<?php
	
	require_once('db/functions.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$utype = $_POST['utype'];
			
		
			if(empty($uname)==true ||
		empty($email)==true ||
		empty($pass) == true ||
		empty($cpass) == true || 
		empty($name)==true || 
		empty($utype)==true){
			echo "null submission!";
		}else{

			$status = register($uname,$email,$name,$pass,$cpass,$utype);

			if($status){

				header('location: login.php?msg=success');
			}else{
				header('location: reg.php?msg=dberror');
			}
		}

	}else{
		header('location:reg.php');
	}


?>