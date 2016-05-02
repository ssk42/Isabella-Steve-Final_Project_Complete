<?php 	
	
	include "Common.php";
		$UserfName=$_POST["fname"];
		$UserlName=$_POST["lname"];
	
		$UserCard=$_POST["Card"];
		$UserCardN=$_POST["CardN"];
		$ExperationDateM=$_POST["EDm"];
		$ExperationDateY=$_POST["EDy"];
		
		$UserAddress=$_POST["Ad1"];
		$UserAddress2=$_POST["Ad2"];
		$UserCity=$_POST["City"];
		$UserState=$_POST["State"];
		$Userzip=$_POST["zip"];
		
		$Useremail=$_POST["Email"];
		$Userphone=$_POST["phone"];
		
		#Creates User information string
		$UserInformation=$UserlName.",".$UserfName.
		",".$UserCard.",".$UserCardN.",".
		$ExperationDateM.",".$ExperationDateY.",".$UserAddress.",".$UserAddress2.",".$UserCity.",".$UserState.",".$Userzip.",".$Useremail.",".$Userphone."\n";
			
	if (empty($UserfName)||empty($UserlName)
		||empty($UserCard)||empty($UserCardN)
		||empty($ExperationDateM)||empty($ExperationDateY)
		||empty($UserAddress)||empty($Userphone)
		||empty($UserCity)||empty($UserState)
		||empty($Userzip)||empty($Useremail)) {
		
			$submission="<br>It appears you did not submit some required information. Please try Again!
						<br>   
    					<button  id='Checkout' onClick='parent.location=\"Checkout.php\"'>Checkout</button>
    					<br>
    					<button  id='Checkout' onClick='parent.location=\"ShoppingCartViewer.php\"'>Back to Shopping Cart</button></center>
    					clearHistory();
		";
			}
	else {	
			#Opens checkout.text file	
			$checkoutfile=fopen("checkout.txt", "a");	
			file_put_contents("checkout.txt",$UserInformation,FILE_APPEND);
			$submission='<h1>Checkout complete!</h1>
									<h3>Thank You '.$UserfName.'!</h3>';		
			}

		
			
		
	?>
	<!--Calls Header from Common.php-->
	<?=$head;?>

	<!--Calls Navigation Bar from Common.php-->
	<?=$NavigationBar;?>
	<br>
	<div class="body_divs">
		<div class="checkout_form">
			<div id= 'checkout_complete'>
				<?=$submission?>
			</div>
		
		</div>
    </div>
</div><!--Calls Footer from Common.php-->
		<?=$footer;?>
  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>