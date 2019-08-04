# Shadowlack Flarum

Working repository for Shadowlack's Flarum installation. Guaranteed to be unstable.

## Server Requirements

* Apache (with mod_rewrite enabled) or Nginx
* PHP 7.1+ with the following extensions: curl, dom, gd, json, mbstring, openssl, pdo_mysql, tokenizer, zip
* MySQL 5.6+ or MariaDB 10.0.5+
* SSH (command-line) access to run Composer

### Local PHP Server

```bash
cd shadowlack-flarum/public
php -S 127.0.0.1:8000
```

## Installation

```bash
composer install
```
