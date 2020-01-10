<?php

function dbconect(){
	// Conexion Word //
	// $serverdb = "192.168.1.69";
	// $namedb = "unsubscribe";
	// $userdb = "test";
	// $passdb = "test1234..";
	
	// Conexion Home //
	$serverdb = "10.0.0.13";
	$namedb = "unsubscribe";
	$userdb = "test";
	$passdb = "test1234";
	
	try {
	$db = new PDO("sqlsrv:server=$serverdb;database=$namedb;",$userdb, $passdb);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); // Atributo para indicar que vamos a utilizar fetch en PDO.

	} catch (Exception $e) {
			// echo "Conexion fallida " . $e->getMessage();
			exit;
			// die();
	}
	return $db;
}

$db = dbconect();

// // Funcion para hacer ver los registro de la tabla.
// function select($db){
// 	$stm = $db->prepare("select * from unsubscribe.register_unsubscribe;");
// 	$stm->execute();
// 	$resul = $stm->fetchAll();
// 	return $resul;
// }

function insert($db, $email, $promotions, $comment){ 
	$stm = $db->prepare("insert into register_unsubscribe(email, promotions, comment, dateunsubscribe) values ('$email','$promotions','$comment',GETDATE())");
	$stm->execute();
}


// header("location: http://svrtest:8088/unsubscribe/thanks.html");
?>