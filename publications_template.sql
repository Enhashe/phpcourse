USE publications;
GRANT ALL ON publications.* TO 'publications'@'localhost' IDENTIFIED BY 'vagrant';
CREATE TABLE classics (
	author VARCHAR(128),
	title VARCHAR(128),
	type VARCHAR(16),
	year CHAR(4)) ENGINE InnoDB;
ALTER TABLE classics ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY;
ALTER TABLE classics MODIFY year SMALLINT;
ALTER TABLE classics CHANGE type category VARCHAR(16);
INSERT INTO classics(author, title, type, year)
VALUES(
	'Mark Twain',
	'The Adventures of Tom Sawyer',
	'Fiction',
	'1876');
INSERT INTO classics(author, title, type, year)
VALUES(
	'Jane Austen',
	'Pride and Prejudice',
	'Fiction',
	'1811');
INSERT INTO classics(author, title, type, year)
VALUES(
	'Charles Darwin',
	'The Origin of Species',
	'Non-Fiction',
	'1856');
INSERT INTO classics(author, title, type, year)
VALUES(
	'Charles Dickens',
	'The Old Curiosity Shop',
	'Fiction',
	'1841');
INSERT INTO classics(author, title, type, year)
VALUES(
	'William Shakespeare',
	'Romeo and Juliet',
	'Play',
	'1594');
ALTER TABLE classics ADD INDEX(author(20));
ALTER TABLE classics ADD INDEX(title(20));
ALTER TABLE classics ADD INDEX(category(4));
ALTER TABLE classics ADD INDEX(year);
ALTER TABLE classics ADD INDEX(author(20));
CREATE INDEX author ON classics (author(20));
ALTER TABLE classics ADD isbn CHAR(13);
UPDATE classics SET isbn='9781598184891' WHERE year='1876';
UPDATE classics SET isbn='9780582506206' WHERE year='1811';
UPDATE classics SET isbn='9780517123201' WHERE year='1856';
UPDATE classics SET isbn='9780099533474' WHERE year='1841';
UPDATE classics SET isbn='9780192814968' WHERE year='1594';
ALTER TABLE classics ADD PRIMARY KEY(isbn);
ALTER TABLE classics ADD FULLTEXT(author,title);
UPDATE classics SET author='Mark Twain (Samuel Langhorne Clemens)' WHERE author='Mark Twain';
UPDATE classics SET category='Classic Fiction' WHERE category='Fiction';
CREATE TABLE customers (
 name VARCHAR(128),
 isbn VARCHAR(13),
 PRIMARY KEY (isbn)
) ENGINE InnoDB;
INSERT INTO customers(name,isbn) VALUES
('Joe Bloggs','9780099533474'),
('Mary Smith','9780582506206'),
('Jack Wilson','9780517123201');