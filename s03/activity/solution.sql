mysql -h 127.0.0.1 -P 3306 -u root

USE Tables_in_blog_db;

INSERT INTO users (email, password, datetime_created) VALUES 
('johnsmith@gmail.com', 'passwordA', '2021-01-01 01:00:00'),
('juandelacruz@gmail.com', 'passwordB', '2021-01-01 02:00:00'),
('janesmith@gmail.com', 'passwordC', '2021-01-01 03:00:00'),
('mariadelacruz@gmail.com', 'passwordD', '2021-01-01 04:00:00'),
('johndoe@gmail.com', 'passwordE', '2021-01-01 05:00:00');



INSERT INTO posts (title, content, datetime_posted, author_id) VALUES 
('First Code', 'Hello World!', '2021-01-02 01:00:00', 1),
('Second Code', 'Hello Earth!', '2021-01-02 02:00:00', 1),
('Third Code', 'Welcome to Mars!', '2021-01-02 03:00:00', 2),
('Fourth Code', 'Bye bye solar system!', '2021-01-02 04:00:00', 4);

-- DELETE FROM posts;

-- Get all the post with an Author ID of 1.
SELECT * FROM posts WHERE author_id = 1;

-- Get all user's email and datetime of creation.
SELECT email, datetime_created FROM users;

-- Update a post's content to "Hello to the people of the Earth!" where its initial content is "Hello Earth!" by using the record's ID.
UPDATE posts SET content = 'Hello to the people of the Earth!' WHERE title = 'Second Code' AND author_id = 1;



-- Delete the user with an email of "johndoe@gmail.com".
DELETE FROM users WHERE email = 'johndoe@gmail.com';