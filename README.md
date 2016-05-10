# Micro-Symfony

Silex is a micro but it is not Symfony.

Running Symfony as micro-service is exactly what i wanted.

##Symfony implementation
Micro-Symfony distribution inspired by:
- http://www.whitewashing.de/2014/10/26/symfony_all_the_things_web.html
- https://github.com/beberlei/symfony-minimal-distribution

##Installation

- Cloning the project:
```bash
git clone https://github.com/smatejic/micro-symfony.git
```
- Install dependencies
```bash
composer install
```

rename .env.example to .env
```bash
mv .env.example .env
```
At this point there are 2 ways to run the server.

if you decide to use default php built in server and not use Symfony console to start it you can go to web folder
```bash
cd web
php -S localhost:8000
```

Or you can use Symfony console to start but in that case please make a copy of app.php and rename to app_dev.php
that is located in web folder

```bash
cp app.php app_dev.php
```
After this you can run Micro-Syfmony as usual with app/console server:run
```bash
php bin/console server:run
```
To change from dev to prod just edit .env file 

