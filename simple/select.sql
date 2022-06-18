SELECT * 
FROM `country_language`
LEFT JOIN `countries`
    ON `country_language`.`country_id` = `countries`.`id`
LEFT JOIN `languages` 
	ON `country_language`. `language_id` = `languages`.`id`
WHERE `languages`.`name` = 'English';

-------------------

SELECT `countries`.`name` AS country_name, `languages`.`name` AS language_name
FROM `countries` 
LEFT JOIN `country_language` ON `countries`.`id` = 	`country_language`.`country_id`
LEFT JOIN `languages` ON `country_language`. `language_id` = `languages`.`id`
WHERE 1;


SELECT cities.*, countries.name AS country_name
FROM `cities` 
LEFT JOIN `countries` ON `countries`.`id` = `cities`.`country_id`
WHERE cities.population > 5000000;


SELECT countries.*, country_language.language_id
FROM `country_language` 
LEFT JOIN `countries` ON `countries`.`id` = `country_language`.`country_id`
WHERE country_language.language_id = 110;

