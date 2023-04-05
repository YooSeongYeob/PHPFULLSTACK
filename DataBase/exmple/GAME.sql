CREATE TABLE `game_type` (
	`g_number`	VARCHAR(15)	NOT NULL,
	`mmorpg`	VARCHAR(25)	NOT NULL,
	`sports`	VARCHAR(20)	NOT NULL,
	`fps`	VARCHAR(20)	NOT NULL,
	`moba`	VARCHAR(30)	NULL,
	`rts`	VARCHAR(20)	NOT NULL
);

CREATE TABLE `game_rank` (
	`g_number`	VARCHAR(15)	NOT NULL,
	`game_rank`	VARCHAR(150)	NOT NULL
);

ALTER TABLE `game_type` ADD CONSTRAINT `PK_GAME_TYPE` PRIMARY KEY (
	`g_number`
);

ALTER TABLE `game_rank` ADD CONSTRAINT `PK_GAME_RANK` PRIMARY KEY (
	`g_number`
);

ALTER TABLE `game_rank` ADD CONSTRAINT `FK_game_type_TO_game_rank_1` FOREIGN KEY (
	`g_number`
)
REFERENCES `game_type` (
	`g_number`
);

