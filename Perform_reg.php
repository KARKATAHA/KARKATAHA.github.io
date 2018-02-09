<?php
	$con=mysqli_connect('localhost','root','');//Conection with server
	mysqli_select_db($con,'Project');//selecting database attached with this server.
	$user_name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check="SELECT `email` FROM `users`";
	$res=mysqli_query($con,$check);

	//Checking user already exist or not

	while($data=mysqli_fetch_assoc($res)){
		if($data['email']==$email){
			$var=1;
			break;
		}
		else{
			$var=0;
		}
	}

	if($var!=0){
		echo '<script language="javascript">';
		echo 'alert("User Already Exist")';
		echo '</script>';
		include("index.php");
	}
	else{
		$query="INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES (NULL, '$user_name', '$password', '$email','user')";
			if(mysqli_query($con,$query)){
	//query are in objective to access individual element convert into array
  				$_SESSION['reg']=1;
  				echo '<script language="javascript">';
				echo 'alert("Registration Succesful")';
				echo '</script>';
  				include("index.php");
  			}
	}
?>