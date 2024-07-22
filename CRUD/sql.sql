-- 建立資料表
CREATE TABLE `test0722`.`students` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- 查詢
SELECT * FROM `students`

-- add
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'fff', '0944-444-444');
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'eee', '0955-555-555');
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'fff', '0966-666-666');
INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'ggg', '0977-777-777');