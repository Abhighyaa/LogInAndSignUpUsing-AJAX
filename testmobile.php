<?php

$mobile = $_REQUEST["mobile"];

$mobileErr = "";

require 'connectdb.php';

$check = "SELECT * FROM users where mobile='$mobile'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
	$mobileErr= "Mobile already exists";
}

if ($mobile !== "") {
	if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
	  $mobileErr = "Only 10 digit number allowed!!"; 
	}
    
} 
echo $emailErr === "" ? " " : $mobileErr;

?>