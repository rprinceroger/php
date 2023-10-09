-- Connection to MySQL via Terminal: mysql -u root
-- "-u" stands for username
-- "root" is the default username for sql
-- mysql -u root -p
-- "-p" stand for password
-- An empty value is the default password for SQL


mysql -h 127.0.0.1 -P 3306 -u root



SHOW DATABASES;

-- Note: 
	-- SQL Queries is case insensitive, but to easily identify the queries we usually use UPPERCASE;
	-- Make sure semi-colons (;) are added at the end of the sql sysntax.

-- Creates a database
CREATE DATABASE music_db;
-- Delete a database
-- DROP DATABASE music_db;

-- Select a database
USE music_db;


-- DROP TABLE artists;


CREATE TABLE artists(
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
);

-- Tables with foreign keys:
-- Applying constraints in a table
-- SYNTAX: 
/*
CREATE TABLE table_name(
	columns
	CONSTRAIN foreign_key_name
		FOREIGN KEY(column_name)
		REFERENCES reference_table_name(id)
		ON UPDATE ACTION
		ON DELETE ACTION
);
*/

CREATE TABLE albums(
	id INT NOT NULL AUTO_INCREMENT,
	album_title VARCHAR(50) NOT NULL,
	date_released DATE NOT NULL,
	artist_id INT NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_albums_artist_id
		FOREIGN KEY(artist_id) REFERENCES artists
			(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);


-- NOTES: 
-- CONSTRAINT: used to specify the rules for the data table, in our case, we use this to identify the foreign key of our specific table.
-- FOREIGN KEY: used to prevent actions that will destroy links between tables.
-- REFERENCES: is a field taht usually refers to the primary key of another table

CREATE TABLE songs(
	id INT NOT NULL AUTO_INCREMENT,
	song_name VARCHAR(50) NOT NULL,
	length TIME NOT NULL,
	genre VARCHAR(50) NOT NULL,
	album_id INT NOT NULL,
	PRIMARY KEY (id),
	CONSTRAINT fk_songs_album_id
	FOREIGN KEY (album_id)
	REFERENCES albums
		(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);


-- DROP TABLE users;

-- To create a table
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	full_name VARCHAR(50) NOT NULL,
	contact_number VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	address VARCHAR(50),
	PRIMARY KEY(id)
);

-- ALTER TABLE users MODIFY email VARCHAR(50) NULL;
-- DESCRIBE users;

-- We used "INT" for integers.
-- Used "NOT NULL" if it is required.
-- If it is "AUTO_INCREMENT" there's no need to add ID.

-- Used "DESCRIBE" 'name of the table' to show the table.

-- Allows us to see the table columns, data types, etc.
DESCRIBE users;
DESCRIBE artists;

-- To show tables under a database (In our case, music_db database table).

SHOW tables;


-- Create playlist table

CREATE TABLE playlists(
	id INT NOT NULL AUTO_INCREMENT,
	datetime_created DATETIME NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_playlists_user_id
		FOREIGN KEY (user_id) REFERENCES users(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);

CREATE TABLE playlists_songs(
	id INT NOT NULL AUTO_INCREMENT,
	playlist_id INT NOT NULL,
	song_id INT NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_playlists_songs_playlist_id
		FOREIGN KEY (playlist_id) REFERENCES playlists(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT,
	CONSTRAINT fk_playlists_songs_song_id
		FOREIGN KEY (song_id) REFERENCES songs(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);