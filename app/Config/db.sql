CREATE TABLE candidates (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	gender CHAR(2),
	created DATETIME DEFAULT NULL
);

INSERT INTO candidates (name, gender, created)
	VALUES ('test','男',NOW());
