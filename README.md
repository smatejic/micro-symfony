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

After this you can run Micro-Syfmony as usual with app/console server:run
```bash
php app/console server:run
```
To change from dev to prod just edit .env file 

