<?php
include_once "class/Database.php";
include_once "class/Product.php";
if (isset($_GET['search'])&& $_GET['search'] !=null) {
	$products = Product::search($_GET['search']);
} else {
	$products = Product::get_all();
}
if (isset($_GET['id'])&& $_GET['id'] !=null) {
	$products = Product::get($_GET['id']);
	include "view/single.php";
} else {
	include "view/list.php";
}
/*
$db = new Database();
$products = $db->select_array("SELECT * FROM products");
*/

//$products = Product::get_all();
//$products = Product::get(4);
//$products = Product::search("ira");
//$random_products = Product::random_products(4);

//include "view/list.php";
?>