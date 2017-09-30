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
      <div>
        <form method="GET">
        <input type="text" name="search" placeholder="ieskoti">
        <input type="submit" value="GO!">
        </form>
      </div>  
    </div>
	</div>
  <div class="container-fluid">
    <div class="row">
	       <?php
		        foreach ($products as $product) {
			       echo "<div class='col-3'>";
              echo "<div class='atitraukimai card'>";
              echo "<div class='card-body'>";
              echo "<h4 class='card-title'></h4>";
              echo "<p class='card-text'>"
              ."ID: " .$product['id']
              ."<br />"  
              ."Name: <a href='?id=".$product['id'] ."'>" .$product['name'] . "</a>" 
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
              ."Qty: " .$product['qty'];
              echo "</p>";
              echo "</div>"; 
              echo "</div>";   
              echo "</div>";    
		        }
	       ?>
     
    </div>
  </div>
  
</body>
</html>


