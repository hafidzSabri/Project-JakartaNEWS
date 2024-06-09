<?php

include "koneksi.php";

if( isset($_POST["login"])){

	$user = $_POST["user"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE user ='$user'");

	if( mysqli_num_rows($result) === 1){
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
	<link rel="icon" type="image/x-icon" href="/img/icon.png">
    <title>Login JakartaNEWS</title>
</head>
<body>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Jakarta<span>NEWS</span></div>
		</div>
		<br>

		<?php if( isset($error)): ?>
			<span>salahhhhhh</span>
		<?php endif; ?>

		<form action="admin.php" method="post">
			<div class="login">
					<input type="text" placeholder="username" id="user" name="user" required><br>
					<input type="password" placeholder="password" id="password" name="password" required><br>
					<input type="submit" name="login" value="Login">
			</div>
		</form>
</body>
</html>