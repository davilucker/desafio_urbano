CREATE TABLE `processos`
(
	`codigo_processo` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`pasta` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`comarca` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`uf` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	PRIMARY KEY (`codigo_processo`)
)

COLLATE='latin1_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;
