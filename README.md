# Tasks for Today Management System

Laravel implementation for IT0049 Web System Technologies Technical Summative Assessment 3.

## Requirements

- PHP 8.3 or newer
- Composer
- Laravel 13

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser.

The seeder creates exactly one user and eight tasks across four dates, including the current date. The application uses SQLite by default, so no separate database server is required.

## Routes

| Route | Purpose |
| --- | --- |
| `/` | Welcome page showing only tasks scheduled for today |
| `/tasks` | Full task list ordered by date |
| `/profile` | Single seeded user profile |
| `/about` | Static developer and project information |

## Project structure

- `database/migrations` contains the `tasks` and `users` schemas.
- `database/seeders/DatabaseSeeder.php` creates the required records.
- `app/Models` contains the `Task` and `User` Eloquent models.
- `app/Http/Controllers` contains page-specific controller actions.
- `resources/views` contains the shared layout and four Blade views.
