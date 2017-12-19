<?php
/*      $curentPage = $_GET['page'];
      $serverInfo_1 = $_SERVER['REQUEST_URI'];
      $serverInfo_2 = $_SERVER['QUERY_STRING'];
echo "Current Page: $currentPage";
echo "Request URI: $currentPage";
echo "QUERY STRING: $currentPage";
if($currentPage =="")
{
    echo "Output";
    require "faq.php";
}*/



if ($_REQUEST['page'] == "about") require "about.php";
	elseif ($_REQUEST['page'] == "help") require "help.php";
	elseif ($_REQUEST['page'] == "faq") require "faq.php";
	elseif ($_REQUEST['page'] == "contact") require "contact.php";
	elseif ($_REQUEST['page'] == "home") require "start.php";
	else require "start.php";

?>
