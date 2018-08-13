<?php 
try {
	$pdo = new PDO('mysql:host=us-cdbr-iron-east-03.cleardb.net; dbname=heroku_c821f2ad1435d6d; charset=utf8','b4e0877b4d213a','536910a5f30cefe');
	 $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $pdo -> setATtribute(PDO::ATTR_EMULATE_PREPARES,false);

} catch (Exception $e) {
	die("d".$e->getMessage())	;
}
	 
		// $show = "SHOW TABLES";
		//   $rs = $pdo->query($show);
		//   $result = $rs -> fetchAll();
		//   print_r($result);
 ?>
