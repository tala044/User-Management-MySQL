# User Management MySQL

A web-based user management system built with PHP, MySQL, HTML, CSS, and JavaScript, featuring user records and real-time status management.

## Live Website

[Open User Management System](https://tala.free.je/index.php)

## Features

- Add users by entering their name and age.
- Store submitted user data in a MySQL database.
- Display all user records in a table.
- Toggle the status of each user between 0 and 1.
- Update the status immediately on the webpage.
- Responsive and styled user interface.

## Project Files

- `index.php` — Main webpage containing the user form and user records.
- `db.php` — Handles the connection to the MySQL database.
- `toggle.php` — Handles updating the user's status.
- `script.js` — Contains the JavaScript functionality for the toggle button.
- `style.css` — Contains the styling for the webpage.

## Database

The project uses a MySQL database with a `users` table containing the following columns:

| Column | Description |
|---|---|
| `id` | Unique user ID |
| `name` | User name |
| `age` | User age |
| `status` | User status (0 or 1) |

## How It Works

1. The user enters their name and age in the form.
2. The form is submitted using the POST method.
3. PHP receives the submitted data and stores it in the MySQL database.
4. The stored records are displayed in a table below the form.
5. Each record has a Toggle button.
6. Clicking the Toggle button changes the user's status between 0 and 1.
7. The updated status is displayed immediately on the webpage.

## Setup

1. Create a MySQL database.
2. Create a `users` table with the required columns: `id`, `name`, `age`, and `status`.
3. Configure the database connection in `db.php`.
4. Upload the project files to a PHP-supported web server.
5. Open `index.php` through the website URL.
6. Add users and test the Toggle buttons.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Project Demo

The live project can be accessed here:

[User Management System](https://tala.free.je/index.php)
