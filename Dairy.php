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

				<button  id="See_Dairy" onclick="See_Dairy()">Dairy</button> <!--See Meats-->
				<button  id="See_Eggs" onclick="See_Eggs()">Eggs</button><!--See Seafood-->
			</center>
		</div>
		
		<script type="text/javascript">
			function See_Dairy() {
				document.getElementById('hidden_Eggs').style = "display: none;"; //hidden_Seafood
				document.getElementById('hidden_Dairy').style = "display: block;"; //hidden_Meats
			
			};
			function See_Eggs(){
					document.getElementById('hidden_Eggs').style = "display: block;"; ////hidden_Seafood
					document.getElementById('hidden_Dairy').style = "display: none;"; //hidden_Meats
				
			};
				
		</script>

			<div class="right_div">
			<div id="hidden_Dairy">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Dairy_List = fopen("Products/Dairy.txt","r");
							while (!feof($Dairy_List)) {
								$Dairy_line = fgets($Dairy_List);
								$Dairy_Array = explode(",", $Dairy_line);

								$Dairy_Origin1=$Dairy_Array[0];
								$Dairy_Name1=$Dairy_Array[1];
								$Dairy_Img1=str_replace(" ", "_",$Dairy_Name1);
								$Dairy_Price1=$Dairy_Array[2];
								$Dairy_Note1=$Dairy_Array[3];

								$Dairy_Name1_NoSpace=str_replace(" ", "",$Dairy_Name1);
								$Dairy_Price1_NoDolla=str_replace("$","",$Dairy_Price1);


								$Dairy_Origin2=$Dairy_Array[4];
								$Dairy_Name2=$Dairy_Array[5];
								$Dairy_Img2=str_replace(" ", "_",$Dairy_Name2);
								$Dairy_Price2=$Dairy_Array[6];
								$Dairy_Note2=$Dairy_Array[7];

								$Dairy_Name2_NoSpace=str_replace(" ", "",$Dairy_Name2);
								$Dairy_Price2_NoDolla=str_replace("$","",$Dairy_Price2);

								
								if (file_exists("images/Dairy/".$Dairy_Img1.".jpg")) {
									$image= '<img src="images/Dairy/'.$Dairy_Img1.'.jpg" alt="'.$Dairy_Img1.'" id="'.$Dairy_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Dairy_Name1_NoSpace.'\','.'\''.$Dairy_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Dairy/".$Dairy_Img2.".jpg")) {
									$image2= '<img src="images/Dairy/'.$Dairy_Img2.'.jpg" alt="'.$Dairy_Img2.'" id="'.$Dairy_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Dairy_Name2_NoSpace.'\','.'\''.$Dairy_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Dairy_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Dairy_Origin1.'
									</p>
									<p class="name">
										'.$Dairy_Name1.'
									</p>
									<p class="Price">
										'.$Dairy_Price1.'
									</p>
									<p class="note">
										'.$Dairy_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Dairy_Origin2.'
									</p>
									<p class="name">
										'.$Dairy_Name2.'
									</p>
									<p class="Price">
										'.$Dairy_Price2.'
									</p>
									<p class="note">
										'.$Dairy_Note2.'<br><br>
									'.$AddtoCart2.'</p>
								
								</td>
								</tr>
								';
								echo $Dairy_Information;


							}fclose($Dairy_List);
						?>
					</table>
					
				</div>

			</div>	
				
			<div id="hidden_Eggs">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Eggs_List = fopen("Products/Eggs.txt","r");
							while (!feof($Eggs_List)) {
								$Eggs_line = fgets($Eggs_List);
								$Eggs_Array = explode(",", $Eggs_line);

								$Eggs_Origin1=$Eggs_Array[0];
								$Eggs_Name1=$Eggs_Array[1];
								$Eggs_Img1=str_replace(" ", "_",$Eggs_Name1);
								$Eggs_Price1=$Eggs_Array[2];
								$Eggs_Note1=$Eggs_Array[3];

								$Eggs_Name1_NoSpace=str_replace(" ", "",$Eggs_Name1);
								$Eggs_Price1_NoDolla=str_replace("$","",$Eggs_Price1);

								$Eggs_Origin2=$Eggs_Array[4];
								$Eggs_Name2=$Eggs_Array[5];
								$Eggs_Img2=str_replace(" ", "_",$Eggs_Name2);
								$Eggs_Price2=$Eggs_Array[6];
								$Eggs_Note2=$Eggs_Array[7];

								$Eggs_Name2_NoSpace=str_replace(" ", "",$Eggs_Name2);
								$Eggs_Price2_NoDolla=str_replace("$","",$Eggs_Price2);

								if (file_exists("images/Dairy/Eggs/".$Eggs_Img1.".jpg")) {
									$image= '<img src="images/Dairy/Eggs/'.$Eggs_Img1.'.jpg" alt="'.$Eggs_Img1.'" id="'.$Eggs_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Eggs_Name1_NoSpace.'\','.'\''.$Eggs_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Dairy/Eggs/".$Eggs_Img2.".jpg")) {
									$image2= '<img src="images/Dairy/Eggs/'.$Eggs_Img2.'.jpg" alt="'.$Eggs_Img2.'" id="'.$Eggs_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Eggs_Name2_NoSpace.'\','.'\''.$Eggs_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Eggs_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Eggs_Origin1.'
									</p>
									<p class="name">
										'.$Eggs_Name1.'
									</p>
									<p class="Price">
										'.$Eggs_Price1.'
									</p>
									<p class="note">
										'.$Eggs_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Eggs_Origin2.'
									</p>
									<p class="name">
										'.$Eggs_Name2.'
									</p>
									<p class="Price">
										'.$Eggs_Price2.'
									</p>
									<p class="note">
										'.$Eggs_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Eggs_Information;


							}fclose($Eggs_List);
						?>
						
					</table>
				</div>
			</div>	<center><?=$ShoppingCartViewer?></center>
		</div>

	</div> <!--Closes Grocery_Div-->
	  

  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>