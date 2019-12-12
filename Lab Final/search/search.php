<?php
	
	
	
	require_once('db.php');
	$term = $_POST['key'];
	$con = getConnection();
	$sql = "select name from users where name like '%{$term}%'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['name']."|"."<br>";
	}
	echo $row;

?>