SET @num := 0;
UPDATE website_database.achievementsid SET id = @num := (@num+1);
ALTER TABLE website_database.achievementsid AUTO_INCREMENT = 1;

