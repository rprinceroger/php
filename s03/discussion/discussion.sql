
/*
create
read
update
delete

localhost:phpmyadmin
*/

-- MySQL CRUD Operations

-- [Insert a Record]

-- Syntax:
	-- INSERT INTO table_name (column_name) VALUES (Values);

INSERT INTO artists (name) VALUES ("Psy");
INSERT INTO artists (name) VALUES ("Rivermaya");

-- [Insert a record with multiple column]

-- Syntax: 
	-- INSERT INTO table_name (column_nameA, column_nameB) Values (valueA, valueB);

-- Album Table
INSERT INTO albums (album_title, date_released, artist_id) VALUES ("Psy 6","2023-08-15", 1);
INSERT INTO albums (album_title, date_released, artist_id) VALUES ("Trip","1996-02-14", 2);


-- MySQL non-delimeter Date and Time Literals
	-- this allows Date and Time values to be represented without delimeters (such as hypen, colon, or spaces)

	-- Time Format
		-- Original: HH:MM:SS
		-- Non-delimiter: HHMMSS
		-- but make sure that it still follow the correct "max" value for each time intervals.
			-- HH = 24
			-- MM = 59
			-- SS = 59

-- Songs Table

INSERT INTO songs (song_name, length, genre, album_id) VALUES ("Gangnam Style", 339, "K-pop", 1);


-- Mini-Activity

	-- Insert the following songs in the songs table
		-- Song name: Kundiman
		-- Length: 5 mins 24 seconds
		-- Genre: OPM
		-- Album: Trip

		-- Song name: Kisapmata
		-- Length: 4 mins 41 seconds
		-- Genre: OPM
		-- Album: Trip

-- Check if the songs are added
-- Send your songs table in the batch hangouts



INSERT INTO songs (song_name, length, genre, album_id) VALUES ("Kundiman", 524, "OPM", 2);
INSERT INTO songs (song_name, length, genre, album_id) VALUES ("Kisapmata", 441, "OPM", 2);


--[Selecting Records]

-- Showing all Records

-- Syntax: 
	-- SELECT * FROM table_name;
		-- (*) means all columns will be shown in the selected table

SELECT * FROM songs;


-- Show records with selected columns
-- Syntax: 
	-- SELECT column_nameA, column_nameB FROM table_name;

-- Display the title and genre of all songs;

SELECT song_name, genre FROM songs;

-- Display the album title and date released of all albums

SELECT album_title, date_released FROM albums;

-- Show records that meets a certain condition
-- Syntax: 
	-- SELECT column_name FROM table_name WHERE condition;
	-- "WHERE" clause is used filter records and to extract only those records that fulfill a specific condition.

-- Displays the title of all the OPM songs;
SELECT song_name FROM songs WHERE genre = "OPM";


-- Mini-Activity

-- Display the title of all songs where the length is less than four minutes.

SELECT song_name FROM songs WHERE length <= 400;

-- Show records with multiple conditions
-- Syntax: 
	-- AND clause
		-- SELECT column_name FROM table_name WHERE conditio1 AND condition2;
	-- OR clause
		-- SELECT column_name FROM table_name WHERE condition1 OR condition2;

-- Display the title and length of the OPM songs that are more than 4 minutes and 30 seconds;

SELECT song_name, length FROM songs WHERE length > 430 AND genre = "OPM";


-- [Updating Records]

-- Update single column of a record
-- Syntax: 
	-- UPDATE table_name SET column_name = new_value WHERE condition;

UPDATE songs SET length = 424 WHERE song_name = "Kundiman";

-- Check if the songs Kundiman is updated

SELECT song_name, lenth FROM songs WHERE song_name = "Kundiman";

-- Updating multiple columns of records 
-- Syntax: 
	-- UPDATE table_name SET column_name1 = new value1, column_name2 = new value2 where condition;

-- Update the album with a title of Psy 6 and change its title to "Psy 6 (Six Rules)" and date released to July 15, 2012

UPDATE albums SET album_title = "Psy 6 (Six Rules)", date_released = 20120715 WHERE album_title = "Psy 6";



-- [Deleting a record]
-- Syntax: 
	-- DELETE FROM table_name WHERE condition;
	-- NOTE: Removing the WHERE clause will remove ALL ROWS in the table

-- Delete all OPM songs that are more than 4 minutes and 30second

DELETE FROM songs WHERE genre = "OPM" AND length > 430;


-- Additional info

ALTER TABLE table_name MODIFY column_name VARCHAR(50) NULL;


-- NOT NULL to NULL - safe since the intiail inputs probably has values already
-- NULL to NOT NULL - this will run into problems if there are already NULL values
-- VARCHAR to INT - problematic

ALTER TABLE table_name CHANGE old_name new_name data_type;

-- this should not affect the data within the column

-- dog_breed
-- 'chihuaha'
-- 'dalmatian'

-- #getItRightTheFirstTime



