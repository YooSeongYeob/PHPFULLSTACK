 INSERT INTO game_info (
	game_genre
	,game_open
	,game_close
	,game_flatform
	,game_name
 )
 VALUES (
	'mmorpg'
	,DATE(20140507)
	,DATE(99990101)
	,'P'
	,'검은사막'
 );	
	
	
	
INSERT INTO game_info (
	game_genre
	,game_open
	,game_close
	,game_flatform
	,game_name
)
VALUES (
	'mmorpg'
	,DATE(20170812)
	,DATE (NULL)
	,'P'
	,'로스트아크'
);	



INSERT INTO game_info (
	game_genre
	,game_open
	,game_close
	,game_flatform
	,game_name
)
VALUES (
	'mmorpg'
	,DATE(20081207)
	,DATE (NULL)
	,'P'
	,'월드오브워크래프트'
);	

INSERT INTO game_info (
	game_genre
	,game_open
	,game_close
	,game_flatform
	,game_name
)
VALUES (
	'sports'
	,DATE(20180317)
	,DATE (NULL)
	,'P'
	,'피파온라인4'
)
, (
	'FPS'
	,DATE(20180317)
	,DATE (NULL)
	,'P'
	,'발로란트'
);	


INSERT INTO game_rank (
	game_no 
	,game_rank_no
)
VALUES(
	1
	,1
);


INSERT INTO game_rank (
	game_no 
	,game_rank_no
)
VALUES(
	2
	,3
)
,(
	3
	,4
)
,(
	4
	,5
)
,(
	5
	,2
);











-- dcl tcl = 트랜잭션
-- 
-- UPDATE game_info SET game_close = NULL WHERE game_no = 1;
-- 
-- UPDATE
-- 	game_info
-- SET 
-- 	game_open = DATE(20000101)
-- 	, game_flatform = 'F'
-- WHERE
-- 	game_no = 3 OR game_no = 5;
-- 	
-- DELETE FROM game_info WHERE game_no = 2;
-- 
-- 
-- SELECT *
-- FROM game_info;
-- 
-- 	
-- TRUNCATE game_info;