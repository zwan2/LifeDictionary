CREATE TABLE categories (
	id int(11) NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE information (
	id int(11) NOT NULL AUTO_INCREMENT,
	category_id int(11) default 0,
	title VARCHAR(40) NOT NULL,
	content VARCHAR(255) NOT NULL,
	image TEXT,
	PRIMARY KEY (id)
);

