CREATE DATABASE `GAME` /*!40100 COLLATE 'utf8_general_ci' */

CREATE TABLE game_info (
	game_no INT PRIMARY KEY auto_increment
	,game_genre VARCHAR(25) NOT NULL 
	,game_open DATE NOT NULL 
	,game_close DATE
	,game_flatform CHAR(1) NOT NULL
	,game_name VARCHAR(100) NOT NULL
);

CREATE TABLE game_rank (
	game_no INT PRIMARY KEY   
	,game_rank_no VARCHAR(35) NOT NULL 
);


ALTER TABLE game_info MODIFY game_flatform CHAR(1) NOT NULL;

ALTER TABLE game_info ADD COLUMN game_name VARCHAR(100) NOT NULL;

ALTER TABLE game_rank MODIFY game_rank_no INT NOT NULL;