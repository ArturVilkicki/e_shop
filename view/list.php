<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
      <div class="divoPlotis col">			
        <h1 class="header">Shop</h1>
		  </div>  
    </div>
	</div>
	<?php
		foreach ($products as $product) {
			echo "<div class='card' style='width: 20rem;'>";
			."ID: " .$product['id']
          	."<br />"  
          	."Name: " .$product['name']
          	."<br />"   
          	."Price: " .$product['price']
          	."<br />"   
          	."Description: " .$product['description']
          	."<br />"
          	."Image: " ."<img height='50px' src='images/" .$product['image'] . "'"
          	."<br />"
          	."<br />"  
          	."Weight: ".$product['weight']
          	."<br />"  
          	."Qty: " .$product['qty']
			echo "<div>";
		}
	?>
</body>
</html>



<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>