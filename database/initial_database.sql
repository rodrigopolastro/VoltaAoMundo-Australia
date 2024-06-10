/* Initial Version of the Database */

CREATE TABLE User_Types (
    user_type_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(30) NOT NULL
);

CREATE TABLE Users (
    user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_type_id INTEGER,
    email VARCHAR(50) UNIQUE NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP,

    FOREIGN KEY (user_type_id)
    REFERENCES User_Types (user_type_id)
    ON DELETE RESTRICT
);

CREATE TABLE Pages (
    page_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    page_name VARCHAR(100) UNIQUE NOT NULL,
    page_url VARCHAR(100),
    created_at TIMESTAMP
);

CREATE TABLE Comments (
    comment_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    page_id INTEGER,
    user_id INTEGER,
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

