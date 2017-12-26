<h2>Logout</h2>
<p>You have successfully logged out</p>
<?php
	if ($_SESSION["username"] != NULL)
	{
		$_SESSION["username"] = NULL;
		header("Refresh:0");
	}
?>