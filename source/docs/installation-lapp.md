---
title: Customizing Your Site
description: Customizing your Jigsaw docs site
extends: _layouts.documentation
section: content
---

## Content
testWare enables you manage the testing and maintanace of your location and equipment.

- [Install testWare instance](#install-testware-instance)
- [testWare commands](#testware-commands)


1. [Install testWare instance](#install-testware-instance)
2. [Run the web-installer](#run-the-web-installer)


## Install testWare instance

There are mainly two ways to install your instance of testWare:
- [LAPP / LAMP stack](#lapplamp-stack)
- [Docker](#docker)

### LAPP/LAMP stack
Make sure your server meets following requirements:
- Linux based system (Ubuntu or Debian)
- Apache server (or nginx reverse proxy)
- php min. version 7.4
- SQL database system such as PostgreSQL or MariaDB / mySQL
- Composer installed
- npm installed

#### Step 1: Clone repository

```bash
git clone https://github.com/daniel-koertvelyessy/testware.git
```

#### Step 2: setup database

After installing your desired system, you should create a database and super-user and add the data into the .env file

```
DB_CONNECTION=pgsql
DB_HOST= [IP-adress-of-your-databse-server]
DB_PORT=5432
DB_DATABASE=[laravel]
DB_USERNAME=[root]
DB_PASSWORD=[passworrd]
```

#### Optional step 3: setup e-mail connection (optional)

```
MAIL_MAILER=smtp
MAIL_HOST=[smpt.provider-address.com]
MAIL_PORT=[587]
MAIL_USERNAME=[username]
MAIL_PASSWORD=[password]
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=[yourmail@address.com]
MAIL_FROM_NAME="${APP_NAME}"
```

**Note:** If you do not want to use the e-mail features change the key `MAIL_MAILER=smtp` to `MAIL_MAILER=log` and leave the other keys blank.


## Run testware artisan installer
Within your project folder run the testWare installer [command](#testware-commands).

```php
php artisan testware:install
```