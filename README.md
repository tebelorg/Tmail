# TA.Mail
TA.Mail is a mailbot to act on incoming emails or perform mass emailing

# Why This
1. A mailbot can act on incoming emails, to reply or call other automation APIs accordingly
2. For whatever reasons (eg data security), you prefer not to use email marketing services

# Set Up
1. Update mailer.php with your email, name, signature etc
2. Set up mailbot.php to your server path and service logic
3. Modify service actions in run.php to act on email intents

# To Use
Pipe your email account to mailbot.php (chmod 700), for cPanel example using email filter
```
|/full_path_on_your_server/mailbot.php
```

# Pipeline
Feature|Details
:-----:|:------
Mass Emailing|engine for handling mailing lists
Enhancements|improve logic and data management
New Endpoints|beyond email, web automation, JSON

# License
TA.Mail is open-source software released under the MIT license
