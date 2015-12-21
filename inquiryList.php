<?php
	$authorized = FALSE;
	$URL = "DisplayInquiries.html";
	if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
	{
		$authFile = file("password.txt");

		foreach ($authFile as $login)
		{
			list($username, $password) = explode (":", $login);
			$password = trim($password);
			if (($username == $_SERVER['PHP_AUTH_USER']) && ($password == $_SERVER['PHP_AUTH_PW']))
			{
				$authorized = TRUE;
				header("Location: $URL");
				break;
			}
		}
	}

	if (! $authorized)
	{
		header('WWW-Authenticate: Basic Realm="Inquiry Password"');
		header('HTTP/1.0 401 Unauthorized');
		exit;
	}
?>