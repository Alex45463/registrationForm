# PHP Registration/Login Form
Registration and Login Form for school assignment using bcrypt algorithm with cost 8 to hash passwords

## **BACK-END:**

TO COMPLETE

## **DATABASE:**
**SQL query used to create the table of the form:**
```
CREATE TABLE IF NOT EXISTS form (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    telephone VARCHAR(255) NOT NULL,
    newsletter BOOLEAN NOT NULL DEFAULT 0,
    preference VARCHAR(255) NOT NULL,
    billing_method VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;
```
