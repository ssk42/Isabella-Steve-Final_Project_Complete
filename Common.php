
<?php
	$head='
	<!DOCTYPE html>
	<html>
		<!--
		Final Project
		-->
		
		<head>
			<title>OnlineGroceryStore</title>
			
			<meta charset="utf-8" />
		
			<link href="HomePage.css" type="text/css" rel="stylesheet" />
			<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet" type="text/css">
			<script src="ShoppingCart.js"></script>
			
		</head>
	
		<body>
				<div id="header">
				<h1>
				Welcome to My Online Grocery Store
				</h1>
				</div>';

			$NavigationBar='
				<div class="DivNav">        
		            <ul id="Nav_Bar">
		                <li><a href="HomePage.php">Home</a></li>
		                <li><a href="About_Us.php">About Us</a></li>

		                <li><a href="ShippingInfo.php">Shipping Info</a></li>
		                <li><a href="Grocery.php">Grocery</a></li>
		              	<li><a href="ContactUs.php">Contact us</a></li>
		            </ul> 
		                
		        </div>';
		    $GroceryNavBar='
		    	<br>
	<div class="Grocery_div"> 
		<div class="left_div">
			<ul id="Grocery_Navbar">
			  <li><a class="active" href="Grocery.php">Grocery</a></li>
			  <li><a href="Dairy.php">Dairy & Eggs</a></li>
			  <li><a href="Frozen.php">Frozen</a></li>
			  <li><a href="Produce.php">Produce</a></li>
			  <li><a href="Meat_Seafood.php">Deli</a></li>
			  <li><a href="Dry_Foods.php">Dry Foods</a></li> 
			  <li><a href="ShoppingCartViewer.php">My Shopping Cart</a></li>
			</ul></div>
		';
		     $ShoppingCartViewer='

		     		<table id= "ShoppingCartTable" cellpadding="4" cellspacing="4" border="1">
		     			<strong id="title">Your Items Selected</strong>
					    <tr>
					        <td valign="top">
					            <table cellpadding="4" cellspacing="4" border="1" id="orderedProductsTbl">
					                <thead>
					                    <tr>
					                        <td>
					                            Name
					                        </td>
					              
					                        <td>
					                            Price
					                        </td>
					                    </tr>
					                </thead>
					                <tbody id="orderedProductsTblBody">

					                </tbody>
					                <tfoot>
					                    <tr>
					                        <td colspan="2" align="right" id="cart_total">

					                        </td>
					                    </tr>
					                </tfoot>
					            </table>
					        </td>
					    </tr>
					</table>'
					;

			$footer='

				<div id=footer>
					<span>
						Copyright © OnlineGroceryStore Inc.<br>
					    <a href="Terms_Conditions.php"> Terms & Conditions
						</a>
					</span>				
				</div>';
	
$htmlcloser='
		</body>
		</html>';
?>