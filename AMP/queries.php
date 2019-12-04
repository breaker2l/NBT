<?php

UPDATE table_names
SET attr_1=val_1,SET attr_2=val_2,
WHERE ...;

DELETE FROM table_names WHERE ...;

INSERT INTO table_names (attr_1, ...)
VALUES (val_1,...),...;

#Alter table after
ALTER TABLE `location` 
ADD `City` VARCHAR(100) NOT NULL 
AFTER `Country`,
ADD `Street_Address` VARCHAR(100) NOT NULL 
AFTER `City`;



















?>