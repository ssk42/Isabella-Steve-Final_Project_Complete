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
				<button  id="See_Veggies" onclick="See_Veggies()">Fresh Vegetables</button> 
				<button  id="See_Fruit" onclick="See_Fruit()">Fresh Fruit</button>
				<button  id="See_Herbs" onclick="See_Herbs()">Fresh Herbs</button>
			</center>
		</div>
		
		<script type="text/javascript">
			function See_Veggies() {
				document.getElementById('hidden_fruits').style = "display: none;";
				document.getElementById('hidden_herbs').style = "display: none;";
				document.getElementById('hidden_veggies').style = "display: block;";
			};
			function See_Fruit(){
					document.getElementById('hidden_fruits').style = "display: block;";
					document.getElementById('hidden_herbs').style = "display: none;";
					document.getElementById('hidden_veggies').style = "display: none;";
			};
				
			function See_Herbs(){
				document.getElementById('hidden_herbs').style = "display: block;";
				document.getElementById('hidden_veggies').style = "display: none;";
				document.getElementById('hidden_fruits').style = "display: none;";
			};
		</script>
			<div class="right_div">
			<div id="hidden_veggies">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Veggies_List = fopen("Products/Veggies.txt","r");
							while (!feof($Veggies_List)) {
								$Veggies_line = fgets($Veggies_List);
								$Veggies_Array = explode(",", $Veggies_line);

								$Veggies_Origin1=$Veggies_Array[0];
								$Veggies_Name1=$Veggies_Array[1];
								$Veggies_Img1=str_replace(" ", "_",$Veggies_Name1);
								$Veggies_Price1=$Veggies_Array[2];
								$Veggies_Note1=$Veggies_Array[3];

								$Veggies_Name1_NoSpace=str_replace(" ", "",$Veggies_Name1);
								$Veggies_Price1_NoDolla=str_replace("$","",$Veggies_Price1);

								$Veggies_Origin2=$Veggies_Array[4];
								$Veggies_Name2=$Veggies_Array[5];
								$Veggies_Img2=str_replace(" ", "_",$Veggies_Name2);
								$Veggies_Price2=$Veggies_Array[6];
								$Veggies_Note2=$Veggies_Array[7];

								$Veggies_Name2_NoSpace=str_replace(" ", "",$Veggies_Name2);
								$Veggies_Price2_NoDolla=str_replace("$","",$Veggies_Price2);


								if (file_exists("images/Produce/Veggies/".$Veggies_Img1.".jpg")) {
									$image= '<img src="images/Produce/Veggies/'.$Veggies_Img1.'.jpg" alt="'.$Veggies_Img1.'" id="'.$Veggies_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Veggies_Name1_NoSpace.'\','.'\''.$Veggies_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Produce/Veggies/".$Veggies_Img2.".jpg")) {
									$image2= '<img src="images/Produce/Veggies/'.$Veggies_Img2.'.jpg" alt="'.$Veggies_Img2.'" id="'.$Veggies_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Veggies_Name2_NoSpace.'\','.'\''.$Veggies_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Veggies_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Veggies_Origin1.'
									</p>
									<p class="name">
										'.$Veggies_Name1.'
									</p>
									<p class="Price">
										'.$Veggies_Price1.'
									</p>
									<p class="note">
										'.$Veggies_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Veggies_Origin2.'
									</p>
									<p class="name">
										'.$Veggies_Name2.'
									</p>
									<p class="Price">
										'.$Veggies_Price2.'
									</p>
									<p class="note">
										'.$Veggies_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Veggies_Information;

							}fclose($Veggies_List);
						?>
					</table>
				</div>
			</div>	
	
			<div id="hidden_fruits">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Fruits_List = fopen("Products/Fruits.txt","r");
							while (!feof($Fruits_List)) {
								$Fruits_line = fgets($Fruits_List);
								$Fruits_Array = explode(",", $Fruits_line);

								$Fruits_Origin1=$Fruits_Array[0];
								$Fruits_Name1=$Fruits_Array[1];
								$Fruits_Img1=str_replace(" ", "_",$Fruits_Name1);
								$Fruits_Price1=$Fruits_Array[2];
								$Fruits_Note1=$Fruits_Array[3];

								$Fruits_Name1_NoSpace=str_replace(" ", "",$Fruits_Name1);
								$Fruits_Price1_NoDolla=str_replace("$","",$Fruits_Price1);

								$Fruits_Origin2=$Fruits_Array[4];
								$Fruits_Name2=$Fruits_Array[5];
								$Fruits_Img2=str_replace(" ", "_",$Fruits_Name2);
								$Fruits_Price2=$Fruits_Array[6];
								$Fruits_Note2=$Fruits_Array[7];

								$Fruits_Name2_NoSpace=str_replace(" ", "",$Fruits_Name2);
								$Fruits_Price2_NoDolla=str_replace("$","",$Fruits_Price2);

								if (file_exists("images/Produce/Fruits/".$Fruits_Img1.".jpg")) {
									$image= '<img src="images/Produce/Fruits/'.$Fruits_Img1.'.jpg" alt="'.$Fruits_Img1.'" id="'.$Fruits_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Fruits_Name1_NoSpace.'\','.'\''.$Fruits_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Produce/Fruits/".$Fruits_Img2.".jpg")) {
									$image2= '<img src="images/Produce/Fruits/'.$Fruits_Img2.'.jpg" alt="'.$Fruits_Img2.'" id="'.$Fruits_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Fruits_Name2_NoSpace.'\','.'\''.$Fruits_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Fruits_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Fruits_Origin1.'
									</p>
									<p class="name">
										'.$Fruits_Name1.'
									</p>
									<p class="Price">
										'.$Fruits_Price1.'
									</p>
									<p class="note">
										'.$Fruits_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Fruits_Origin2.'
									</p>
									<p class="name">
										'.$Fruits_Name2.'
									</p>
									<p class="Price">
										'.$Fruits_Price2.'
									</p>
									<p class="note">
										'.$Fruits_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Fruits_Information;


							}fclose($Fruits_List);
						?>

					</table>

				</div>
			</div>	

			<div id="hidden_herbs">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$Herbs_List = fopen("Products/Herbs.txt","r");
							while (!feof($Herbs_List)) {
								$Herbs_line = fgets($Herbs_List);
								$Herbs_Array = explode(",", $Herbs_line);

								$Herb_Origin1=$Herbs_Array[0];
								$Herb_Name1=$Herbs_Array[1];
								$Herb_Img1=str_replace(" ", "_",$Herb_Name1);
								$Herb_Price1=$Herbs_Array[2];
								$Herb_Note1=$Herbs_Array[3];

								$Herb_Name1_NoSpace=str_replace(" ", "",$Herb_Name1);
								$Herb_Price1_NoDolla=str_replace("$","",$Herb_Price1);

								$Herb_Origin2=$Herbs_Array[4];
								$Herb_Name2=$Herbs_Array[5];
								$Herb_Img2=str_replace(" ", "_",$Herb_Name2);
								$Herb_Price2=$Herbs_Array[6];
								$Herb_Note2=$Herbs_Array[7];

								$Herb_Names2_NoSpace=str_replace(" ", "",$Herb_Name2);
								$Herb_Price2_NoDolla=str_replace("$","",$Herb_Price2);

								if (file_exists("images/Produce/Herbs/".$Herb_Img1.".jpg")) {
									$image= '<img src="images/Produce/Herbs/'.$Herb_Img1.'.jpg" alt="'.$Herb_Img1.'" id="'.$Herb_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Herb_Name1_NoSpace.'\','.'\''.$Herb_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Produce/Herbs/".$Herb_Img2.".jpg")) {
									$image2= '<img src="images/Produce/Herbs/'.$Herb_Img2.'.jpg" alt="'.$Herb_Img2.'" id="'.$Herb_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Herb_Name2_NoSpace.'\','.'\''.$Herb_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Herb_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Herb_Origin1.'
									</p>
									<p class="name">
										'.$Herb_Name1.'
									</p>
									<p class="Price">
										'.$Herb_Price1.'
									</p>
									<p class="note">
										'.$Herb_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Herb_Origin2.'
									</p>
									<p class="name">
										'.$Herb_Name2.'
									</p>
									<p class="Price">
										'.$Herb_Price2.'
									</p>
									<p class="note">
										'.$Herb_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Herb_Information;


							}fclose($Herbs_List);
						?>
						
					</table>
				</div>
			</div>	<center><?=$ShoppingCartViewer?></center>
		</div>

	</div> <!--Closes Grocery_Div-->
	  

  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>