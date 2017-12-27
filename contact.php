<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->

<?php

$thisScript= $_GET['page'];
$submit = $_POST['submit'];
// Makes a title on the page
if (!isset($submit))
{

echo <<<FORMDOC

<h2>Questions? Contact us below!</h2>

<fieldset>
        <div class = "form row">
                <div class = "col-xs-12 col-sm-10 col-md-8 col-lg-8 ">
                <form   action="index.php?page=$thisScript" method="post">

						<label class = "labels" >or email us at: support@novaytechnologies.com</label><br/>
						
                        <label class = "labels" >Your Name:</label>
                        <input name="name" class="input" type="text" id="name"  required><br/><br/><br/>

                        <label class = "labels" >Email Address:</label>
                        <input name="email" class="input" type="text" id="email"  required><br/><br/><br/>

                        <label class = "labels">Subject:</label>
                        <input name="subject" class="input" type="text"  id="subject" required/><br /><br/><br/>

                        <label class = "labels" >Message:</label>
                        <textarea  name="message" class="input" id="message" cols="30" rows="10" required></textarea><br/>

                        <input  class = "input" type="submit" name="submit" value="Submit">

                </form>
                </div>
        </div>
</fieldset>
FORMDOC;
}
else
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

echo <<<HEREDOC

<div class="body">
        <div class="contact">
                <div>
					<div>
                                <div class = "content">
                                        <p>Thank you for contacting us. We will get back to you shortly.</p>
                                </div>
                    </div>
                </div>
        </div>

</div>

HEREDOC;

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "To: Daniel Dunevant <ddunevant@ivytech.edu>\r\n";
  $headers .= "From: $subject <ddunevant@ivytech.edu>\r\n";
  $headers .= "X-Priority: 1\r\n";
  $headers .= "X-MSMail-Priority: High\r\n";
  $headers .= "X-Mailer: PHP / ".phpversion(). "\r\n";
  $subject = "Novay Technologies: Message";

  $body  = "Greetings ,";
  $body .= "You have just recieved a message via Novay Technologies messaging from $Name.<br/>";
  $body .="Here is the message that individual wanted to send you:<br/><br/>";
  $body .="$message <br/>";
  $body .="You can  contact $Name back via one of the following contact methods:<br/>";
  $body .= "Email; $email<br/>";
  $body .= "Phone; $phone<br/>";
  //$body =stripSlashes($body);

 mail ("",$subject,$body,$headers);
}

//loads to footer doc
?>


