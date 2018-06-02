<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="signInScript.js"></script>
</head>
<body>
	<form method="POST" action="checkuser.php">
		
		<fieldset>
			
			<legend><img src="newuser.jpeg" id="img"></legend>

			<label> Mobile : </label>
			<input type="text" name="mobile" id="mobile" placeholder="mobile or email" value="<?php echo $_GET['mobile']; ?>" onkeyup="return test()" required><br>
			<label> Password : </label>
			<input type="password" name="password" placeholder="Password" value="<?php echo $_GET['password'];?>" required><br>
			<p></p>
			<?php

				if(isset($_GET['error'])){

					echo "<br/>".$_GET['error']."<br/><br/>";	
				}

			?>
			<input type="submit" value="Sign In" >
		</fieldset>

	</form>
</body>
</html>