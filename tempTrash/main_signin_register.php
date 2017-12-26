<h2>Register</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); echo htmlspecialchars("?page=registered");?>" method="post">
	<label class="label">Username:</label> <input class= "input" type="text" name="username" /> <br />
	<label class = "label">E-Mail:</label> <input class="input" type="text" name="email" /> <br />
	<label class = "label">Password:</label> <input class = "input" type="text" name="password" /> <br />
 <br/><br/><br/><br/><br/>
	<input class ="submit" type="submit" />
</form>
