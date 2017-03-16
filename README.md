# TA.Mail
TA.Mail is a mailbot to act on incoming emails or perform mass emailing ~ http://tebel.org

![Sample Mail](https://github.com/tebelorg/TA.Mail/raw/master/sample.jpg)

# Why This
- A mailbot can act on incoming emails, to reply or call other automation APIs accordingly
- For whatever reasons (eg data security), you prefer not to use email marketing services

Mass emailing originally developed pro bono for a Singapore non-profit as part of its CRM strategy

# Set Up
1. Update mailer.php & massmail.php with your email, name, etc
2. Set up mailbot.php to your server path and service logic
3. Modify actions in service.php to act on email intents

# To Use
Mailbot example - pipe your email account to mailbot.php (chmod 700), eg using cPanel email filter
```
|/full_path_on_your_server/mailbot.php
```

Mass email example - first parameter is recipient list with email addresses on separate lines, second parameter is message in html or text format, third parameter is optional for specifying file to be attached with the email
```
php massmail.php list.csv mail.html attachment.pdf
```

Mass email example (within a PHP script) - assign the variables accordingly and include massmail.php
```php
$argv[1] = "list.csv"; $argv[2] = "mail.html"; $argv[3] = "attachment.pdf"; ob_start();
include('massmail.php'); $mail_result = ob_get_contents(); ob_end_clean(); echo $mail_result;
```

Mail API example - parameters to send email by triggering from webservice or web browser. Important to set your secret APIKEY parameter, to prevent your mailer instance from being abused through API.
```
your_website_url/mailer.php?APIKEY=&SENDNAME=&SENDTO=&SENDFROM=&SUBJECT=&MESSAGE=
```

# Pipeline
Feature|Details
:-----:|:------
Enhancements|feel free to review and suggest new features

# License
TA.Mail is open-source software released under the MIT license
