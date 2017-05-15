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
INSERT INTO registroestudiantes(nombres,apellidos,correo,telefono,establecimiento,ipNavegador,fechaRegistro)
VALUES('Mafer','Herrera','marifer17te@hotmail.com','41793176','no estudio','192.168.101.1',curdate())


WHERE (SELECT DISTINCT ipNavegador FROM registroestudiantes WHERE ipNavegador='192.168.101.1') 