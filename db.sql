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


CREATE TABLE comment(
	id int(7) NOT NULL AUTO_INCREMENT,
	info_id int(5) NOT NULL,
	comment VARCHAR(50) NOT NULL,
	user_ip varchar(20) NOT NULL,
	input_time datetime DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
);