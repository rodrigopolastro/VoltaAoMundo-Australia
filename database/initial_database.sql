/* Initial Version of the Database */

CREATE TABLE User_Types (
    user_type_id INTEGER PRIMARY KEY,
    type_name VARCHAR(30)
);

CREATE TABLE Users (
    user_id INTEGER PRIMARY KEY,
    user_type_id INTEGER,
    email VARCHAR(50),
    first_name VARCHAR(30),
    last_name VARCHAR(50),
    created_at TIMESTAMP,

    FOREIGN KEY (user_type_id)
    REFERENCES User_Types (user_type_id)
    ON DELETE RESTRICT
);

CREATE TABLE Pages (
    page_id INTEGER PRIMARY KEY,
    page_name VARCHAR(100),
    page_url VARCHAR(100),
    created_at TIMESTAMP
);

CREATE TABLE Comments (
    comment_id INTEGER PRIMARY KEY,
    page_id INTEGER,
    user_id INTEGER,
    content VARCHAR(1000),
    is_approved BOOLEAN,
    created_at TIMESTAMP,

    FOREIGN KEY (page_id)
    REFERENCES Pages (page_id)
    ON DELETE CASCADE,

    FOREIGN KEY (user_id)
    REFERENCES Users (user_id)
    ON DELETE CASCADE
);

