# Getting Started with Scandinawian World Test Assigment

To quickly set up and run this project using Docker Compose, follow these steps:

1. Start all containers and build (if necessary):
```console
docker-compose up --build -d
```

2. Install PHP dependencies using Composer:
```console
docker-compose exec app composer install
```

3. Generate a Laravel application key:
```console
docker-compose exec app php artisan key:generate
```

4. Install Node.js dependencies using npm:
```console
docker-compose exec vite npm install
```

5. Start the development process for Vite:
```code
docker-compose exec vite npm run dev
```

By following these steps, you'll be able to quickly set up and run your project in a Docker environment.
