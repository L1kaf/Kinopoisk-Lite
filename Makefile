install:
	composer install

validate:
	composer validate

start:
	lando start	

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src config

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src config

test:
	composer exec --verbose phpunit tests