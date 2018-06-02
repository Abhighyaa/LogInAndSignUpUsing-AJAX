<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

require 'connectdb.php';
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$date =  $_POST["date"];
$month = $_POST["month"];
$year = $_POST["year"];
//$dob =$date."/".$month."/".$year;
if($_POST["gender"]=="Female"){
	$gender=0;
}
else{
	$gender=1;
}

$check = "SELECT * FROM users where email = '$email' or mobile = '$mobile' or name='$uname'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
	$error= "User already exists";
	$gender=$_POST['gender'];
	header('location:signUp.php?name='.$name.'&gender='.$gender.'&error='.$error);
}
else{
$sql = "INSERT INTO users (name,email,mobile,uname,password,gender) VALUES ('$name','$email','$mobile','$uname','$password','$gender')";

if ($conn->query($sql) === TRUE) {

	session_start();
	$_SESSION["name"]=$name;
    header('location: index.php');
   
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
}

?>