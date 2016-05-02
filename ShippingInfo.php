	<?php 	
		//Calls Common.php
		include "Common.php";
	?>
	<!--Calls Header from Common.php-->
	<?=$head;?>

	<!--Calls Navigation Bar from Common.php-->
	<?=$NavigationBar;?>
	<br>
	<div class="body_div">
		<div class="innerdiv">
			
			<p>
	
			<h2>Shipping Info</h2>
				<p>
				Large orders are usually shipped by FedEx Home Delivery or FedEx Ground (for business addresses). Smaller orders may be sent by USPS Priority Mail.
				APO and FPO orders may only be shipped though the United States Postal Service.
				MyOnlineGroceryStore reserves the right to choose the delivery method that best fits your order.</p>

			<h3>FedEx Home Delivery</h3>
				<p>FedEx Home Delivery serves 100 percent of residential addresses even on Saturdays at no additional charge.  
				Packages are delivered within 1 to 5 business days, Tuesday through Saturday.   
				FedEx Home Delivery does not deliver on Sundays or Mondays.</p>

			<h3>FedEx Ground Delivery</h3>
				<p>FedEx Ground Delivery serves commercial addresses only. 
				Packages are delivered within 1 to 5 business days, Monday through Friday. 
				FedEx Ground Delivery does not deliver on Saturdays or Sundays.</p>
			</p>

			
		</div>
		<!--Calls Footer from Common.php-->
		
    </div>
    <div class="shippingmap"> <img src="images/ShippingMap.gif"></div>
		<?=$footer;?>
  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>