DROP TABLE IF EXISTS crops, harvest_times, regions, crop_details;

CREATE TABLE crops
(
	id INT NOT NULL AUTO_INCREMENT KEY,
	region INT,
	harvest_time INT,
	transplant BOOLEAN
);

CREATE TABLE regions
(
	id INT NOT NULL AUTO_INCREMENT KEY,
	name VARCHAR(50)
);

CREATE TABLE harvest_times
(
	id INT NOT NULL AUTO_INCREMENT KEY,
	string_en VARCHAR(50),
	string_es VARCHAR(50)
);

CREATE TABLE crop_details
(
	id INT NOT NULL AUTO_INCREMENT KEY,
	crop_id INT,
	name_common VARCHAR(50),
	name_scientific VARCHAR(50),
	months_to_plant VARCHAR(155),
	edible_part VARCHAR(155),
	root_depth VARCHAR(155),
	sowing_method VARCHAR(155),
	plant_distance VARCHAR(155),
	row_width VARCHAR(155),
	plants_per_10m VARCHAR(155),
	germination VARCHAR(155),
	time_to_transplant VARCHAR(155),
	time_to_harvest VARCHAR(155),
	harvest_indicator VARCHAR(155),
	other VARCHAR(155)
);

INSERT INTO huertas.harvest_times (id, string_en, string_es) VALUES (1, 'Less than 90 days.', 'Menos de 90 dias.');
INSERT INTO huertas.harvest_times (id, string_en, string_es) VALUES (2, '90 to 150 days.', '90 a 150 dias.');
INSERT INTO huertas.harvest_times (id, string_en, string_es) VALUES (3, 'More tan 150 days.', 'Mas de 150 dias.');

INSERT INTO huertas.regions (id, name) VALUES (NULL, 'Nicaragua RAAN');