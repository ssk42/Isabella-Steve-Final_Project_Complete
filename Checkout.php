	<?php 	
		//Calls Common.php
		include "Common.php";

	?>
	<!--Calls Header from Common.php-->
	<?=$head;?>

	<!--Calls Navigation Bar from Common.php-->
	<?=$NavigationBar;?>
	<br>
	<div class="body_divs">
	<div class="checkout_form">
					
	

	<!--"signup-submit.php"-->
	<form action='Checkout_Complete.php' method="post">
		<h3>Credit or Debit Card Information</h3>
		<p class="form_p">
			
			<label class="inline_right" for "fname"></label>
			<input id="fname" type="text" name="fname" maxlength="16">
		</p>
		<p class="form_p">

			<label class="inline_right" for "lname">Last Name:</label>
			<input id="lname" type="text" name="lname" maxlength="16">
		</p>
		<p class="form_p">
  			<label class="inline_right" for "Card">Card Type:</label>
  			<select id="Card" name="Card"><option>Master Card</option>
  							<option>Visa</option>
  							<option>Discover</option>
  							<option>American Express</option>
  							<option>PayPal</option>
  			</select><br>
  		</p>
		<p class="form_p">
  			<label class="inline_right" for "CardN">Card Number:</label>
			<input id="CardN" type="text" name="CardN" size="6" maxlength="16">
		</p>
		<p class="form_p">
			<label class="inline_right" for id="ED">Experation Date:</label>
  			<input id="EDm" type="text" name="EDm" size="6" maxlength="2">/
  			<input id="EDy" type="text" name="EDy" size="6" maxlength="2">(mm/yy)
  		</p>
  		<h3>Billing Address</h3>
		<p class="form_p">
			<label class="inline_right" for "Ad1">Address 1:</label>
			<input id="Ad1" type="text" name="Ad1" maxlength="16">
		</p>
		<p class="form_p">
			<label class="inline_right" for "Ad2">Address 2:</label>
			<input id="Ad2" type="text" name="Ad2" maxlength="16">
		</p>
		<p class="form_p">
			<label class="inline_right" for "City">City:</label>
			<input id="City" type="text" name="City" maxlength="16">
		</p>
		<p class="form_p">
  			<label class="inline_right" for "State">State:</label>
  			<select id="State" name="State">
  							<?php
							$State_List = fopen("Products/States.txt","r");
							while (!feof($State_List)) {
								$State_line = fgets($State_List);
							
								
								$State='<option>'.$State_line.'</option>';
								echo $State;

							}fclose($State_List);
						?>
  			</select><br>
  		</p>
		<p>
  			<label class="inline_right" for "zip">Zip:</label>
			<input id="zip" type="text" name="zip" size="6" maxlength="9">(5 or 9 characters)
		</p>
		<h3>Contact Information</h3>
		<p>
		<label class="inline_right" for "Email">Email:</label>
		<input id="Email" type="text" name="Email" maxlength="25">
  		</p>
		<p>
		<label class="inline_right" for "phone">Home Telephone:</label>
		<input id="phone" type="text" name="phone" maxlength="25">
  		</p>
		<p>
  			<input id="submit" type="submit" value="Submit Order">
  		</p>
  	</form>
		<!--Calls Footer from Common.php-->
		</div>
    </div>
</div>
		<?=$footer;?>
  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>