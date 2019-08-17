# Shadowlack Flarum 🔥

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/shriker/shadowlack-flarum/blob/master/LICENSE.md) [![Flarum](https://img.shields.io/badge/flarum-0.1.0--beta.8-%23E7672E)](https://flarum.org/) [![Join us on Discord](https://img.shields.io/discord/140589809231069184?logo=discord)](https://discord.gg/BNhwAm9)

Working repository for Shadowlack's Flarum installation. Guaranteed to be unstable.

### Shadowlack

Shadowlack is a free dice-less Play-by-Post game and imaginary fictional world setting (geofiction) that revolves around the planet Ramath-lehi.

* [shadowlack-guts](https://github.com/shriker/shadowlack-guts)
* [shadowlack-wiki](https://github.com/shriker/shadowlack-wiki)

## Server Requirements

* Apache (with mod_rewrite enabled) or Nginx
* PHP 7.1+ with the following extensions: curl, dom, gd, json, mbstring, openssl, pdo_mysql, tokenizer, zip
* MySQL 5.6+ or MariaDB 10.0.5+
* SSH (command-line) access to run [Composer](https://getcomposer.org/)

### Local PHP Server

```bash
cd shadowlack-flarum/public
php -S 127.0.0.1:8000
```

## Installing

```bash
composer install
php flarum migrate
```

## Updating

```bash
composer update
php flarum migrate
php flarum cache:clear
```

### Links 🔗

* [GitHub](https://github.com/shriker/shadowlack-flarum)
* [Shadowlack](https://shadowlack.com/)
* [Flarum](https://flarum.org/)
