<?php

/* MAILER REST API FOR TA.MAIL TO AUTO-SEND EMAILS ~ TEBEL.SG */

// address email recipient by name if recipient name provided
if ($_GET['SENDNAME']=="")
	$name = "";
else
	$name = "<p>Hi " . $_GET['SENDNAME'] . "," . "</p><p></p>";

// your catch-all email in case recipient email not provided
if ($_GET['SENDTO']=="")
	$to = "your_email@gmail.com";
else
	$to = $_GET['SENDTO'];

// your default send from email if send from email not provided
if ($_GET['SENDFROM']=="")
        $from = "Your Name <your_email@gmail.com>";
else
        $from = $_GET['SENDFROM'];

// set default email subject if email subject not provided
if ($_GET['SUBJECT']=="")
	$subject = "Email Service";
else
	$subject = $_GET['SUBJECT'];

// set message body to blank if email message not provided
if ($_GET['MESSAGE']=="")
	{$custom_message = "Message body is empty."; $message = "";}
else
	{
// set your email footer below to be used when there is message body
$custom_message = $_GET['MESSAGE'];
$message = "
<html>
<head>
<title>" . $subject . "</title>
</head>
<body>
" . $name . "
<p>" . $custom_message . "<br>" .
"<p></p>
<pre><span style=\"font-family: arial, helvetica, sans-serif; font-size: small;\">Kind Regards,<br><span style=\"color: #000000;\"><strong><em>Your Name</em></strong></span></span></pre></p>
</body>
</html>";}

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $from . "\r\n";

// customise result output below to show email success or failure
// first block is to show output as raw text, second block as html
if ($_GET['OUTPUT']=="TEXT")
        {
        if (mail($to,$subject,$message,$headers))
                echo $subject . " mail sent successfully.\n";
        else
                echo $subject . " mail not sent through.\n";
        }
else
	{
        if (mail($to,$subject,$message,$headers))
        	echo "<h1><center><br><br><br><br><br><br><br><br>".$subject." mail sent successfully.</center></h1>";
        else
        	echo "<h1><center><br><br><br><br><br><br><br><br>".$subject." mail not sent through.</center></h1>";    	  }

?>
