<!-- mysql.kimminseok.info -->ssssssssss
<!--http://sdhs.digitech.wiki/htdocs/db.php-->
<?php
    try{
        $pdo = new PDO("mysql:host=127.0.0.1; dbname=sdhsdb; charset=utf8;" , "root" , "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $Exception){
        die("연결실패".$Exception->getMessage());
    }
?>