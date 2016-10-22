CREATE DATABASE market;
GRANT ALL ON market.* TO 'market'@'localhost' IDENTIFIED BY 'MarketPass';
USE market;
CREATE TABLE category(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	title VARCHAR(128) NOT NULL,
	description VARCHAR(256)) ENGINE InnoDB;
INSERT INTO category (title, description)
VALUES (
	'Weapon',
	'Various weapons');
INSERT INTO category (title, description)
VALUES (
	'Chest',
	'Protects your chest');
INSERT INTO category (title, description)
VALUES (
	'Hands',
	'Dont loose your hands');
INSERT INTO category (title, description)
VALUES (
	'Head',
	'Protects your head');
INSERT INTO category (title, description)
VALUES (
	'Legs',
	'Move your legs as you need');
CREATE TABLE product (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	title VARCHAR(128) NOT NULL,
	description VARCHAR(256),
	image LONGBLOB,
	price FLOAT(10) NOT NULL) ENGINE InnoDB;
INSERT INTO product (title, decription, price)
VALUES (
	'DragonSlash',
	'This swords guard strongly resembles a pair of bird wings. Its grip is formed like a minotaur holding a topaz.',
	'73,50');
INSERT INTO product (title, decription, price)
VALUES (
	'Blightpiercer',
	'This spears blade is pyramid-shaped. Its grip is formed like a knight clutching a skull.',
	'20');
INSERT INTO product (title, decription, price)
VALUES (
	'Bracer of Fire Shields',
	'This set of bracers was created as an experiment. It was made to be used by warlords and is inset with tigerseye. The buckles are inset with sapphires. It can conjure up hundreds of lights.',
	'32,60');
INSERT INTO product (title, decription, price)
VALUES (
	'Charismatic Helm of Ether Touches',
	'It was made to be used by bards and is inset with tigerseye. The buckles are inset with agate. It enhances the owners speed.',
	'11,99');
INSERT INTO product (title, decription, price)
VALUES (
	'Bears Breast Plate',
	'This breastplate is traditionally used by healers and seems made entirely of stone. It enhances the owners endurance. It requires periodic sacrifices, or it will vanish.',
	'50,11');
INSERT INTO product (title, decription, price)
VALUES (
	'Greaves of the Haunted Rite',
	'This pair of greaves was created to avert a disaster and is jet black. The buckles are inlaid with copper. It can turn good creatures evil.',
	'23,93');