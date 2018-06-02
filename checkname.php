<?php

require 'connectdb.php';

$mobile = $_REQUEST["name"];
$gender = "2";

$check = "SELECT * FROM users where email = '".$mobile."' or mobile = '".$mobile."'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

		$gender = $row['gender'];
		//var_dump($gender);
		//echo $gender;
	}

}

$img = "newuser.jpeg";
$img0 = "user-f.png";
$img1 = "user_m.png";

// echo "hjgk";
if($gender==0){
	echo $img0;
}
if($gender==1){
	echo $img1;
}

if($gender==2){
	echo $img;
}
exit();

?>