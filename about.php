<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->

<?php
$title_text_Array = array("Our Company","Our company is Novay Technologies and it is located in Valparaiso, IN. We notice that
			 there’s a need for app developers, IT consulting services, and talented web-designers in the Northwest
			 Indiana Region. Therefore, we are here to fulfill this need. Here The goal of our company is to help businesses 
			 in this region prosper through utilizing our technology, website, and app development services, which will
			 help these businesses become more efficient and have more opportunities reach out to new clients.
			 In the distant future, we’ll open up new locations to provide IT support to businesses around the country.",
                          "Jesse Primiani","I am the IT consultant and primary app developer here at Novay Technologies.  
						  Since I have worked as a tutor in the past, I have quite a bit of experience in understanding 
						  people and their needs.  I also have a lot of programming, web development, and IT 
						  experience.  A detailed summary of my expertise can be viewed at <a href='http://www.jesseprimiani.com'>JessePrimiani.com.</a>",
                          "Daniel Dunevant","Greetings! I'm a programmer. I've designed  many sites for 
			school projects, myself, as well as for a business I worked for. I mostly use html,
			 css, php, and  javascript to make my websites. Apart from my website experience I've
			designed apps for android. Currently I'm going to school for a bachelors degree in 
			computer science through VU. In the future I hope to become a computer scientist 
			 and through that solve interesting problems.");
$imageArray = array("NovayLogoVector.svg","JesseProfile.jpeg","DanielProfile.jpg");
$linkArray = array("http://www.novaytechnologies.com/index.php?page=about",
                   "http://www.jesseprimiani.com",
                   "http://www.danieljohndunevant.info/index.php?page=resume");

$numPanels = 3;
$j = 0;
$k = 1;
for($i = 0;$i<$numPanels;$i++ )
{
        print"<div class ='panel2'>\n";
        print"<div class ='panel'>\n";
        print" <div class ='row'>\n";
        print"<section id = 'rightBox'\n>";
       if(($i%2)==0)
       {
                 print"         <div class ='txtBox col-md-6 col-md-6 col-sm-12'>\n";
                 print"                 <h2>$title_text_Array[$j]</h2>\n";
                 print"                 <p>$title_text_Array[$k]</p>\n";
                 print"         </div>\n";
       }else
       {
                 print"         <div class ='imageBox col-md-3 col-md-3 col-sm-12'>\n";
                 print"                 <a href ='$linkArray[$i]'>\n";
                 print"                 <img class = 'panelImages img-responsive'  src ='images/$imageArray[$i]'>\n";
                 print"                 </a>\n";
                 print"         </div>\n";
       }
        print"</section>";
        print"<section id = 'leftBox'>\n";
       if(($i%2)==1)
       {
                 print"         <div class ='txtBox col-md-6 col-md-6 col-sm-12'>\n";
                 print"                 <h2>$title_text_Array[$j]</h2>\n";
                 print"                 <p>$title_text_Array[$k]</p>\n";
                 print"         </div>\n";
       }else
       {
                 print"         <div class ='imageBox col-md-3 col-md-3 col-sm-12'>\n";
                 print"                 <a href ='$linkArray[$i]'>\n";
                 print"                 <img class = 'panelImages img-responsive'  src ='images/$imageArray[$i]'>\n";
                 print"                 </a>\n";
                 print"         </div>\n";
       }
        print"</section>";
        print"</div>\n";
        print"</div>\n";
        print"</div>\n";
$j +=2;
$k = $j+1;
}
?>
