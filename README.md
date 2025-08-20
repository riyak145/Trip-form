Travel Form of collage(PHP + MySQL, XAMPP)
A minimal PHP project that renders a student trip registration form and saves submissions to a MySQL database. Built for local development with XAMPP; no JavaScript required.

Features
PHP-only form handling (render + POST + insert)
MySQL persistence (via mysqli)

Minimal HTML5 validation (required, input types)

Simple, readable structure (single index.php + style.css)

Tech Stack
PHP (via XAMPP Apache)
MySQL 
HTML5/CSS3

Trip-form/
├─ index.php         # form render + POST handler + DB insert
├─ style.css         # minimal styles
└─ bg.jpg            # background image (optional)


Open phpMyAdmin → SQL and run:

CREATE DATABASE IF NOT EXISTS trip;
USE trip;

CREATE TABLE IF NOT EXISTS trip (
  `sr. no.` INT AUTO_INCREMENT PRIMARY KEY,
  `name`   VARCHAR(100) NOT NULL,
  `age`    INT,
  `gender` VARCHAR(20),
  `email`  VARCHAR(100) NOT NULL,
  `phone`  VARCHAR(20),
  `other`  TEXT,
  `dt`     TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
