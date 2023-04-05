CREATE TABLE `game_type` (
	`game_no`	INT	NOT NULL,
	`game_genre`	VARCHAR(25)	NOT NULL,
	`game_open`	date	NOT NULL,
	`game_close`	date	NOT NULL,
	`game_flatform`	CHAR(1)	NULL,
	`game_name`	VARCHAR(100)	NULL
);

CREATE TABLE `game_rank` (
	`game_no`	INT	NOT NULL,
	`game_rank_no`	INT	NOT NULL
);

ALTER TABLE `game_type` ADD CONSTRAINT `PK_GAME_TYPE` PRIMARY KEY (
	`game_no`
);

ALTER TABLE `game_rank` ADD CONSTRAINT `PK_GAME_RANK` PRIMARY KEY (
	`game_no`
);

ALTER TABLE `game_rank` ADD CONSTRAINT `FK_game_type_TO_game_rank_1` FOREIGN KEY (
	`game_no`
)
REFERENCES `game_type` (
	`game_no`
);

