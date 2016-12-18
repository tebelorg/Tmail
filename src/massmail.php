<?php

/* MASSMAIL SCRIPT FOR TA.MAIL TO MASS-SEND EMAILS ~ TEBEL.SG */

// check for first parameter - file containing email recipients, one recipient per line
if ($argv[1]=="") die("ERROR - Recipient list file missing for first parameter\n"); $recipient_list = $argv[1];
if (!file_exists($recipient_list)) die("ERROR - cannot find " . $recipient_list . "\n");
$recipient_list_file = fopen($recipient_list,'r') or die("ERROR - cannot open " . $recipient_list . "\n");

// check for second parameter - file containing email message body, can be in text or html 
// for html email template check https://github.com/leemunroe/responsive-html-email-template
if ($argv[2]=="") die("ERROR - Email message file missing for second parameter\n"); $email_message = $argv[2];
if (!file_exists($email_message)) die("ERROR - cannot find " . $email_message . "\n");
$email_message_file = fopen($email_message,'r') or die("ERROR - cannot open " . $email_message . "\n");
fclose($email_message_file);

// loop to send email message to each recipient in the recipient list, one by one
while (!feof($recipient_list_file)) send(trim(fgets($recipient_list_file)),$email_message); fclose($recipient_list_file);

// function to assign email parameters and call sendmail_service to send email
function send($recipient, $message_file) {
	// static assignments kept within recursion for possible dynamic use
	$_GET['SENDFROM'] = "Your Name <your_email@gmail.com>"; // set from
	$_GET['SUBJECT'] = "Email Service"; // set email subject to be used 
	$_GET['SENDNAME'] = ""; // set addressee name or leave as blank

	// non-static assignments have to be kept within this recursive function
	$_GET['SENDTO'] = $recipient; // do not change, grab from recipient list
	$_GET['MESSAGE'] = file_get_contents($message_file); // do not change, body
	$_GET['OUTPUT'] = "TEXT"; sendmail_service(); // set result output as text
}

/* SENDMAIL SERVICE */
function sendmail_service() { // call mailer REST API to send email
        ob_start(); include('/full_path_on_your_server/mailer.php');
        $php_result = ob_get_contents(); ob_end_clean(); echo $php_result;
}

?>
