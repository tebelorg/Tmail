# TA.Mail
TA.Mail is a mailbot to act on incoming emails or perform mass emailing

# Why This
1. A mailbot can act on incoming emails, to reply or call other automation APIs accordingly
2. For whatever reasons (eg data security), you prefer not to use email marketing services

# Set Up
1. Update mailer.php with your email, name, signature etc
2. Modify mailbot.php to your server path and service logic
3. Modify service actions in run.php to act on email intent

# To Use
Pipe your mailbot email account to mailbot.php, for eg through cPanel email filters
```
|/fullpath_on_your_server/mailbot.php
```

# Pipeline
Feature|Details
:-----:|:------
Mass Emailing|engine for handling mailing list
Enhancements|improve logic and data handling

# License
TA.Mail is open-source software released under the MIT license
