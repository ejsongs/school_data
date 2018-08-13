<?php
    include "../db/db.php";
    $select = "select * from menu"; 
    $rs = $pdo -> query($select);    
    $menulist = $rs -> fetchAll();
    echo json_encode($menulist, JSON_PRETTY_PRINT);
?>