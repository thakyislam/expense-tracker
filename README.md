# Expense Tracker App

This is a simple Laravel-based Expense Tracker application that allows users to track their expenses. It includes user authentication, expense management, and basic functionality such as adding, editing, viewing, and deleting expenses.

## Features

-   **User Authentication**: Users can register, login, and log out to track their expenses securely.
-   **Expense Management**: Users can add, update, and delete expenses.

## Installation Steps

### 1. Clone the Repository

Clone the repository to your local machine:

```bash
git clone https://github.com/thakyislam/expense-tracker.git
cd expense-tracker

2. Install Dependencies
Install the required dependencies using Composer:
composer install

3. Set Up the .env File
Create a .env file by copying the example .env.example:
cp .env.example .env

Update the database settings in the .env file with your local or remote database credentials. Example:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=

4. Generate the Application Key
Generate the application key:
php artisan key:generate

5. Run Migrations
Run the migrations to create the necessary tables in your database:
php artisan migrate

6. Seed the Database (Optional)
If you'd like to populate your database with sample data, you can run the seeders:
php artisan db:seed

7. Start the Development Server
Now, you can start the Laravel development server:
php artisan serve


You can access the application at http://localhost:8000.
```
