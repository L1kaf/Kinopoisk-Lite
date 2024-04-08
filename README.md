[![PHP linter](https://github.com/L1kaf/Kinopoisk-Lite/actions/workflows/main.yml/badge.svg)](https://github.com/L1kaf/Kinopoisk-Lite/actions/workflows/main.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/ba1854be3f8b2a5282da/maintainability)](https://codeclimate.com/github/L1kaf/Kinopoisk-Lite/maintainability)

### Description:
---
This repository is analogous to the kinopoisk website. It is used to work out modern architecture of PHP applications. Developed with OOP, using MVC, kernel, MySQL. 

The files in the config folder are responsible for the application configuration.

app.php - application configuration, including host

database.php - database configuration

auth.php - user authentication configuration


### System Requirements:
---
* PHP version 8+
* Composer
* Lando

### Usage:
---
```bash
make install
make start
```
Open in browser: http://localhost:port
