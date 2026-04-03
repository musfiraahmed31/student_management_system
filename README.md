# Web-Based Student Management System 🎓

A comprehensive web application designed to manage student records efficiently. This project demonstrates the seamless integration of frontend and backend technologies using a local WAMP Server environment. 

## 🚀 Features

The system performs the following core operations:
* **Add Student Record:** A dedicated form to input student details (Name, Email, Department, Semester).
* **Client-Side Validation:** JavaScript ensures all fields are filled correctly and validates email formats before submission.
* **Store Data:** PHP handles backend processing, using `INSERT` queries to store data securely in a MySQL database.
* **View Stored Records:** A dynamic dashboard that uses `SELECT` queries to retrieve and display all student records in a clean table format.
* **Delete Records:** Safely remove student entries with a JavaScript confirmation prompt to prevent accidental deletions.

## 🗂️ System Pages

* **Home Page (Dashboard):** The main portal for system navigation.
* **Add Record Page:** Interface for registering new students.
* **View Records Page:** Displays the database of current students.
* **About System Page:** Information regarding the system's purpose and functionality.

## 🛠️ Tech Stack

* **Frontend:** HTML5 (Structure), CSS3 (Styling/Layout), JavaScript (Form Validation & Alerts)
* **Backend:** PHP (Server-side scripting & Database connection)
* **Database:** MySQL (phpMyAdmin for management)
* **Server Environment:** WAMP Server (Apache, PHP, MySQL)

## 🗄️ Database Structure

To run this project, you will need to set up the database locally. 

* **Database Name:** `student_management`
* **Table Name:** `students`

**Fields:**
* `id` (Primary Key, Auto Increment)
* `name` (VARCHAR)
* `email` (VARCHAR)
* `department` (VARCHAR)
* `semester` (VARCHAR)

### SQL Setup Query:
You can run this query in phpMyAdmin to instantly create the required table:
```sql
CREATE DATABASE student_management;
USE student_management;

CREATE TABLE students (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    semester VARCHAR(50) NOT NULL
);

💻 How to Run Locally
Install WAMP Server: Download and install WampServer on your machine.

Start WAMP: Launch the application and ensure the icon in your system tray turns green (meaning all services are running).

Clone or Extract Project: Place the project folder into the WAMP web directory. This is usually located at C:\wamp64\www\.

Example: C:\wamp64\www\StudentManagementSystem

Set Up the Database:

Open your browser and go to http://localhost/phpmyadmin.

Create the database and table using the instructions/SQL query provided above.

Launch the System: Open your web browser and navigate to:
http://localhost/StudentManagementSystem (or whatever you named the folder).

Developed as a lab project demonstrating frontend and backend integration using WAMP.
