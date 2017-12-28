<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->

<?php
$title_text_Array = array("IT Consulting","Often times in a business there comes a time when you need 
			  some advice. Here one of our services is to provide that advice so that you 
			  can make the best decisions for your business. Whether that be network design
			  and server setup, help setting up a website, or any other Computer or Technology related questions; 
			  We can help with that.",
                          "Websites","So, you want your business to have an online presence. In order to
			  do that, we can show you many options on how to make that possible: Custom designed
   			  web applications/ sites, Wordpress, Squarespace, and many more possibilities are available to you.
			  For an agreed-upon price, we will design and build a website for you, and we will also 
			  teach you the basics of working with it.",
                          "Apps","You've got all the good advice you can get and you have a great website. 
			  What's next? Well we have a theory about business. That is that the more ways that 
			  one can interact with your business the more profitable your business can be. Through this, 
			  it is not a stretch to say that having an app to help promote your business will help your 
			  business grow. We can provide such an app for your business through our application development 
			  and maintenance services." );
$imageArray = array("ITConsulting.jpeg","WebsiteDesign.jpg","AppDesign.jpeg");
//In the future these links will go to respective pages with  more  detail about each service
$linkArray = array("http://www.novaytechnologies.com/index.php?page=start",
		   "http://www.novaytechnologies.com/index.php?page=start",
		   "http://www.novaytechnologies.com/index.php?page=start");

$numPanels = 3;
$j = 0;
$k = 1;
for($i = 0;$i<$numPanels;$i++ )
{
        print"<div class ='panel2'>\n";		
        print"<div class ='panel'>\n";		
        print" <div class ='row'>\n";
	print"<section id = 'rightBox'\n>";
       if(($i%2)==1)
       {
       		 print"         <div class ='txtBox col-md-5 col-md-5 col-sm-12'>\n";
      		 print"                 <h2>$title_text_Array[$j]</h2>\n";
       		 print"                 <p>$title_text_Array[$k]</p>\n";
        	 print"         </div>\n";
       }else
       {
        	 print"         <div class ='imageBox col-md-5 col-md-5 col-sm-12'>\n";
         	 print"                 <a href ='$linkArray[$i]'>\n";
         	 print"                 <img class = 'panelImages img-responsive'  src ='images/$imageArray[$i]'>\n";
         	 print"                 </a>\n";
         	 print"         </div>\n";
       }
	print"</section>";
	print"<section id = 'leftBox'>\n";
       if(($i%2)==0)
       {
       		 print"         <div class ='txtBox col-md-5 col-md-5 col-sm-12'>\n";
      		 print"                 <h2>$title_text_Array[$j]</h2>\n";
       		 print"                 <p>$title_text_Array[$k]</p>\n";
        	 print"         </div>\n";
       }else
       {
        	 print"         <div class ='imageBox col-md-5 col-md-5 col-sm-12'>\n";
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
