<!-E PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
echo<<<HEREDOC
<div class ="row">
	<a class="col-xs-10 col-md-10 col-sm-10"  href="index.php?page=start" >
		<img class = "img-responsive" id ='logoLarge' src ='images/NovayLogoVector.svg'>
	</a>
HEREDOC;
$socialLinkArray = array ("https://www.linkedin.com/company/novay-technologies/"
			  ,"https://www.facebook.com/Novay-Technologies-390582464615610/");
$socialImageArray = array ("linkedin_Icon.png","Facebook-Logo.png");
$numSocial = 2;
for ($i = 0 ;$i <$numSocial ;$i++)
{
	print "<div class = 'social-boxes col-xs-1 col-md-1 col-sm-1'>";
	print "<a class = 'socialLinks' href ='$socialLinkArray[$i]' target = '_blank'>";	
	print "<img class = 'socialImages' src = 'images/$socialImageArray[$i]'>";	
	print "</a>";	
	print "</div>";
}
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
