DROP DATABASE IF EXISTS volta_ao_mundo;
CREATE DATABASE volta_ao_mundo;
USE volta_ao_mundo;

CREATE TABLE User_Types (
    user_type_id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    type_name VARCHAR(30) NOT NULL
);

INSERT INTO User_Types (type_name) VALUES 
('admin'),
('user');

CREATE TABLE Users (
    user_id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_type_id INTEGER NOT NULL,
    user_email VARCHAR(50) UNIQUE NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP,

    FOREIGN KEY (user_type_id)
    REFERENCES User_Types (user_type_id)
    ON DELETE RESTRICT
);

-- System Administrator => password = admin123
INSERT INTO Users (user_type_id, user_email, user_password, first_name, last_name) VALUES 
('1', 'admin@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'Administrador', 'ADM');

CREATE TABLE Pages (
    page_id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    page_name VARCHAR(100) UNIQUE NOT NULL,
    created_at TIMESTAMP
);

INSERT INTO Pages (page_name) VALUES 
('cities'),
('culture'),
('home'),
('places'),
('statistics');

CREATE TABLE Comments (
    comment_id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    page_id INTEGER NOT NULL,
    user_id INTEGER NOT NULL,
    content VARCHAR(1000) NOT NULL,
    is_approved BOOLEAN NOT NULL,
    created_at TIMESTAMP,

    FOREIGN KEY (page_id)
    REFERENCES Pages (page_id)
    ON DELETE CASCADE,

    FOREIGN KEY (user_id)
    REFERENCES Users (user_id)
    ON DELETE CASCADE
);

