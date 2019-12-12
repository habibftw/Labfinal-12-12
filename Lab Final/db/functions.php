<?php
	require_once('db.php');

	function validate($uname, $pass){
		$conn = getConnection();
		$sql = "select * from users where uname='{$uname}' and pass='{$pass}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
	
		return count($user);
	}
	
		function usertype($uname, $pass){
		$conn = getConnection();
		$sql = "select utype from users where uname='{$uname}' and pass='{$pass}'";
		$result = mysqli_query($conn, $sql);
		$usertype = mysqli_fetch_assoc($result);
		return $usertype;
		
	}


	function register($uname,$email,$name,$pass,$cpass,$utype){
		$conn = getConnection();
		$sql="insert into users values('','{$uname}','{$name}','{$email}','{$pass}','{$cpass}',' {$utype}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>