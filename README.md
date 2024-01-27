# achievements_web_app
#### Requires mariadb or mysql database.
#### Requires the following table:
```
CREATE TABLE achievementsid (
    id int NOT NULL AUTO_INCREMENT,
    achievements varchar(255) NOT NULL,
    completion_date DATE NOT NULL,
    status varchar(255) NOT NULL,
    PRIMARY KEY (id)
); 
```
