<?php
$title_text_Array = array("Our Company","Our company is Novay Technologies located in Valparaiso. We notice that
			 there’s a need for app developers, IT and talented web-designers in the  northwest
			 Indiana Region. This gives us a competitive edge that allows us to be self sufficient
			 as a business. The goal of our company is to help businesses in the region prosper
			 through utilizing our technology, website, and app development services, which will
			 help them become more efficient and to reach out to new clients.  
			 In the distant future, we’ll open up new locations to provide IT support to
			 businesses around the country.",
                          "Jesse Primiani","So, you want your business to have an online presence. In order to
                          do that  we can show you many options on how to make that possible: Custom designed
                          web applications/ sites, Wordpress, Squarespace, and many more options. ",
                          "Daniel Dunevant","Greetings!  I'm a programmer. I've designed  many sites for 
			school projects, my self, as well as for a business I worked for. I mostly use  html,
			 css, php, and  javascript to make my websites. Apart  from my website experience I've
			designed apps for android. Currently I'm going to school for a bachelors degree in 
			computer science through VU. In the  future I hope to become a computer scientist 
			 and through that solve interesting problems.");
$imageArray = array("NovayLogoVector.svg","JesseProfile.jpeg","DanielProfile.jpg");
$linkArray = array("http://novaytech-site.appspot.com/index.php?page=about",
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
