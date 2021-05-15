<?php
$DBHOSTNAME = "mysql:host=localhost;dbname=login";
$UDB = "root";
$PDB = "";

try {
    $connection = new PDO($DBHOSTNAME, $UDB, $PDB);
}catch (PDOException $exception){
    var_dump("DB Error dengan kode" . $exception->getMessage());
}
