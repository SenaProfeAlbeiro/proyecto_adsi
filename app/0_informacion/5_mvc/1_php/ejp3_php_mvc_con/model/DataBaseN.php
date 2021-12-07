<?php 

	class DataBase {

		public static function conexion(){
			$pdo = new PDO('mysql:host=br1yj1gpvqgd7aaftjxd-mysql.services.clever-cloud.com;dbname=br1yj1gpvqgd7aaftjxd;charset=utf8', 'uwup34oaojxkqt0f', 'iwmTNoBNidbmb1m9Ndvg');
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        	return $pdo;
		}
	}

?>