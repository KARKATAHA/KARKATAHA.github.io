<?php
	session_start();
	$con=mysqli_connect('localhost','root','');//Conection with server
	mysqli_select_db($con,'Project');
	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
	$query="SELECT * FROM `users` WHERE `email` = '$user_email' AND `password` = '$user_password'";
	$result=mysqli_query($con, $query);
	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$row['username'];
		$_SESSION['id']=$row['id'];
		$_SESSION['is_logged_in']=1;
		if($row['type']=="user")
		{
			echo '<script language="javascript">';
			echo 'alert("Loggedin Succesfully")';
			echo '</script>';
			header('Location: profile.php');
		}
		else if($row['type']=="admin")
		{
			header('Location: admin/admin_profile.php');
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Please Check your Email or password")';
		echo '</script>';
		$_SESSION['reg']=0;
  		include("index.php");
	}
?>