mysql -h 127.0.0.1 -P 3306 -u root

CREATE TABLE practice_db (
    id INT PRIMARY KEY,
    review VARCHAR(500),
    datetime_created DATETIME,
    rating INT
);

INSERT INTO reviews (id, review, datetime_created, rating) VALUES
(1, 'Test1!', '2023-10-04 09:30:00', 5),
(2, 'Cge Test2!', '2023-10-04 10:15:00', 3),
(3, 'okay, test3!', '2023-10-04 11:20:00', 1),
(4, 'naks, test4!', '2023-10-04 12:45:00', 5),
(5, 'best, test5.', '2023-10-04 13:55:00', 2);

SELECT * FROM reviews;

SELECT * FROM reviews WHERE rating = 5;

SELECT * FROM reviews WHERE rating = 1;

UPDATE reviews SET rating = 5;