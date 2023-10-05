
mysql -h 127.0.0.1 -P 3306 -u root

CREATE DATABASE course_db;

DROP DATABASE course_db;

CREATE DATABASE course_db;

USE course_db;

CREATE TABLE students (
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	full_name VARCHAR(50) NOT NULL,
	contact_number VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE subjects (
	id INT NOT NULL AUTO_INCREMENT,
	course_name VARCHAR(100) NOT NULL,
	schedule VARCHAR(100) NOT NULL,
	instructor VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
);


CREATE TABLE enrollments (
    id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    subject_id INT NOT NULL,
    datetime_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_enrollments_student_id
        FOREIGN KEY (student_id) REFERENCES students(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

INSERT INTO students (username, password, full_name, contact_number, email) VALUES 
('battosai', '1234', 'Hitoriki Battosai','16501234567', 'battosai@mail.com'),
('gin', '1234', 'Gin Hotarubi','16501234567', 'gin@mail.com');

INSERT INTO subjects (course_name, schedule, instructor) VALUES 
('PHP', 'Monday and Wednesday 9:00 AM - 10:30 AM', 'Professor Smith'),
('JavaScript', 'Tuesday and Thursday 2:00 PM - 3:30 PM', 'Professor X');

INSERT INTO enrollments (student_id, subject_id) VALUES
    (1, 2), -- Student 1 enrolled in Subject 2
    (2, 2); -- Student 2 enrolled in Subject 2



SHOW TABLES;
DESCRIBE students;
DESCRIBE subjects;
DESCRIBE enrollments;
SELECT * FROM students;
SELECT * FROM subjects;
SELECT * FROM enrollments;