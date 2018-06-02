<?php
session_start();

if(isset($_SESSION["name"]))
{
	echo "Welcome ";
	echo $_SESSION["name"];
}
else{
	header('location:signIn.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Index.php</title>
</head>
<body>
	<button onclick="endsession();">Logout</button>
	<script type="text/javascript">
		function endsession() {
			
			document.location.href="logout.php";
		}
	</script>
</body>
</html>
