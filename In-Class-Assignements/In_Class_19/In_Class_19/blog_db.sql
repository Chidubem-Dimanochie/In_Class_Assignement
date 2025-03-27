CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); INSERT INTO posts(title, content)
VALUES(
    'First Post',
    'This is the content of the first post.'
),(
    'Second Post',
    'This is another sample post.'
);
