<?php

$email = $_REQUEST["email"];
$emailErr = "";

require 'connectdb.php';

$check = "SELECT * FROM users where email = '$email'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
	$emailErr= "Email already exists";
}

else if ($email !== "") {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format"; 
	}
    
} 
echo $emailErr === "" ? " " : $emailErr;

?>