<?php
include_once "class/Database.php";
class Product {

	
	public static function get_all(){
		$db = new Database();
		$products = $db->select_array("SELECT * FROM products");
		return $products;
	}

	public static function get($id){
		$db = new Database();
		$products = $db->select_array("SELECT * FROM products WHERE id = " .$id);
		return $products;
	}
	public static function search($query){
		$db = new Database();
		$products = $db->select_array("SELECT * FROM products WHERE name LIKE '%" .$query ."%'");
		return $products;
	}
	public static function search_2($query){
		$query = strtolower($query);
		$db = new Database();
		$results_by_name = $db->select_array("SELECT * FROM products WHERE LOWER(name) LIKE '%" .$query ."%'");
		$result_by_description = $db->select_array("SELECT * FROM products WHERE LOWER(description) LIKE '%" .$query ."%'");
		return array_merge($results_by_name,$result_by_description);
	}
	
}

?>