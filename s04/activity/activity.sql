-- (1) Find all artists that has letter D in its name.
SELECT * FROM artists WHERE name LIKE "%d%";

-- (2) Find all songs that has a length of less than 230.
SELECT * FROM songs WHERE length <=230;


-- (3) Join the 'albums' and 'songs' tables.
-- Only show the album name, song name, and song length.
SELECT albums.album_title, songs.song_name, songs.length FROM songs
	JOIN albums ON album_id = albums.id;


/*
SELECT albums.album_title, songs.song_name, songs.length FROM albums
	JOIN songs ON album_id = songs.id;


SELECT albums.album_title, songs.song_name, songs.length FROM albums
	JOIN songs ON album_id = songs.album_id;
*/

-- (4) Join the 'artists' and 'albums' tables.
-- Find all albums that has letter A in its name.
SELECT * FROM albums
	JOIN artists ON artist_id = albums.id WHERE name LIKE "%a%";

/*
SELECT * FROM artists
	JOIN albums ON artist_id = albums.id WHERE name LIKE "%a%";

SELECT * FROM artists
	JOIN albums ON artist_id = albums.artist_id WHERE name LIKE "%a%";


*/


-- (5) Sort the albums in Z-A order.
-- Show only the first 4 records.
SELECT * FROM albums ORDER BY album_title DESC LIMIT 4;


-- (6) Join the 'albums' and 'songs' tables.
-- Sort albums from Z-A.
SELECT * FROM albums 
	JOIN songs ON albums.id = songs.album_id
ORDER BY albums.album_title DESC;



