# Blog System Documentation

## 1. Introduction

This project is a simple blog system built with Laravel and MySQL, allowing users to create, edit, delete, and view blog posts. It includes authentication using Laravel UI, Bootstrap for UI styling, and role-based access control for managing posts.

## 2. Requirements

- Laravel 10
- PHP 8.1+
- MySQL
- Composer
- Node.js & NPM (for frontend assets)

## 3. Database Setup

### Create Database
Run the following SQL command:

```sql
CREATE DATABASE BlogDB;
```

## 4. Installation & Setup

1. **Clone the repository**
   ```sh
   git clone <repository_link>
   cd blog-system
   ```

2. **Install dependencies**
   ```sh
   composer install
   npm install && npm run dev
   ```

3. **Configure the environment**
   1. Copy `.env.example` to `.env`:
      ```sh
      cp .env.example .env
      ```
   2. Open the `.env` file and update the database credentials to match your MySQL setup:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=BlogDB
      DB_USERNAME=root  # Change this if necessary
      DB_PASSWORD=       # Set your database password
      ```
   3. Generate the application key:
      ```sh
      php artisan key:generate
      ```

4. **Install Laravel UI & Authentication**
   ```sh
   composer require laravel/ui
   php artisan ui bootstrap --auth
   npm install && npm run dev
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **Start the server**
   ```sh
   php artisan serve
   ```

If you prefer using MySQL scripts instead of migrations, use the following script for the `posts` table:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

## 5. Features

### Authentication
- Uses Laravel UI for login and registration
- Role-based access (Admins can manage all posts, users can only manage their own)

### Post Management
- **View All Posts:** Homepage displays all posts
- **View Single Post:** Clicking a post shows full content
- **Create Post:** Logged-in users can create posts
- **Edit Post:** Admins can edit posts
- **Delete Post:** Admins can delete posts

## 6. Security
- CSRF Protection for forms
- Laravel UI Auth for authentication

## 7. GitHub Repository
[Project Repository](https://github.com/abdelsalamMahmoud/blog.git)

## 8. Video Presentation
[Watch the Project Presentation](https://youtu.be/6QPey813mh8)
