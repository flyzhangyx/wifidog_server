<?php
	session_start();
	include("../conn.php");
	$token = $_GET['token'];
	$_SESSION['token']=$token;
	$sql="select * from users where usertoken='{$token}'";
	$res=mysqli_query($conn,$sql);
//    $sql1="update users set usertoken='{$token}' where userid= '2017210411'";
//    mysqli_query($conn,$sql1);
	// echo $sql;
	// $row=mysql_fetch_array($res);
	// print_r($row);
	if (mysqli_num_rows($res)>0) {
		echo ("Auth: 1");
		echo ("Messages: Allow Access\n");
		exit;
	}
	else
	{
		echo ("Auth: 0");
		echo ("Messages: No Access\n");
		exit;
	}
?>