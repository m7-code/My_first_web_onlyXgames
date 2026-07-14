# 🎮 OnlyXGames Web Application

## 📌 Project Overview

**OnlyXGames** is a simple gaming-themed web application that includes a homepage showcasing popular games, along with a **user authentication system** (registration and login). The project is built using **HTML, CSS, JavaScript, PHP, and MySQL** and is designed to run on a local server environment.

The website allows users to:

* Browse a visually rich gaming homepage
* Register an account
* Log in with their credentials
* Store user data securely in a MySQL database

---

## 🛠️ Technologies Used

* **HTML5** – Structure of the web pages
* **CSS3** – Styling and responsive design
* **JavaScript** – Slider and UI interactions
* **PHP** – Server-side logic (login & registration)
* **MySQL** – Database for storing user data
* **XAMPP / WAMP / LAMP** – Local development server

---

## 📂 Project Structure

```
OnlyXGames/
│── index.html          # Main homepage
│── login.html          # Login page
│── register.html       # Registration page
│── InsertData.php      # Handles user registration
│── insertData1.php     # Handles user login
│── style.css           # Main homepage styling
│── style1.css          # Login & register page styling
│── images/             # Images and logos
│── videos/             # Game trailers
│── README.md           # Project documentation
```

---

## 🗄️ Database Configuration

### 1️⃣ Create Database

```sql
CREATE DATABASE login;
```

### 2️⃣ Create User Table

```sql
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

⚠️ **Important:**

* Ensure the table name is consistent across all PHP files (`user` vs `users`).
* Passwords are stored in **hashed format** using `password_hash()`.

---

## 🔐 Authentication Flow

### 📝 Registration

* User submits username, email, and password
* Password is securely hashed
* Data is inserted into the database using prepared statements
* User is redirected to the login page on success

### 🔑 Login

* User submits username and password
* Credentials are checked against the database
* Successful login displays a confirmation message
* Invalid credentials show an error alert

---

## 🎨 UI Features

* Gaming-themed homepage with background images
* Embedded video trailers
* Auto-sliding image banner (JavaScript)
* Responsive login and registration forms
* Hover animations and button effects

---

## 🚀 Installation & Setup

1. Install **XAMPP / WAMP / LAMP**
2. Place the project folder inside:

```
htdocs/   (XAMPP)
www/      (WAMP)
```

3. Start **Apache** and **MySQL** services
4. Import the database using **phpMyAdmin**
5. Open your browser and visit:

```
http://localhost/OnlyXGames/index.html
```

---

## 🔒 Security Notes

* Password hashing is implemented during registration
* For better security, login validation should use:

```php
password_verify($password, $hashedPassword);
```

* Input validation and prepared statements are recommended everywhere




