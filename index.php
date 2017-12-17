<?php
	session_start();
echo <<<HEREDOC
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<meta charset="UTF-8" />
		<meta name = "viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Novay Technologies" />
		<title>Novay Technologies</title>
HEREDOC;


require'headerBackend.php';

echo <<<HEREDOC
	</head>
		<section class='Header'>
HEREDOC;
				require 'headerFrontend.php';
echo <<<HEREDOC
		</section>
<body>
		<div id = "wrapper">
			 <div class="container-fluid">
 <div class="container-fluid">
                      <div class="row">
                          <div class=" col-xs-12 col-sm-12  col-md-8 " >
HEREDOC;
                                  require 'main.php';
 
  echo <<<HEREDOC
                          </div>
                      </div>
                  </div>
<!--<div class="pageContent">
			</div><div class="sidebarContent">
				<section class='sidebar'>-->
HEREDOC;
					//	require "sidebar.php";
echo <<<HEREDOC
			<!--</section>
			</div>
			
		</div>	-->
	</body>
<footer>
<div class ="row">
		<section class='footerUpper col-xs-12 col-sm-12  col-md-8'>
HEREDOC;

				require "footer.php";
echo <<<HEREDOC
		</section>
</div>
</footer>
</html>
HEREDOC;

?>
