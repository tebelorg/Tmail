<?php

/* MAILER SCRIPT FOR AUTO-SENDING EMAILS ~ TEBEL.SG */

if ($_GET['SENDNAME']=="")
	$name = "";
else
	$name = "<p>Hi " . $_GET['SENDNAME'] . "," . "</p><p></p>";

if ($_GET['SENDTO']=="")
	$to = "user@gmail.com";
else
	$to = $_GET['SENDTO'];

if ($_GET['SENDFROM']=="")
        $from = "Your Name <you@gmail.com>";
else
        $from = $_GET['SENDFROM'];

if ($_GET['SUBJECT']=="")
	$subject = "Email Service";
else
	$subject = $_GET['SUBJECT'];

if ($_GET['MESSAGE']=="")
	{$custom_message = "Message body is intentionally empty."; $message = "";}
else
	{$custom_message = $_GET['MESSAGE'];
$message = "
<html>
<head>
<title>" . $subject . "</title>
</head>
<body>
" . $name . "
<p>" . $custom_message . "<br>" .
"<p></p>
<pre><span style=\"font-family: arial, helvetica, sans-serif; font-size: small;\">Regards,<br><span style=\"color: #000;\"><strong><em>Your Name</em></strong></span></span></pre></p>
</body>
</html>";}

// DEFINE HEADERS ~ ALWAYS SET CONTENT-TYPE FOR HTML EMAIL
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $from . "\r\n";

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
