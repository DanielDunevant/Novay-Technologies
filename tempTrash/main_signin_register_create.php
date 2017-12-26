<h2>Register</h2>
<?php
	function trim_input($p_data)
	{
		$p_data = trim($p_data);
		$p_data = stripslashes($p_data);
		return $p_data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$p_Error = "";
		$p_username = trim_input($_POST["username"]);
		$p_email = trim_input($_POST["email"]);
		$p_password = trim_input($_POST["password"]);
		
		if ($p_Error == "" && empty($p_username)) $p_Error = "Username is required!";
		if ($p_Error == "" && empty($p_email)) $p_Error = "E-Mail is required!";
		if ($p_Error == "" && empty($p_password)) $p_Error = "Password is required!";
		
		if ($p_Error == "" && (strlen($p_username) >= 255 || strlen($p_email) >= 255 || strlen($p_password) >= 255)) 
			$p_Error = "All fields must be less than 255 characters long!";

		if ($p_Error == "" && !filter_var($p_email, FILTER_VALIDATE_EMAIL)) $p_Error = "E-Mail is invalid!";
		
		if ($p_Error == "")
		{
			$db_conn = new mysqli("localhost", "root", "JPPCacc7", "musicapp");
			$p_username = $db_conn->real_escape_string($p_username);
			$p_email = $db_conn->real_escape_string($p_email);
			$p_password = $db_conn->real_escape_string($p_password);
			if ($db_conn->connect_error) $p_Error = "Could not connect to database; Connection failed!";
			if ($p_Error == "")
			{
				$sql_check1 = "SELECT * FROM users WHERE username = '" . $p_username . "'";
				$sql_result1 = $db_conn->query($sql_check1);
				if ($sql_result1)
				{
					if ($sql_result1->num_rows > 0) $p_Error = "Username already exists!";
				}
				else $p_Error = "Could not access database; Connection failed!";
				
				$sql_check2 = "SELECT * FROM users WHERE email = '" . $p_email . "'";
				$sql_result2 = $db_conn->query($sql_check2);
				if ($sql_result2)
				{
					if ($sql_result2->num_rows > 0) $p_Error = "E-Mail already exists!";
				}
				else $p_Error = "Could not access database; Connection failed!";
				
				if ($p_Error == "")
				{
					$p_password_hash = password_hash($p_password, PASSWORD_BCRYPT);
					$p_activation_hash = md5(rand(0,1000));
					$sql_register = "INSERT INTO users (username, email, password) 
									VALUES ('" . $p_username . "', '" . $p_email . "', '" . $p_password_hash . "')";
					$sql_registerc = "INSERT INTO confirmation (username, confirmed, hash) VALUES ('" . $p_username . "', 0, '" . $p_activation_hash . "')";
					if (!$db_conn->query($sql_register)) $p_Error = "Could not register; Connection failed!";
					if (!$db_conn->query($sql_registerc)) $p_Error = "Could not register; Connection failed!";
					
					if ($p_Error == "")
					{
						$email_to = $p_email;
						$email_subject = "Entunity Activation Information";
						$email_message = "
						
						Thank you for registering with Entunity!
						Your account has been ccreated; plase use the following credentials to login after activating your account.
						
						-------------------------------
						username: $p_username
						password: $p_password
						-------------------------------
						
						Please click on this link to activate your account:
						http://www.entunity.com/index.php?page=activate&username=$p_username&hash='.$hash.'
						
						";
						
						$email_headers = "From:noreply@entunity.com" . "\r\n";
						mail($email_to, $email_subject, $email_message, $email_headers);
					}
				}
			}
			$db_conn->close();
		}
		
		if ($p_Error == "")
		{
			echo "<p>Account created successfully!</p><br />";
			echo "<p>An email containing a link to confirm your account was sent to the email address you provided.
			 Please click on this link to activate your account. You will be unable to login until you do so.</p><br />";
			echo "<a href='index.php?page=login'>Login</a>";
		}
		else
		{
			echo "<p>"; echo $p_Error; echo "</p><br />";
			echo "<a href='index.php?page=register'>Go Back</a>";
		}
	}
	else echo "<p>No account information was given!</p>";
?>
