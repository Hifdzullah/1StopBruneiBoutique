<?php
   ini_set("error_reporting", 1);
   header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
   header("Cache-Control: pre-check=0, post-check=0", false);
   header("Pragma: no-cache");
   
   
   if ( $_GET["rel"]!="page") {
?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <title>Children</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom css file start here -->
<link href="css/WomenPage.css" rel="stylesheet" type="text/css" media="all" />
<!-- Third party css library start here -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
* {box-sizing: border-box;}

.sldi {display: none;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  font-family: 'Arial', Helvetica, sans-serif;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.sldi{display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
  </head>
    <body>
        <div class="border">
				<!--outter-->
				<div style="width:100%; display: flex; justify-content: center;">
			    <!--outter-->
					<!--inner-->
					<!---div right-->
					<div style="border: 0px solid; width:25%;">
					</div>
					<!---div right-->
					<div style="border: 0px solid; width:50%;"><h1>1Stop Brunei Boutique</h1>
					</div>
					<!---div left-->
					<div style="border: 0px solid; width:25%;">
						<table style=" border-collapse: collapse; width: 50%; float:right; margin-top:35px; margin-right:35px;">
							<tr>
								<th><i class="material-icons" style="font-size:30px; color:black; float:right; cursor: pointer; " ><a href ="Shopping_cart.php" style="color:#000000">shopping_cart</a></i></th>
								<th><i class="material-icons" style="font-size:30px; color:black; float:right; cursor: pointer;" >
								<div class="dropdown">
									<a id="my-dropdown" style="color:black;" href="#" data-toggle="dropdown">account_circle</a>
										<ul class="dropdown-menu">
											<li><a href="Register_Login_page.php" style="font-size:13px; color:black; float:left;">REGISTER / LOGIN</a></li>
											<li><a href="#" style="font-size:13px; color:black; float:left;" >MY ORDER</a></li>
										</ul>
								</div>
								<a href="Register_Login_page.php" class="dropdown-menu" style="color:#000000">account_circle</a></i></th>
								<th><i class="fa fa-heart-o" style="font-size:30px; color:black; float:right; cursor: pointer;"></i></th>
							</tr>
						</table>
					</div>
					<!---div left-->
					<!--inner-->
		      </div>
	    </div>
		<!-- Search bar -->
		<div class= "search-container" style="margin-right:35px; float:right;">
			<form action="/action_page.php">
				 <input type="text" placeholder="Search.." name="search">
				 <button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<!-- Search bar -->
		
		<!-- Navigation-->
		<div class="topnav">
			  <a href="index.php">Women</a>
			  <a href="Men_main_page.php">Men</a>
			  <a class="actinav" href="#Children-page">Children</a>
		</div>
		<!-- Navigation-->
		
		<!--Slideshow-->
		  <div class="mx-auto">
			<div class="slideshow-container">
			<br>
			</br>
				 <button class="btn">SHOP NOW</button>
				  <img src="Children_Page_Image/Children_banner.png" style="width:100%">
				  <div class="text">Caption Text</div>
			<!--Slideshow-->
			<br>
			</br>		
			</div>
		</div
		
		<!--Main body-->
		<br></br>
		<br></br>
		<div class="h2_container">
			<h2 class ="custom_h2">SHOP BY CATEGORY</h2>
        </div>
		<br></br>
		<br></br>
		<div class="container">
			<div class="mx-auto">
			  <div class="row">
				<div class="col-sm-4">
				  <img src="Children_Page_Image/Children box 1.jpg" style="width:260px; height:310px">
				  <button class="btn"><a style="color:#000000" href="Children_main_category.php">TOODLER BOY(4-7yrs)</a></button>
				
				</div>
				<div class="col-sm-4">
				  <img src="Children_Page_Image/girl.jpg" style="width:260px; height:310px">
				  <button class="btn">TOODER GIRL(4-7yrs)</button>
				</div>
				<div class="col-sm-4">      
				  <img src="Children_Page_Image/boys.jpg" style="width:260px; height:310px">
				  <button class="btn">BOY</button>
				</div>
				<br>
				<div class="col-sm-4" style="padding-top:50px;">  
				  <img src="Children_Page_Image/girls.jpg" style="width:260px; height:310px">
				  <button class="btn">GIRL</button>
				</div>
			  </div>
			</div>
		</div>
		
		 <div id="body" style=" padding-bottom:50px;" >
		<div class="menu-1">
		  <a href ="Children_main_page.php" rel="page">Sales</button>
		  <a href="Children_trending.php" rel="page">Trending Now</a>
		  <a href="Children_new_arrival.php" rel="page">New Arrival</a>
		</div>
			<div id="load">
		
<?php 
   }

	?>
    </body>
</html>
