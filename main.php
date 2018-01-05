<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
print"<!-- PHP for 'Novay Technologies' © 2017, authors: 'Daniel Dunevant & Jesse Primiani' -->";
$pageValue = $_GET['page'];
$arrayOfPages = array("start","about","services","contact");
if (in_array($pageValue,$arrayOfPages)) 
{
	print "<div class='row'>\n";
	print "<div class = 'col-md-11 col-sm-11 col-xs-11'>\n";
        require_once( $pageValue.".php");
	print "</div>\n";
	print "<div class = 'col-md-1 col-sm-1 col-xs-1'>\n";
	require "socialPanel.php";
	print "</div>\n";
	print "</div>\n";
}
else
{
	print "<div class='row'>\n";
	print "<div class = 'col-md-11 col-sm-11 col-xs-11'>\n";
        require_once( "start.php");
	print "</div>\n";
	print "<div class = 'col-md-1 col-sm-1 col-xs-1'>\n";
	require "socialPanel.php";
	print "</div>\n";
	print "</div>\n";
}
?>
