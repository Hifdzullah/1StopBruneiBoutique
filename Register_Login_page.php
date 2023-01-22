<!DOCTYPE HTML>
<html lang="en">
   <head>
		<title>Shopping Cart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Custom css file start here -->
		<link href="css/Register_Login.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
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
					
				</div>
				<div style="border: 1px solid; width:100%;">
						<table style="border-collapse: collapse; width: 25%; float:right; margin-top:35px; margin-right:35px;">
							<tr>
								<th><a href="index.php" style="color:#000000; font-size:15px; font-family:'Arial';">Continue Shopping</a></th>
							</tr>
						</table>
				</div>
			</div>
		 <div class="register_login_column">
		 <br>
		 <br><div class="tbl-column" style=" width:100%; height:70%">
							<table id= "tbl-about-us">
								<tr>
								<th style="color:#000000; font-size:20px; text-align:left">Login</th>		
								</tr>
								<tr>
									<td id="tbl-login">
										<form action="/action_page.php">
											<label for="email">Email:</label>
											<input type="text" id="email" name="email"><br><br>
											<label id="lbl" for="pwd">Password:</label>
											<input type="text" id="pwd" name="password"><br><br>
											<a href ="#" style="color:#000000">Forgot Password?</a>
											<br>
											<button id="btn" type="button">Login</button>
										</form>
									</td>
								</tr>
							</table>	
							<table id= "tbl-about-other">
								<tr>
									<th style="color:#000000; font-size:20px; text-align:left;">Register</th>
								<tr>			
									<td id="tbl-register">
										<form action="/action_page.php">
											<label id="lbl" for="email">Email:</label>
											<input type="text" id="email" name="email"><br><br>
											<label id="lbl" for="pwd">Password:</label>
											<input type="text" id="pwd" name="password"><br><br>
											<a href ="#" style="color:#000000">Forgot Password?</a>
											<br>
											<button id="btn" type="button">Register</button>
										</form>
									</td>
								</tr>
							</table>							
					</div>
		 </div>
    </body>
</html>