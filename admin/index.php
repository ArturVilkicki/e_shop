<?php
session_start();
if (isset($_GET['logout'])) {
        session_destroy();
        $_SESSION ['user'] = null;
}
if (isset($_SESSION['user'])) {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "shop";
	$err = "";

	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$database, charset=utf8", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected successfully"; 
    }
	catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
    }
    if (isset($_POST['submit'])) {
        if ($_FILES['image']) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
        }
        $sql = "INSERT INTO products (name, price, description, image, weight, qty) VALUES ('" . $_POST['name'] ."', '" . $_POST['price'] ."', '" . $_POST['description'] ."','" . $_FILES["image"]["name"] ."', '" . $_POST['weight'] ."', '" . $_POST['qty'] ."')";
        $request = $this->conn->prepare($sql); 
		$request->execute();

		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		//ar bandoma pasalinti irasa
    	if (isset($_GET['delete'])) {
        	//$_GET['delete'] reiksme gaunama is nuorodos
        	$sql = "DELETE FROM products WHERE id =" . $_GET['delete'];
        	$result = $request->fetchAll(PDO::FETCH_ASSOC);
        }
        $sql = "SELECT * FROM products ORDER BY id";
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        $products = [];
        $conn = null;
        include "view.php";
} else {
	header('Location: login.php');
}
?>