<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->

<?php
if ($_REQUEST['page'] == "start") require "start1.php";
	elseif ($_REQUEST['page'] == "contact") require "contact.php";
	elseif ($_REQUEST['page'] == "about") require "about.php";
	else require "start1.php";

?>
