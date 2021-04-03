# CodeIgniter 4 Framework - DEMO

### Setup Database
- Create database
<code>CREATE DATABASE demo;</code>

- Create table users
<code>CREATE TABLE users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    user_password VARCHAR(200),
    user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;</code>

- Create table promotions
<code>CREATE TABLE promotions(
    promotion_id INT PRIMARY KEY AUTO_INCREMENT,
    promotion_code VARCHAR(100),
    phone VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;</code>

composer install --ignore-platform-reqs

### composer install
### Start project
**php spark serve**

- start with port:
**php spark serve --port 8081**