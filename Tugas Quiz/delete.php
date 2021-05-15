<?php

require "config.php";

$get_id = $_GET['id'];
$data = "DELETE FROM login WHERE id=:id";
$statement = $connection->prepare($data);

if ($statement->execute([":id" => $get_id])){
    header("Location: http://localhost/praktikum/PR06/show.php");
}
