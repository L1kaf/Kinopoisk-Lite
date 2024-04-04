install:
	composer install

validate:
	composer validate

start:
	lando start	

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src config kernel

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src config kernel

test:
	composer exec --verbose phpunit tests