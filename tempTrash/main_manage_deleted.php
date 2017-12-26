<h2>Account Deleted</h2>
<?php
	if ($_SESSION["username"] != NULL)
	{
		$p_username = $_SESSION["username"];
		$db_conn = new mysqli("localhost", "root", "JPPCacc7", "musicapp");
		if ($db_conn && !$db_conn->connect_error)
		{
			$sql_del = "DELETE FROM users WHERE username = '$p_username'";
			$sql_result = $db_conn->query($sql_del);
			if ($sql_result)
			{
				echo "<p>You have deleted your account</p>";
				$_SESSION["username"] = NULL;
				header("Refresh:0");
			}
			else echo "<p>There was a problem with deleting your account</p>";
		}
		else echo "<p>There was a problem with connecting to the database</p>";
	}
	else echo "<p>You have deleted your account</p>";
?>
