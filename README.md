# User Management System (PHP & MySQL)

This project was developed as **Task-3 for the ApexPlanet Full Stack Web Development Internship**.
It is a simple **User Management System** that demonstrates backend development using **PHP and MySQL** with authentication and CRUD operations.

---

## 📌 Project Overview

The User Management System allows users to **register, log in, and manage user records** through a web interface.
It demonstrates **core backend development concepts**, including database connectivity, session management, and secure authentication.

---

## 🚀 Features

* User Registration
* User Login Authentication
* Password Hashing for secure storage
* Session-based Login & Logout
* CRUD Operations (Create, Read, Update, Delete Users)
* Secure database queries using prepared statements

---

## 🛠️ Technologies Used

* **PHP** – Backend development
* **MySQL** – Database management
* **HTML5** – Structure of web pages
* **CSS3** – Styling and layout

---

## 📂 Project Structure

```id="4t9yyv"
user-management-system/
│
├── db.php            # Database connection
├── register.php      # User registration page
├── login.php         # User login page
├── dashboard.php     # Dashboard showing users
├── edit.php          # Update user details
├── delete.php        # Delete user record
├── logout.php        # Logout functionality
├── database.sql      # Database structure
├── style.css         # Basic styling
└── README.md
```

---

## ⚙️ Installation & Setup

### 1️⃣ Install XAMPP

Download and install **XAMPP** and start:

* Apache
* MySQL

---

### 2️⃣ Move Project Folder

Place the project folder inside:

```id="m2e0lf"
C:\xampp\htdocs\
```

Example:

```id="h2lup3"
C:\xampp\htdocs\user-management-system
```

---

### 3️⃣ Create Database

Open in browser:

```id="u1ejw2"
http://localhost/phpmyadmin
```

Create database:

```id="f3c71h"
task3_db
```

---

### 4️⃣ Import SQL File

Import the file:

```id="uynb7j"
database.sql
```

This will create the **users table** required for the project.

---

### 5️⃣ Run the Project

Open in browser:

```id="c24d3c"
http://localhost/user-management-system/register.php
```

---

## 🧪 How the System Works

1. User registers with name, email, and password.
2. Password is securely stored using **PHP password hashing**.
3. User logs in using registered credentials.
4. After login, a dashboard displays all users.
5. Users can update or delete records using CRUD operations.
6. Session management keeps users logged in until logout.

---

## 📌 Internship Task

This project was developed for:

**ApexPlanet Software Pvt. Ltd.**
Full Stack Web Development Internship – **Task-3**

---

## 👩‍💻 Author

**Lakshmi Susmitha Thota**
B.Tech – Information Technology

GitHub:
https://github.com/LakshmiSusmithaThota
