
-- members
CREATE TABLE `dbtest`.`members` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(30) NOT NULL,
    `mobile` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `members` (`id`, `name`, `mobile`) VALUES (NULL, '梁朝偉', '0933-333-333');
INSERT INTO `members` (`id`, `name`, `mobile`) VALUES (NULL, '金秀賢', '0922-222-222');