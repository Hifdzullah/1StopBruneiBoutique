<!DOCTYPE HTML>
<html lang="en">
   <head>
<title>Children Trending</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include_once("Children.php"); ?>
   <h1><strong>Trending Now</strong></h1>
    <br>
	   <div class="container">
				<div class="mx-auto">
				  <div class="row">
					<div class="col-sm-4">
					  <img src="Landing_Page_Image/dresses box 2.jpg" style="width:260px; height:310px">
					  <button class="btn">HIJABS</button>
					</div>
					<div class="col-sm-4">
					  <img src="Landing_Page_Image/dresses box 2.jpg" style="width:260px; height:310px">
					  <button class="btn">DRESSES</button>
					</div>
					<div class="col-sm-4">      
					  <img src="Landing_Page_Image/dresses box 2.jpg" style="width:260px; height:310px">
					  <button class="btn">ACCESSORIES & JEWELLERY</button>
					</div>
					<br>
					<div class="col-sm-4" style="padding-top:50px;">  
					  <img src="Landing_Page_Image/dresses box 2.jpg" style="width:260px; height:310px">
					  <button class="btn">BOTTOMS</button>
					</div>
				  </div>
				</div>
		</div>
<?php if ( $_GET["rel"]!="page") { echo "</div>"; } ?>
<?php include_once("footer_children_page.php"); ?>

</body>

</html>