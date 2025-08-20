# Trip Form (PHP + MySQL, XAMPP)

A minimal PHP project that renders a student trip registration form and saves submissions to a MySQL database. Built for local development with XAMPP;

## Features
- PHP-only form handling (render → POST → insert)
- MySQL persistence (via `mysqli`)
- Minimal HTML5 validation (`required`, input types)
- Simple, readable structure (single `index.php` + `style.css`)

## Tech Stack
- PHP (XAMPP Apache)
- MySQL / MariaDB
- HTML5 / CSS3

## Project Structure

Trip-form/
├─ index.php         # form render + POST handler + DB insert..
├─ style.css         # minimal styles..
└─ bg.jpg            # background image (optional)..


## SQL 
Open phpMyAdmin → **SQL** and run:
```sql
CREATE DATABASE IF NOT EXISTS trip;
USE trip;

CREATE TABLE IF NOT EXISTS trip (
  `sr. no.` INT AUTO_INCREMENT PRIMARY KEY,
  `name`    VARCHAR(100) NOT NULL,
  `age`     INT,
  `gender`  VARCHAR(20),
  `email`   VARCHAR(100) NOT NULL,
  `phone`   VARCHAR(20),
  `other`   TEXT,
  `dt`      TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

