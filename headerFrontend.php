<!-E PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
echo<<<HEREDOC
<div class ="row">
	<a class="col-xs-12 col-md-12 col-sm-12"  href="index.php?page=start" >
		<img class = "img-responsive" id ='logoLarge' src ='images/NovayLogoVector.svg'>
	</a>
HEREDOC;
print "</div>";
//images/"image name"
$linkArray = array("start",
		   "about",
		   "services",
		   "contact");
$textArray = array("Home","About","Services","Contact");
$numLinks =4;
print "<div id ='headerOptions' class='row'>";
for($i = 0; $i <$numLinks;$i++)
{
	print "<a class='headerLinks'  href='index.php?page=$linkArray[$i]' >";
	print "<div class = 'link-boxes col-xs-12 col-md-2 col-sm-2'>";
	print "$textArray[$i]";
	print "</div>";
	print "</a>";
}
print "</div>";


?>
