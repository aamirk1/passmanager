<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
     	<h2>Login Page</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Username" required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
    </form>
</body>
</html>