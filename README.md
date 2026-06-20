# New Orbit Media

New Orbit Media is a newer Laravel-based implementation of the Orbit Media workflow.

## Features

- Updated media/content management workflow
- Laravel backend and database-backed structure
- Admin-ready extension path
- Storage-ready media handling

## Modules

- Content module: media/content records and pages
- Admin module: protected management screens
- Media module: uploads, files, and display assets
- Data module: migrations, models, and seeders
- Presentation module: views, scripts, and styles

## System Architecture

The project follows Laravel MVC architecture. Controllers manage media/content actions, models persist records, views render screens, and storage services handle files. The newer implementation should document differences from the older `orbit-media` repository as modules evolve.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/new-orbit-media.git
cd new-orbit-media
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
