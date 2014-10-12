DELIMITER $$

CREATE
    /*[DEFINER = { user | CURRENT_USER }]*/
    TRIGGER `simdik_akad`.`auto_delete_user` AFTER DELETE
    ON `simdik_akad`.`mast_user`
    FOR EACH ROW BEGIN
	DELETE FROM sys_level_akses WHERE id_user = old.id_user
    END$$

DELIMITER ;