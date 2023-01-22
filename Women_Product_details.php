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
      <title>Women Product Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom css file start here -->
<link href="css/WomenPage.css" rel="stylesheet" type="text/css" media="all" />
<!-- Third party css library start here -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="css/Product_details.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">

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
								<th><i class="material-icons" style="font-size:30px; color:black; float:right; " ><a href ="Shopping_cart.php" style="color:#000000">shopping_cart</a></i></th>
								<th><i class="material-icons" style="font-size:30px; color:black; float:right;" >
									<div class="dropdown">
										<a id="my-dropdown" style="color:black;" href="#" data-toggle="dropdown">account_circle</a>
											<ul class="dropdown-menu">
												<li><a href="Register_Login_page.php" style="font-size:13px; color:black; float:left;">REGISTER / LOGIN</a></li>
												<li><a href="#" style="font-size:13px; color:black; float:left;" >MY ORDER</a></li>
											</ul>
									</div>
								</th>
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
			  <a class="actinav" href="#Men-page">Women</a>
			  <a href="Men_main_page.php">Men</a>
			  <a href="Children_main_page.php">Children</a>
		</div>
		<!-- Navigation-->
		   <main class="container">

      <div class="container">
        <div class="left-column-1">
        <!-- Product Description -->
        <div class="product-configuration">
          <!-- Product Color -->
          <div class="product-color-1">
            <img src="Landing_Page_Image/hijab box 1.jpg" style={{ height="380px" }} />
          </div>
        </div>
		<br> 
      </div>
	  
      <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
          <h1>Women Hijab Chiffon</h1>
        </div>
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color:</span><p>Dark Blue</p>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>
          </div>
          <!-- Size Option-->
          <div class="size-config">
            <span>Size</span>

            <div class="size-choose">
              <button>S</button>
              <button>L</button>
              <button>XL</button>
            </div>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>$20.00</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
	  </div>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    
		
<?php 
   }

	?>
    </body>
</html>