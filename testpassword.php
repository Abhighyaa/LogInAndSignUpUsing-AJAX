<?php

$password = $_REQUEST["password"];

$passwordErr = "";

if ($password !== "") {
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
	  $passwordErr = "Weak Password. Enter strong one."; 
	}
    
} 
echo $passwordErr === "" ? " " : $passwordErr;

?>