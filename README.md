# Basic Laravel CRUD Application

## Introduction

This project was created as a learning exercise to understand the fundamentals of PHP and the Laravel framework. It serves as a practical, hands-on example of building a simple web application from scratch, covering core concepts like MVC architecture, routing, database migrations, Eloquent ORM, and Blade templating.

## Project Overview

The application is a minimalist blog post management system. It provides basic CRUD (Create, Read, Update, Delete) functionality for blog posts. Users can view a list of all posts, create new posts, and delete existing ones. The backend is fully set up to support viewing and editing individual posts as well.

## Key Features

-   **Post Listing:** A main page that displays all blog posts in reverse chronological order.
-   **Post Creation:** A form to create and save a new blog post.
-   **Post Deletion:** The ability to delete a post from the list.
-   **Full CRUD Support:** The `PostController` and routes are configured to handle all seven resource-based actions (index, create, store, show, edit, update, destroy).
-   **Clean UI:** A simple and clean user interface built with Bootstrap 5.
-   **Success/Error Feedback:** Displays success messages upon creating/updating/deleting posts and shows validation errors on forms.

## Technology Stack

-   **Backend:** PHP 8.2, Laravel 12
-   **Database:** SQLite (Default), MySQL compatible
-   **Frontend:** HTML, Bootstrap 5 (via CDN)
-   **Templating:** Blade Engine
-   **ORM:** Eloquent
-   **Dev Tools:** Vite, Composer

## Project Structure Highlights

-   `app/Http/Controllers/PostController.php`: Contains the core logic for handling all CRUD operations for posts.
-   `app/Models/Post.php`: The Eloquent model that interacts with the `posts` database table.
-   `database/migrations/`: Includes the schema definition for the `users` and `posts` tables.
-   `routes/web.php`: Defines the application's routes. It uses `Route::resource('posts', PostController::class)` to efficiently map all CRUD endpoints.
-   `resources/views/`: Contains all the Blade templates.
    -   `layouts/app.blade.php`: The main application layout.
    -   `posts/index.blade.php`: The view to display all posts.
    -   `posts/create.blade.php`: The view for the new post form.

## Setup and Installation

Follow these steps to get the project up and running on your local machine.

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/your-username/interview-sample.git
    cd interview-sample
    ```

2.  **Install Dependencies**
    This project uses Composer to manage its PHP dependencies.
    ```bash
    composer install
    ```

3.  **Create Environment File**
    Copy the example environment file and generate an application key.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Set Up the Database**
    This project is configured to use SQLite by default, which requires no extra setup. Just create the database file:
    ```bash
    touch database/database.sqlite
    ```
    Then, run the migrations to create the necessary tables.
    ```bash
    php artisan migrate
    ```
    *(Optional: If you prefer to use MySQL, update the `DB_*` variables in your `.env` file with your MySQL credentials before running the migration.)*

5.  **Start the Development Server**
    You can now run the application.
    ```bash
    php artisan serve
    ```
    The application will be available at `http://127.0.0.1:8000`.

## How to Use

-   Navigate to the homepage at `http://127.0.0.1:8000`.
-   Click on the **"View Posts"** button or the "Posts" link in the navigation bar.
-   On the posts page (`/posts`), you can see a list of all posts.
-   Click **"Create New Post"** to add a new entry.
-   Use the **"Delete"** button on any post to remove it.
