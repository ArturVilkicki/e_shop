<?php
include_once "class/Database.php";

$db = new Database();
$db->select("SELECT*FROM products");
$fields = ["id", "name", "price", "description", "weight", "qty"];
$values = ["29", "padangos", "100", "bridgestone", "2000", "3"];
$db->insert_hard("products", $fields, $values);
$products=[];
include "view/list.php";
?>