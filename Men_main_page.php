<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Men</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Custom css file start here -->
		<link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
	</head>
<body>
<?php include_once("Men.php"); ?>

<div class="about-page page">
   <h1><strong>Sales<strong></h1>
	<br>
	   <div class="container">
				<div class="mx-auto">
				  <div class="row">
					<div class="col-sm-4">
					<a href="Men_Product_details.php">
					   <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					</a>			
					  <button class="btn">ADD TO CART</button>
					</div>
					<div class="col-sm-4">
					<a href="Men_Product_details.php">
					   <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					</a>
					   <button class="btn">ADD TO CART</button>
					</div>
					<div class="col-sm-4">      
					  <a href="Men_Product_details.php">
					   <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					</a>
					   <button class="btn">ADD TO CART</button>
					</div>
					<br>
					<div class="col-sm-4" style="padding-top:50px;">  
					 <a href="Men_Product_details.php">
					   <img src="Men_Page_Image/mibboxone.jpg" style="width:260px; height:310px">
					</a>
					  <button class="btn">ADD TO CART</button>
					</div>
				  </div>
				</div>
		</div>
</div>

<?php if ( $_GET["rel"]!="page") { echo "</div>";

?>
    <div id="column-info-footer">
		<div id="column-info">
		<hr id= "line-seperator">
			<h1 style="color:#000000">Our Local Boutiques</h1>
				<div class="tbl-column" style=" width:100%; height:70%">
						<table id= "tbl-info">
							<tr>
								<td id="td-info">Merzlin Boutique</td>
								<td id="td-info">Bruneian Boutique</td>
								<td id="td-info">Dainty Boutique</td>
								<td id="td-info">Mudasser</td>
								<td id="td-info">Teluk Belanga Begawan</td>
							</tr>
								<td id="td-info">Barakah Tijrah Boutique</td>
								<td id="td-info">Mumtaz Collection Hijab Boutique</td>
							</tr>
						</table>
				</div>
		</div>
		<br>
		</br>
				<hr id= "line-seperator">
				<div id="main-footer">
					<div class="tbl-column" style=" width:100%; height:70%">
							<table id= "tbl-about-us">
								<tr>
								<th style="color:#000000; font-size:20px">1Stop Brunei Boutiques</th>		
								</tr>
								<tr>
									<td id="td-about-us-info">Your one stop to Brunei???s local boutiques platform, we provides you with wide 
									ranges of local designs, unique fashionable apparel and accessories.</td>
								</tr>
							</table>	
							<table id= "tbl-about-other">
								<tr>
									<th style="color:#000000; font-size:20px">We accept</th>		
									<th style="color:#000000; font-size:20px">Customer Services</th>
									<th style="color:#000000; font-size:20px">Help and Support</th>
								</tr>
								<tr>			
									<td id="tbl-about-other-info"><img id="payment-logo" src="img/mastercard.png" alt="mastercard"></td>
									<td id="tbl-about-other-info"><a class='link' href="">Contact Us</a></td>
									<td id="tbl-about-other-info"><a class='link' href="">How To Buy</a></td>
								</tr>
								<tr>
								
									<td id="tbl-about-other-info"><img id="payment-logo" src="img/paypall.png" alt="Paypall"></td>
									<td id="tbl-about-other-info"><a class='link' href="">F.A.Q</a></td>
									<td id="tbl-about-other-info"><a class='link' href="">Shipping Info</a></td>
								</tr>
								<tr>
									<td id="tbl-about-other-info"></p></td>
									<td id="tbl-about-other-info"><a class='link' href="">Order Tracking</a></td>								
									<td id="tbl-about-other-info"><a class='link' href="">Return</a></td>
								</tr>
							</table>							
					</div>
				</div>	
				<p class="web-name">2023 1Stop Brunei Boutique</p>
	</div>	
<?php include_once("footer_men_page.php"); 
 } 

 ?>

</body>
</html>
