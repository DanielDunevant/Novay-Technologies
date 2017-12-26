<?php

$title_text_Array = array("IT Consulting","Blah Blah Blah",
			  "Websites","Blah Blah Blah",
			  "Apps","Blah Blah Blah");
$imageArray = array("novayLogoVector.svg","novayLogoVector.svg","novayLogoVector.svg");
$linkArray = array("http://www.danieljohndunevant.info/index.php?page=resume",
		   "http://www.danieljohndunevant.info/index.php?page=resume",
		   "http://www.danieljohndunevant.info/index.php?page=resume");
$numPanels = 3;
$j = 0;
for($i = 0;$i<$numPanels;$i++ )
{
echo<<<HEREDOC
	<div class ="row">
		<div class ="col-md-5 col-md-5 col-sm-12">
			<h2>$title_text_Array[$j]</h2>
			<p>$title_text_Array[$j+1]</p>
		</div>	
		<div class ="col-md-5 col-md-5 col-sm-12">
			<a href ="$linkArray[$i]">
			<img src = "$imageArray[$i]">
			</a>
		</div>	
	</div>
HEREDOC;
$j +=2;
}
?>
