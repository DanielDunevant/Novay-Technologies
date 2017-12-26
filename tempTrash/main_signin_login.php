<h2>Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); echo htmlspecialchars("?page=loggedin");?>" method="post">
	<label class = "label">Username:</label> <input class = "input" type="text" name="username" /> <br />
	<label class = "label">Password:</label> <input class = "input" type="text" name="password" /> <br />
<br/><br/><br/>
	<input class = "submit" type="submit" />
</form>
