<?php
if(isset($_POST['signup'])){
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
			echo "fill all!";
		}
		elseif ($pass!=$cpass) {
		echo "password doesn't match";	
		} else{
			if (checkUniqueValue($uname)) {
				echo "Sorry. This username is already taken.";
				//header('location: Registration.php');
				
			
				//exit();
			}
			if (checkUniqueValue($email)) {
				echo "Sorry. This email has been used already.";
				//header('location: Registration.php');
				
				//exit();
			}
			else{
            $conn=mysqli_connect('localhost','root','','webtech');
			$sql="insert into users(uname,name,email,pass,cpass,utype) values('{$uname}','{$name}','{$email}','{$pass}','{$cpass}','{utype}')";
			$set=mysqli_query($conn,$sql);
		header('location: signin.php');
		mysqli_close($conn);
}
	}
			}
			function checkUniqueValue($value){
				 $conn=mysqli_connect('localhost','root','','webtech');						
			$found = 0;
						$sql="select * from users where uname='{$value}' or email='{$value}'";
			$get=mysqli_query($conn,$sql);
			$user=mysqli_fetch_assoc($get);
						if($user["uname"] == $value){
							$found = 1;
						}
						if($user["email"] == $value){
							$found = 1;
						}
					
			return $found;
		}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Registration</legend>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td> Confirm Password:</td>
				<td><input type="password" name="cpass"></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Usertype:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="login.php">SignIn</a></td>
			</tr>
			
		</table>
		</fieldset>
	</form>

	
</body>
</html>