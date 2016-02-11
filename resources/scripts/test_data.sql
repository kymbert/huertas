INSERT INTO crops (id, region, harvest_time, transplant) VALUES (NULL, 1, 1, TRUE);
SET @my_id = (SELECT MAX(id) FROM crops);
INSERT INTO crop_details
(
	id,
	crop_id,
	name_common,
	name_scientific,
	months_to_plant,
	edible_part,
	root_depth,
	sowing_method,
	plant_distance,
	row_width,
	plants_per_10m,
	germination,
	time_to_transplant,
	time_to_harvest,
	harvest_indicator,
	other
)
VALUES
(
	NULL,
	@my_id,
	'Acelga',
	'Quenopodiacea',
	'Marzo, Abril',
	'Hojas',
	'Superficial',
	'Directa',
	'30 - 35 cm',
	'40 - 50 cm',
	'20 a 33',
	'6 días',
	'35 días',
	'50 - 65 días',
	'Hojas externas o planta entera',
	'28 a 33 plantas u hojas en surco de 10m (por cosecha)'
);

INSERT INTO crops (id, region, harvest_time) VALUES (NULL, 1, 2);
SET @my_id = (SELECT MAX(id) FROM crops);
INSERT INTO crop_details
(
	id,
	crop_id,
	name_common,
	name_scientific,
	months_to_plant,
	edible_part,
	root_depth,
	sowing_method,
	plant_distance,
	row_width,
	plants_per_10m,
	germination,
	time_to_transplant,
	time_to_harvest,
	harvest_indicator,
	other
)
VALUES
(
	NULL,
	@my_id,
	'Papa',
	'Solanaceae',
	'Setiembre, Febrero',
	'Raiz',
	'Media',
	'Directa',
	'30 - 35 cm',
	'70 - 80 cm',
	'30',
	'5 días',
	'0 días',
	'90 - 100 dias',
	'Papas con piel firme, no se pelan pasando el dedo. Plantas amarillean',
	NULL
);