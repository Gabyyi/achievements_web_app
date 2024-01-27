SET @num := 0;
UPDATE database.achievements SET id = @num := (@num+1);
ALTER TABLE database.achievements AUTO_INCREMENT = 1;

