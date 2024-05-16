<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="" method="POST">
		<label for="username">Username:</label>
		<input type="text" name="username1" id="username">
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password1" id="password">
		<br><br>
		<input type="submit" value="Login" name="btnsav">
	</form>
</body>
</html>

<?php
if(isset($_POST['btnsav']))
{


// Get the user-submitted username and password
$username = $_POST['username1'];
$password = $_POST['password1'];

// Set the correct username and hashed password (for demonstration purposes)
$correct_username = "admin";
$correct_password_hash = password_hash("password", PASSWORD_BCRYPT);

// Verify the user-submitted username and password hash
if ($username === $correct_username && password_verify($password, $correct_password_hash)) {
    // If the user-submitted username and password are correct, redirect the user to a welcome page
    echo $correct_password_hash;
    exit();
} else {
    // If the user-submitted username and password are not correct, display an error message
    echo "Invalid username or password.";
}
}
?>
