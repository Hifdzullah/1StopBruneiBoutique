<!DOCTYPE HTML>
<html lang="en">
   <head>
<title>Men Trending</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include_once("Men.php"); ?>
   <h1><strong>Trending Now</strong></h1>
    <br>
	   <div class="container">
				<div class="mx-auto">
				  <div class="row">
					<div class="col-sm-4">
					  <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					  <button class="btn">ADD TO CART</button>
					</div>
					<div class="col-sm-4">
					  <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					<button class="btn">ADD TO CART</button>
					</div>
					<div class="col-sm-4">      
					  <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					  <button class="btn">ADD TO CART</button>
					</div>
					<br>
					<div class="col-sm-4" style="padding-top:50px;">  
					  <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					  <button class="btn">ADD TO CART</button>
					</div>
				  </div>
				</div>
		</div>
<?php if ( $_GET["rel"]!="page") { echo "</div>"; } ?>
<?php include_once("footer_men_page"); ?>

</body>

</html>