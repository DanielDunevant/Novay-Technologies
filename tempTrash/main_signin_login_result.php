<h2>Login</h2>
<?php
	function trim_input($p_data)
	{
		$p_data = trim($p_data);
		$p_data = stripslashes($p_data);
		$p_data = htmlspecialchars($p_data);
		return $p_data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$p_Error = "";
		$p_username = trim_input($_POST["username"]);
		$p_password = trim_input($_POST["password"]);
		
		if ($p_Error == "" && empty($p_username)) $p_Error = "Username is required!";
		if ($p_Error == "" && empty($p_password)) $p_Error = "Password is required!";
		
		if ($p_Error == "")
		{
			$db_conn = new mysqli("localhost", "root", "JPPCacc7", "musicapp");
			if (!$db_conn || $db_conn->connect_error) $p_Error = "Could not connect to database; Connection failed!";
			if ($p_Error == "")
			{
				$sql_check1 = "SELECT password FROM users WHERE username = '$p_username'";
				$sql_result1 = $db_conn->query($sql_check1);
				if ($sql_result1)
				{
					if ($sql_result1->num_rows <= 0) $p_Error = "Incorrect Login Information!";
					else
					{
						$p_password_hash = $sql_result1->fetch_assoc();
						if (!password_verify($p_password, $p_password_hash["password"])) $p_Error = "Incorrect Login Information!";
					}
				}
				else $p_Error = "Could not access database; Connection failed!";
				
				$sql_check2 = "SELECT confirmed FROM confirmation WHERE username = '$p_username'";
				$sql_result2 = $db_conn->query($sql_check2);
				if ($sql_result2)
				{
					if ($sql_result2->num_rows <= 0) $p_Error = "Incorrect Login Information!; Account inactive.";
					else
					{
						$p_bConfirmed = $sql_result2->fetch_assoc();
						if (!$p_bConfirmed) $p_Error = "Account needs to be activated!";
					}
				}
				else $p_Error = "Could not access database; Connection failed!";
				
				if ($p_Error == "") $_SESSION["username"] = $p_username;
			}
			$db_conn->close();
		}
		
		if ($p_Error == "")
		{
			echo "<p>You have successfully logged in!</p><br />";
			echo "<a href='index.php?page=search'>Find a radio</a>";
		}
		else
		{
			echo "<p>$p_Error</p><br />";
			echo "<a href='index.php?page=login'>Go Back</a>";
		}
	}
	else echo "<p>No account information was given!</p>";
?>