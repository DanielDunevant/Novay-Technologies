<h2>Activation</h2>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$p_Error = "";
		$p_username = htmlspecialchars($_POST["username"]);
		$p_hash = htmlspecialchars($_POST["hash"]);
		
		$db_conn = new mysqli("localhost", "root", "JPPCacc7", "musicapp");
		if (!$db_conn || $db_conn->connect_error) $p_Error = "Could not connect to database; Connection failed!";
		if ($p_Error == "")
		{
			$sql_check1 = "SELECT hash FROM confirmation WHERE username = '$p_username'";
			$sql_result1 = $db_conn->query($sql_check1);
			if ($sql_result1)
			{
				if ($sql_result1->num_rows <= 0) $p_Error = "Incorrect Username!";
				else
				{
					$p_get_hash = $sql_result1->fetch_assoc();
					if (!($p_hash == $p_get_hash)) $p_Error = "Incorrect Activation Information!";
				}
			}
			else $p_Error = "Could not access database; Connection failed!";
			
			if ($p_Error == "")
			{
				$sql_update = "UPDATE confirmation SET confirmed=1 WHERE username = '$p_username'";
				$sql_result2 = $db_conn->query($sql_update);
				if (!$sql_result2) $p_Error == "Could not activate account due to database issues!";
			}
		}
		$db_conn->close();
		
		if ($p_Error == "") echo "<p>You have successfully activated your account!</p><br />";
		else echo "<p>$p_Error</p><br />";
	}
	else echo "<p>No account information was given!</p>";
?>
