<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<form method="POST" action="new_user.php" id="submit">
		
		<section>
			<h2>Create an account.</h2>
			<h3>Its free and will always be.</h3>
		</section>

		<fieldset>
			
			<legend><img src="newuser.jpeg" id="img"></legend>

			<label>Name : </label>
			<input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>" required><br>
			<span id="error"></span><br>
			<label>Email : </label>
			<input type="text" name="email" placeholder="email address" required><br>
			<span id="error"></span><br>
			<label>Mobile : </label>
			<input type="text" name="mobile" placeholder="Mobile no" required><br>
			<span id="error"></span><br>
			<label>Gender : </label><input type="radio" name="gender" value=Female id="gender0">Female</label>
			<input type="radio" name="gender" value=Male id="gender1">Male<br>
			<label>Username</label>
    		<input type="text" name="uname"><br>
    		<span id="error"></span><br>
			<label>Password : </label>
			<input type="password" name="password" placeholder="New password" required><br>
			<span id="error"></span><br>
			<label>Birthday : </label>
			<input type="date" data-date-inline-picker="true" placeholder=""/>
			<br>
			
			<input list="country" name="country" id="countr" placeholder="country">
    		<datalist name="country" id="country"></datalist>

    		<input list="state" type="state" name="state" placeholder="state">

    		<datalist id="state" name="state" ></datalist><br><br>
    		

			<p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>

			<?php

				if(isset($_GET['error'])){

					echo $_GET['error']."<br/><br/>";	
				}

			?>

			<input type="submit" name="Sign Up">

		</fieldset>

		<section>
			<a href="signIn.php"><h3>Already have an account?</h3></a>
		</section>

		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="country.js"></script>
	</form>
</body>
</html>