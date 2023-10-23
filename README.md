#Getting Started with This Project

To quickly set up and run your project using Docker Compose, follow these steps:

##Start all containers and build (if necessary):
```console
docker-compose up --build -d
```

##Install PHP dependencies using Composer:
```console
docker-compose exec app composer install
```

##Generate a Laravel application key:
```console
docker-compose exec app php artisan key:generate
```

##Install Node.js dependencies using npm:
```console
docker-compose exec vite npm install
```

##Start the development process for Vite:
```code
docker-compose exec vite npm run dev
```

By following these steps, you'll be able to quickly set up and run your project in a Docker environment.
