-- Object is to create a new table with artist and album visibility.

-- MySQL Advance Select Queries and Joins

-- [SECTION] Discussion Preparation


-- Add five artists
	-- Taylor Switf
	-- Lady Gaga
	-- Justine Bieber
	-- Ariana Grande
	-- Bruno Mars

INSERT INTO artists (name) VALUES
('Taylor Swift'), -- PK 3
('Lady Gaga'), -- PK 4
('Justin Bieber'), -- PK 5
('Ariana Grande'), -- PK 6
('Bruno Mars'); -- PK 7


-- Taylor Swift Albums and Songs


INSERT INTO albums (album_title, date_released, artist_id)
	VALUES ('Fearless', '2008-01-01', 3);

-- Album Red (Taylor Swift)
INSERT INTO songs (song_name, length, genre, album_id) VALUES
('Fearless', 246, 'Pop rock', 3),
('Love Story', 213, 'Country pop', 3);

INSERT INTO albums (album_title, date_released, artist_id) VALUES
('Red', '2012-01-01', 3);

INSERT INTO songs (song_name, length, genre, album_id) VALUES
('State of Grace', 250, 'Rock, alternative rock, arena rock', 4),
('Red', 204, 'Country', 4);

-- Lady Gaga
INSERT INTO albums (album_title, date_released, artist_id) VALUES
('A Star is Born', '2018-10-05', 4), -- 5
('Born This Way', '2011-08-25', 4); -- 6

INSERT INTO songs (song_name, length, genre, album_id) VALUES
('Black Eyes', 151, 'Rock and roll', 5),
('Shallow', 201, 'Country, rock, folk rock', 5),
('Born This Way', 252, 'Electropop', 6);


-- Justin Bieber (PK 5)
INSERT INTO albums (album_title, date_released, artist_id) VALUES
('Purpose', '2015-01-01', 5); -- 7

INSERT INTO songs (song_name, length, genre, album_id) VALUES
('Sorry', 200, 'Dancehall-poptropical housemoombathon', 7);


-- [SECTION] Advanced Selects

-- 1. Show only specific number of records
-- LIMIT keyword is used to specify the number of records to return
SELECT * FROM songs LIMIT 5;

-- Combining LIMIT with WHERE clause
SELECT * FROM songs WHERE length >=100 LIMIT 5;

-- 2. Excluding a record
SELECT * FROM songs WHERE album_id != 3


-- Mini Activity
-- Exclude all songs from the albums of Lady Gaga
SELECT * FROM songs WHERE album_id !=5 AND album_id !=6;

-- 3. Finding records using comparison and operator
-- >, <. >=. <=
SELECT * FROM songs WHERE length > 230;

-- OR operator (one condition must be satisfied)
SELECT * FROM songs WHERE genre = "Pop" OR genre = "Pop rock" OR genre = "Country";


SELECT * FROM songs WHERE genre = "Pop" IN ("Pop rock", "Country");


-- AND operator (one condition must be satisfied)
SELECT * FROM songs WHERE genre = "Pop" OR genre = "Pop rock" AND genre = "Country";

-- Excluding songs using AND operator
SELECT * FROM songs WHERE album_id !=5 AND album_id !=6;


-- Show records with partial match
-- LIKE keyword which is used in a WHERE clause to search for specific pattern in a column
-- There are two wildcard operators used in conjuction with LIKE
	-- "%" which represents zero, one or multiple characters
	-- "_" which represents a single characters.

	
-- songs that STARTS WITH L
SELECT * FROM songs WHERE song_name LIKE "l%";

-- songs that ENDS WITH Y
SELECT * FROM songs WHERE song_name LIKE "%y";
SELECT * FROM songs WHERE song_name LIKE "%ry";

-- artists that WITH CHARACTER 'A' on their name
SELECT * FROM artists WHERE name LIKE "%a%";

SELECT * FROM songs WHERE song_name LIKE "Love______";
SELECT * FROM songs WHERE song_name LIKE "__rr_";

SELECT * FROM albums WHERE album_title LIKE "_ur%";

SELECT * FROM albums WHERE album_title LIKE "%_r%";

-- Sorting Records (ORDER BY)
SELECT * FROM songs ORDER BY song_name;
SELECT * FROM songs ORDER BY song_name ASC;
SELECT * FROM songs ORDER BY song_name DESC;

-- SELECT DISTINCT (unique, w/out duplication) values (DISTINCT)
SELECT DISTINCT artist_id FROM albums;

-- Counts the total number of songs
SELECT COUNT(*) FROM songs;

------------------------------------------------
-- Joining Tables

-- Syntax: 
-- SELECT * FROM lefttable
-- JOIN rightTable ON leftTable.primarykey = rightTable.foreignKey
SELECT * FROM artists
	JOIN albums ON artist_id = albums.artist_id;


-- SYNTAX: 
-- SELECT columns FROM firstTable
-- JOIN selectTable ON firstTable.primaryKey = secondTable.foreignKey
-- JOIN thirdTable ON secondTable.primaryKey = thirdTable.foreignKey;
SELECT * FROM artists
JOIN albums ON artists.id = albums.artist_id
JOIN songs ON albums.id = songs.album_id;




SELECT artists.name, albums.album_title, songs.song_name 
	FROM artists
JOIN albums ON artists.id = albums.artist_id
JOIN songs ON albums.id = songs.album_id;


SELECT * FROM artists
LEFT JOIN albums ON artist_id = albums.artist_id;






