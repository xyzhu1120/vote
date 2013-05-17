DROP TABLE candidates;
DROP TABLE voter;
DROP TABLE votes;

CREATE TABLE candidates (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	gender TINYINT,
	description TEXT DEFAULT NULL,
	created DATETIME DEFAULT NULL
);

CREATE TABLE votes (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	candidateid INT UNSIGNED,
	voterid INT UNSIGNED,
	created DATETIME DEFAULT NULL
);

CREATE TABLE voters (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	gender TINYINT,
	created DATETIME DEFAULT NULL
);

INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
INSERT INTO candidates (name, gender, created)
	VALUES ('test',0,NOW());
