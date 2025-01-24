# Authentication System

This project is an Authentication System built with **PHP** and **Bootstrap**. It is designed to provide a robust and user-friendly way to manage user registration, login, and logout functionality. This project is part of the course: [PHP with MySQL 2022: Build 5 PHP and MySQL Projects](https://www.udemy.com/course/php-with-mysql-2022-build-5-php-and-mysql-projects/learn/lecture/34090598#overview).

---

## Features

- **User Registration**: Securely create new user accounts with validation.
- **User Login**: Authenticate users with stored credentials.
- **User Logout**: End user sessions securely.
- **Session Management**: Handle user sessions effectively for authentication.
- **Password Hashing**: Use secure methods for storing user passwords.
- **Responsive Design**: Built with Bootstrap for mobile-friendly UI.

---

## Technologies Used

### Backend
- PHP 7+
- MySQL Database

### Frontend
- Bootstrap 5
- HTML5 & CSS3
- JavaScript (optional for validation or interactivity)

---

## Installation

Follow these steps to set up the project locally:

### Prerequisites
- A web server (e.g., **XAMPP**, **WAMP**, or **MAMP**).
- PHP installed on your system.
- MySQL database.
- Composer (optional, for dependency management).

### Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/authentication-system.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd authentication-system
   ```

3. **Set Up the Database**:
   - Create a new MySQL database (e.g., `auth_system`).
   - Import the SQL file provided (`database/auth_system.sql`) into your database.

4. **Configure the Database Connection**:
   - Open `config/db.php`.
   - Update the database credentials:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'your_username');
     define('DB_PASS', 'your_password');
     define('DB_NAME', 'auth_system');
     ```

5. **Run the Project**:
   - Start your local web server.
   - Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
   - Access the project in your browser at `http://localhost/authentication-system`.

---

## Usage

1. Navigate to the homepage.
2. Register a new account using the registration form.
3. Log in with your credentials.
4. Explore the features such as protected pages and logout functionality.

---

## File Structure
```
/authentication-system
|-- config
|   |-- db.php           # Database connection file
|-- css
|   |-- styles.css       # Custom styles
|-- database
|   |-- auth_system.sql  # Database schema
|-- includes
|   |-- header.php       # Header template
|   |-- footer.php       # Footer template
|-- js
|   |-- script.js        # Custom JavaScript (optional)
|-- pages
|   |-- login.php        # Login page
|   |-- register.php     # Registration page
|   |-- logout.php       # Logout script
|   |-- dashboard.php    # Protected user dashboard
|-- index.php            # Homepage
|-- README.md            # Documentation
```

---

## Screenshots

### Registration Page
![Registration Page](screenshots/registration.png)

### Login Page
![Login Page](screenshots/login.png)

### Dashboard
![Dashboard](screenshots/dashboard.png)

---

## Future Enhancements

- Add email verification for registration.
- Implement password reset functionality.
- Add OAuth2 login (Google, Facebook, etc.).
- Enhance security with prepared statements and CSRF protection.

---

## License
This project is licensed under the MIT License. Feel free to use and modify it as per your needs.

---

## Acknowledgments
- Thanks to the [Udemy Course](https://www.udemy.com/course/php-with-mysql-2022-build-5-php-and-mysql-projects/) for the inspiration and guidance.

