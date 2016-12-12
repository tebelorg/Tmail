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
Pipe your email account to mailbot.php (chmod 700), for eg through cPanel email filter
```
|/fullpath_on_your_server/mailbot.php
```

# Pipeline
Feature|Details
:-----:|:------
Mass Emailing|engine for handling mailing list
Enhancements|improve logic and data handling
New Endpoints|beyond email, web automation, JSON

# License
TA.Mail is open-source software released under the MIT license
