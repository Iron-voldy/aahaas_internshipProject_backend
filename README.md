# Aahaas Ecommerce - Laravel API Backend

This is the backend API for the Aahaas Ecommerce application, built with Laravel 11.

## Features

- RESTful API endpoint for products
- Product management with database seeding
- CORS support for frontend integration
- MySQL database integration

## Prerequisites

Before you begin, ensure you have the following installed:
- PHP 8.2 or higher
- Composer
- MySQL 5.7 or higher
- XAMPP (or similar local server environment)

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Iron-voldy/aahaas_internship_task.git
cd aahaas_internship_task/product-api-laravel
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the database configuration in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aahaas_ecommerce
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Create Database

**Option 1 - Using HeidiSQL:**
1. Open HeidiSQL
2. Connect to MySQL (username: root, password: 20020224Ha)
3. Right-click → Create New → Database
4. Name: `aahaas_ecommerce`
5. Click OK

**Option 2 - Using MySQL Workbench:**
1. Open MySQL Workbench
2. Connect to local MySQL server
3. Run this query:
```sql
CREATE DATABASE aahaas_ecommerce;
```

**Option 3 - Using phpMyAdmin:**
Go to `http://localhost/phpmyadmin` and create database `aahaas_ecommerce`

### 6. Run Migrations

```bash
php artisan migrate:fresh
```

This will create all necessary tables in the database.

### 7. Seed the Database

```bash
php artisan db:seed
```

This will create 5 sample products in the database.

## Running the Backend Server

Start the Laravel development server:

```bash
php artisan serve
```

The API will be available at `http://localhost:8000`

**Keep this terminal open** - the server needs to stay running!

## Quick Start Commands (Summary)

After setting up, use these commands to run the backend:

```bash
# Navigate to backend folder
cd product-api-laravel

# Run migrations and seed (first time only)
php artisan migrate:fresh
php artisan db:seed

# Start the server
php artisan serve
```

Access the API at: `http://localhost:8000/api/products`

## API Endpoints

### Get All Products

- **URL**: `/api/products`
- **Method**: `GET`
- **Response**: JSON array of products

Example:
```bash
curl http://localhost:8000/api/products
```

Response:
```json
[
  {
    "id": 1,
    "name": "Wireless Bluetooth Headphones",
    "description": "High-quality wireless headphones with noise cancellation and 30-hour battery life.",
    "price": "149.99",
    "image_url": "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500",
    "created_at": "2025-11-24T15:45:00.000000Z",
    "updated_at": "2025-11-24T15:45:00.000000Z"
  }
]
```

## Project Structure

```
product-api-laravel/
├── app/
│   ├── Http/Controllers/Api/
│   │   └── ProductController.php
│   └── Models/
│       └── Product.php
├── database/
│   ├── migrations/
│   │   └── 2025_11_24_create_products_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ProductSeeder.php
├── routes/
│   └── api.php
└── .env
```

## Database Schema

### Products Table

| Column | Type | Description |
|--------|------|-------------|
| id | integer | Primary key |
| name | string | Product name |
| description | text | Product description |
| price | decimal(10,2) | Product price |
| image_url | string | Product image URL |
| created_at | timestamp | Created timestamp |
| updated_at | timestamp | Updated timestamp |

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, you can specify a different port:

```bash
php artisan serve --port=8001
```

### Database Connection Error

Make sure:
1. MySQL service is running in XAMPP
2. Database credentials in `.env` are correct
3. Database `aahaas_ecommerce` exists

### CORS Issues

CORS is enabled by default in Laravel 11. If you still face issues, check the `bootstrap/app.php` file.

## License

This project is open-source and available for educational purposes.
