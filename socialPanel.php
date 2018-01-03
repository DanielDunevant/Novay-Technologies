<?php

$socialLinkArray = array ("https://www.linkedin.com/company/novay-technologies/"
                          ,"https://www.facebook.com/Novay-Technologies-390582464615610/");
$socialImageArray = array ("linkedin_Icon.png","Facebook-Logo.png");
$numSocial = 2;
print "<section id='socialBar'>";
for ($i = 0 ;$i <$numSocial ;$i++)
{
	print"<div class = 'row'>";
        print "<div class = 'social-boxes col-xs-1 col-md-1 col-sm-1'>";
        print "<a class = 'socialLinks' href ='$socialLinkArray[$i]' target = '_blank'>";
        print "<img class = 'socialImages' src = 'images/$socialImageArray[$i]'>";
        print "</a>";
        print "</div>";
        print "</div>";
}
print "</section>";
?>
