<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
$linkArray = array("start",
                   "about",
                   "services",
                   "contact");
$textArray = array("Home","About","Services","Contact");
$numLinks =4;
print "<div id ='headerOptions' class='row'>\n";
print "<img src ='images/NovayHeader_Dark.svg'   class = 'col-xs-2 col-md-2 col-sm-2'  >\n";
for($i = 0; $i <$numLinks;$i++){
        print "<a class='headerLinks col-xs-2 col-md-2 col-sm-2'  href='index.php?page=$linkArray[$i]'\n >";
        print "$textArray[$i]";
        print "</a>\n";
}
print "</div>\n";
echo<<<HEREDOC
<div class ="row">
        <a class="col-xs-12 col-md-12 col-sm-12"  href="index.php?page=start" >
                <img class = "img-responsive" id ='logoLarge' src ='images/NovayLogoVector.svg'>
        </a>
HEREDOC;
print "</div>";

//Alternate Header Style
/*
print "<div id ='headerOptions2' class='row'>\n";
print "<img src ='images/NovayHeader_Light.svg'   class = ' col-xs-2 col-md-2 col-sm-2' >\n";
for($i = 0; $i <$numLinks;$i++)
{
        print "<a class='headerLinks2 col-xs-2 col-md-2 col-sm-2'  href='index.php?page=$linkArray[$i]' >\n";
        print "$textArray[$i]";
        print "</a>\n";
}
print "</div>\n";
*/

?>

