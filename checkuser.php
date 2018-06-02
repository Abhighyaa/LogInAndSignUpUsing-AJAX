<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

	require 'connectdb.php';

	$mobile = $_POST['mobile'];
	$password = $_POST['password'];

	$sql = "SELECT name from users where (mobile = '$mobile' or email = '$mobile') and password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			session_start();
			$_SESSION["name"]=$row['name'];
			header('location: index.php');
    	}
    }
	
	else {

		$sql1 = "SELECT name from users where (mobile = '$mobile' or email = '$mobile')";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    		$error  = "Invalid password!!";
    		$password="";
    		header('location:signIn.php?mobile='.$mobile.'&password='.$password.'&error='.$error);
    	}
    	else {
    		$mobile="";
    		$password="";
    		$error="No account matches this mobile no or email id";
    		header('location:signIn.php?mobile='.$mobile.'&password='.$password.'&error='.$error);
    	}
	}
	
	$conn->close();

}

?>