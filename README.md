# MyMountainns

MyMountainns is a web application built with Laravel and Vite, designed to manage mountain-related data and user interactions. The project follows a modular structure for scalability and maintainability.

## Features

- User authentication and authorization
- Mountain data management (CRUD operations)
- Email notifications
- RESTful API endpoints
- File uploads and storage
- Role-based access control
- Responsive frontend powered by Vite

## Project Structure

- **app/**: Contains core application logic, including controllers, models, mail, and providers.
- **bootstrap/**: Application bootstrapping and cache files.
- **config/**: Configuration files for authentication, database, mail, etc.
- **database/**: Database migrations, seeders, and factories.
- **public/**: Publicly accessible files and entry point (`index.php`).
- **resources/**: Views, frontend assets, and language files.
- **routes/**: Route definitions for web and API.
- **storage/**: Logs, cache, and file uploads.
- **tests/**: Unit and feature tests.
- **vendor/**: Composer dependencies.

## Getting Started

1. **Clone the repository**
   ```sh
   git clone https://github.com/yourusername/mymountainns.git
   cd mymountainns
   ```

2. **Install dependencies**
   ```sh
   composer install
   npm install
   ```

3. **Configure environment**
   - Copy `.env.example` to `.env` and update database and mail settings.

4. **Generate application key**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **Start development server**
   ```sh
   php artisan serve
   npm run dev
   ```

## Testing

Run tests using PHPUnit:
```sh
php artisan test
```

## License

This project is open-source and available under the [MIT license](LICENSE)