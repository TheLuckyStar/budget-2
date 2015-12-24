# budget

![Budget account page](https://raw.githubusercontent.com/simondubois/budget/master/screenshot.png  "Budget account page")

Online envelope system money to keep your budget under control

## Status

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/simondubois/budget/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/simondubois/budget/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/924439e9-566b-4579-9941-947dd9e7ca23/mini.png)](https://insight.sensiolabs.com/projects/924439e9-566b-4579-9941-947dd9e7ca23)

This application is now considered as stable.
No more features are planned, but feel free to suggest some if you need.
UX, design, logo, translation... any help is welcome !

## Features...

### ....for end users

- user account with authentication and lost password.
- user profile with custom currency.
- multiple (bank) accounts per user (with summary page).
- (bank) account sharing (with email invitation for non existant users).
- multiple envelopes per (bank) account (with account and archiving).
- overview of current balances (for accounts and envelopes).
- recurring operations
- history records by account & envelope (with previous values).
- monthly and yearly reports (with donut and line charts).
- internationalization (fully supported : English, French).

### ...for administrator

- fully responsive & Ajax.
- simple database backup from command line.
- built on Laravel 5.1 LTS (bug fixes for two years and security for three years).
- commented and PSR2 code base.

### Requirements

- a web server (tested with Apache).
- PHP >= 5.5.9
- MySQL > 5.5
- [composer](https://getcomposer.org/)

### Delpoyment

- Get code base
```bash
	cd /var/www/
	git clone git@github.com:simondubois/unsplash-downloader.git
	cd budget/
	composer install
```
- Set up database
```bash
	cp .env.example .env
	php artisan key:generate
	# Then set values to the following keys in .env file :
	# DB_DATABASE (database name)
	# DB_USERNAME (mysql username)
	# DB_PASSWORD (mysql password)
	php artisan migrate
```
- [Set up email driver](https://laravel.com/docs/5.1/mail)
- Configure your web server to point to ``/var/www/budget/public``
