# task-3-

# Task Management System (PHP & MySQL)

This project was developed as **Task-4 for the ApexPlanet Full Stack Web Development Internship**.
It is a **Task Management System** that allows users to manage tasks efficiently with authentication, CRUD operations, and an admin panel.

---

## 📌 Project Overview

The Task Management System is a web application where users can create and manage tasks.
It includes **user authentication, role-based access (Admin/User), CRUD functionality, and a dashboard to track tasks**.

The system demonstrates **full-stack development concepts using PHP and MySQL**.

---

## 🚀 Features

### 👤 User Features

* User Registration
* Secure Login & Logout
* Session-based authentication
* Create new tasks
* View personal tasks
* Update existing tasks
* Delete tasks

### 👑 Admin Features

* Admin Dashboard
* View all registered users
* Manage all tasks
* View system statistics (users & tasks)

---

## 🛠️ Technologies Used

* **PHP** – Backend development
* **MySQL** – Database management
* **HTML5** – Web page structure
* **CSS3** – Styling and layout

---

## 📂 Project Structure

```
task-management-system/
│
├── db.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── admin.php
├── add_task.php
├── edit_task.php
├── delete_task.php
├── style.css
├── database.sql
└── README.md
```

---

## ⚙️ Installation & Setup

### 1️⃣ Install XAMPP

Download and install **XAMPP** and start the following services:

* Apache
* MySQL

---

### 2️⃣ Move Project Folder

Place the project inside the **htdocs** folder:

```
C:\xampp\htdocs\task-management-system
```

---

### 3️⃣ Create Database

Open:

```
http://localhost/phpmyadmin
```

Create database:

```
task4_db
```

---

### 4️⃣ Import Database File

Import the SQL file:

```
database.sql
```

This will create the required tables for the system.

---

### 5️⃣ Run the Project

Open in browser:

```
http://localhost/task-management-system/login.php
```

---

## 🧪 How the System Works

1. User registers with name, email, and password.
2. Password is securely stored using **PHP password hashing**.
3. User logs in using registered credentials.
4. After login, users can manage their tasks through the dashboard.
5. Admin users can access the **Admin Panel** to view all users and tasks.

---

## 📌 Internship Task

This project was developed for:

**ApexPlanet Software Pvt. Ltd.**
Full Stack Web Development Internship – **Task-4**

---

## 👩‍💻 Author

**Lakshmi Susmitha Thota**
B.Tech – Information Technology

GitHub:
https://github.com/LakshmiSusmithaThota
