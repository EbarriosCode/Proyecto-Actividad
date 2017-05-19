INSERT INTO registroestudiantes(nombres,apellidos,correo,telefono,establecimiento,ipNavegador,fechaRegistro)
SELECT * FROM (SELECT 'Mafer','Herrera','marifer17te@hotmail.com','41793176','no estudio','192.168.101.1',curdate()) AS tmp
WHERE NOT EXISTS(SELECT ipNavegador FROM registroestudiantes WHERE ipNavegador='192.168.101.1') 


select current_timestamp()


-- procedimiento almacenado con transaccion para realizar una venta
DELIMITER $$
CREATE PROCEDURE sp_autenticar
(IN Usuario VARCHAR(50))
BEGIN
	 DECLARE EXIT HANDLER FOR SQLEXCEPTION
	 BEGIN
	 SHOW ERRORS LIMIT 1;
	 ROLLBACK;
	 END; 
	 
     DECLARE EXIT HANDLER FOR SQLWARNING
	 BEGIN
	 SHOW WARNINGS LIMIT 1;
	 ROLLBACK;
	 END;
		
	START TRANSACTION; 		
        SELECT @id := idUsuario FROM usuarios WHERE nombreUsuario = Usuario;
		SELECT idUsuario,acceso FROM usuarios WHERE nombreUsuario = Usuario;
		UPDATE usuarios U SET U.ultimoAcceso = current_timestamp() where U.idUsuario = @id;
		
    COMMIT; 
END $$

call sp_autenticar('ebarrios')
drop procedure sp_autenticar