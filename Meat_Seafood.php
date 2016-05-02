	<?php 	
		//Calls Common.php
		include "Common.php";
	?>
	<!--Calls Header from Common.php-->
	<?=$head;?>

	<!--Calls Navigation Bar from Common.php-->
	<?=$NavigationBar;?>
	<?=$GroceryNavBar;?>

		<div class="Grocery_buttons">
			<center>
				<button  id="See_Meats" onclick="See_Meats()">Meats</button> 
				<button  id="See_Seafood" onclick="See_Seafood()">Seafood</button>
			</center>
		</div>
		
		<script type="text/javascript">
			function See_Meats() {
				document.getElementById('hidden_seafood').style = "display: none;";
				document.getElementById('hidden_meats').style = "display: block;";
			};
			function See_Seafood(){
					document.getElementById('hidden_seafood').style = "display: block;";
					document.getElementById('hidden_meats').style = "display: none;";
			};
				
		</script>
			<div class="right_div">
			<div id="hidden_meats">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Meats_List = fopen("Products/Meats.txt","r");
							while (!feof($Meats_List)) {
								$Meats_line = fgets($Meats_List);
								$Meats_Array = explode(",", $Meats_line);

								$Meats_Origin1=$Meats_Array[0];
								$Meats_Name1=$Meats_Array[1];
								$Meats_Img1=str_replace(" ", "_",$Meats_Name1);
								$Meats_Price1=$Meats_Array[2];
								$Meats_Note1=$Meats_Array[3];

								$Meats_Name1_NoSpace=str_replace(" ", "",$Meats_Name1);
								$Meats_Price1_NoDolla=str_replace("$","",$Meats_Price1);


								$Meats_Origin2=$Meats_Array[4];
								$Meats_Name2=$Meats_Array[5];
								$Meats_Img2=str_replace(" ", "_",$Meats_Name2);
								$Meats_Price2=$Meats_Array[6];
								$Meats_Note2=$Meats_Array[7];

								$Meats_Name2_NoSpace=str_replace(" ", "",$Meats_Name2);
								$Meats_Price2_NoDolla=str_replace("$","",$Meats_Price2);

								if (file_exists("images/Deli/Meats/".$Meats_Img1.".jpg")) {
									$image= '<img src="images/Deli/Meats/'.$Meats_Img1.'.jpg" alt="'.$Meats_Img1.'" id="'.$Meats_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Meats_Name1_NoSpace.'\','.'\''.$Meats_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Deli/Meats/".$Meats_Img2.".jpg")) {
									$image2= '<img src="images/Deli/Meats/'.$Meats_Img2.'.jpg" alt="'.$Meats_Img2.'" id="'.$Meats_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Meats_Name2_NoSpace.'\','.'\''.$Meats_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Meats_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Meats_Origin1.'
									</p>
									<p class="name">
										'.$Meats_Name1.'
									</p>
									<p class="Price">
										'.$Meats_Price1.'
									</p>
									<p class="note">
										'.$Meats_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Meats_Origin2.'
									</p>
									<p class="name">
										'.$Meats_Name2.'
									</p>
									<p class="Price">
										'.$Meats_Price2.'
									</p>
									<p class="note">
										'.$Meats_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Meats_Information;


							}fclose($Meats_List);
						?>
					</table>
				</div>
			</div>	
	
			<div id="hidden_seafood">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Seafood_List = fopen("Products/Seafood.txt","r");
							while (!feof($Seafood_List)) {
								$Seafood_line = fgets($Seafood_List);
								$Seafood_Array = explode(",", $Seafood_line);

								$Seafood_Origin1=$Seafood_Array[0];
								$Seafood_Name1=$Seafood_Array[1];
								$Seafood_Img1=str_replace(" ", "_",$Seafood_Name1);
								$Seafood_Price1=$Seafood_Array[2];
								$Seafood_Note1=$Seafood_Array[3];

								$Seafood_Name1_NoSpace=str_replace(" ", "",$Seafood_Name1);
								$Seafood_Price1_NoDolla=str_replace("$","",$Seafood_Price1);

								$Seafood_Origin2=$Seafood_Array[4];
								$Seafood_Name2=$Seafood_Array[5];
								$Seafood_Img2=str_replace(" ", "_",$Seafood_Name2);
								$Seafood_Price2=$Seafood_Array[6];
								$Seafood_Note2=$Seafood_Array[7];

								$Seafood_Name2_NoSpace=str_replace(" ", "",$Seafood_Name2);
								$Seafood_Price2_NoDolla=str_replace("$","",$Dairy_Price2);

								if (file_exists("images/Deli/Seafood/".$Seafood_Img1.".jpg")) {
									$image= '<img src="images/Deli/Seafood/'.$Seafood_Img1.'.jpg" alt="'.$Seafood_Img1.'" id="'.$Seafood_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Seafood_Name1_NoSpace.'\','.'\''.$Seafood_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Deli/Seafood/".$Seafood_Img2.".jpg")) {
									$image2= '<img src="images/Deli/Seafood/'.$Seafood_Img2.'.jpg" alt="'.$Seafood_Img2.'" id="'.$Seafood_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Seafood_Name2_NoSpace.'\','.'\''.$Seafood_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Seafood_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Seafood_Origin1.'
									</p>
									<p class="name">
										'.$Seafood_Name1.'
									</p>
									<p class="Price">
										'.$Seafood_Price1.'
									</p>
									<p class="note">
										'.$Seafood_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Seafood_Origin2.'
									</p>
									<p class="name">
										'.$Seafood_Name2.'
									</p>
									<p class="Price">
										'.$Seafood_Price2.'
									</p>
									<p class="note">
										'.$Seafood_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Seafood_Information;


							}fclose($Seafood_List);
						?>
						
					</table>
				</div>
			</div>	<center><?=$ShoppingCartViewer?></center>
		</div>

	</div> <!--Closes Grocery_Div-->
	  

  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>