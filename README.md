# TA.Mail
TA.Mail is a mailbot to act on incoming emails or perform mass emailing

# Why This
1. A mailbot can act on incoming emails, to reply or call other automation APIs accordingly
2. For whatever reasons (eg data security), you prefer not to use email marketing services

# Set Up
1. Update mailer.php & massmail.php with your email, name, etc
2. Set up mailbot.php to your server path and service logic
3. Modify service actions in run.php to act on email intents

# To Use
Mailbot example - pipe your email account to mailbot.php (chmod 700), eg using cPanel email filter
```
|/full_path_on_your_server/mailbot.php
```
Mass email example - 1st parameter is recipient list, 2nd parameter is message in text or html
```
php massmail.php list.csv mail.html
```
# Pipeline
Feature|Details
:-----:|:------
Add PHPMailer|allow attachments, and mailing on Windows
New Endpoints|for REST API service calls to webservices
Enhancements|improve decision-making and data management

# License
TA.Mail is open-source software released under the MIT license
