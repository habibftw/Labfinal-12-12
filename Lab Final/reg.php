



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="regCheck.php">
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
					<td>User type</td>
					<td>
						<select name="utype">
							
							<option value="Admin">Admin</option>
							<option value="User">User</option>
						</select>
					</td>
					
					
					
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