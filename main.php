<?php
	if ($_REQUEST['page'] == "about") require "about.php";
	elseif ($_REQUEST['page'] == "help") require "help.php";
	elseif ($_REQUEST['page'] == "faq") require "faq.php";
	elseif ($_REQUEST['page'] == "contact") require "contact.php";
	elseif ($_REQUEST['page'] == "home") require "start.php";
	else require "start.php";
?>
