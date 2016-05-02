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
				<button  id="See_Cans" onclick="See_Cans()">Canned Foods</button> <!--cans-->
				<button  id="See_Cereal" onclick="See_Cereal()">Cereal & Breakfast</button><!--fruit-->
				<button  id="See_Spices" onclick="See_Spices()">Spices, Dried Spices, & Seasonings</button><!--spices-->
			</center>
		</div>
		
		<script type="text/javascript">
			function See_Cans() {
				document.getElementById('hidden_cereal').style = "display: none;";
				document.getElementById('hidden_spices').style = "display: none;";
				document.getElementById('hidden_cans').style = "display: block;";
			};
			function See_Cereal(){
					document.getElementById('hidden_cereal').style = "display: block;";
					document.getElementById('hidden_spices').style = "display: none;";
					document.getElementById('hidden_cans').style = "display: none;";
			};
				
			function See_Spices(){
				document.getElementById('hidden_spices').style = "display: block;";
				document.getElementById('hidden_cans').style = "display: none;";
				document.getElementById('hidden_cereal').style = "display: none;";
			};

		</script>

			<div class="right_div">
			<div id="hidden_cans">
				<div class="innerproductsdiv">
					<p id="demo"></p>
					<table style="width:100%">
						<?php
							$cans_List = fopen("Products/Cans.txt","r");
							while (!feof($cans_List)) {
								$cans_line = fgets($cans_List);
								$cans_Array = explode(",", $cans_line);

								$cans_Origin1=$cans_Array[0];
								$cans_Name1=$cans_Array[1];
								$cans_Img1=str_replace(" ", "_",$cans_Name1);
								$cans_Price1=$cans_Array[2];
								$cans_Note1=$cans_Array[3];

								$cans_Name1_NoSpace=str_replace(" ", "",$cans_Name1);
								$cans_Price1_NoDolla=str_replace("$","",$cans_Price1);

								$cans_Origin2=$cans_Array[4];
								$cans_Name2=$cans_Array[5];
								$cans_Img2=str_replace(" ", "_",$cans_Name2);
								$cans_Price2=$cans_Array[6];
								$cans_Note2=$cans_Array[7];

								$cans_Name2_NoSpace=str_replace(" ", "",$cans_Name2);
								$cans_Price2_NoDolla=str_replace("$","",$cans_Price2);

								if (file_exists("images/Dry_Goods/Cans/".$cans_Img1.".jpg")) {
									$image= '<img src="images/Dry_Goods/Cans/'.$cans_Img1.'.jpg" alt="'.$cans_Img1.'" id="'.$cans_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$cans_Name1_NoSpace.'\','.'\''.$cans_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Dry_Goods/Cans/".$cans_Img2.".jpg")) {
									$image2= '<img src="images/Dry_Goods/Cans/'.$cans_Img2.'.jpg" alt="'.$cans_Img2.'" id="'.$cans_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$cans_Name2_NoSpace.'\','.'\''.$cans_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$cans_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$cans_Origin1.'
									</p>
									<p class="name">
										'.$cans_Name1.'
									</p>
									<p class="Price">
										'.$cans_Price1.'
									</p>
									<p class="note">
										'.$cans_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$cans_Origin2.'
									</p>
									<p class="name">
										'.$cans_Name2.'
									</p>
									<p class="Price">
										'.$cans_Price2.'
									</p>
									<p class="note">
										'.$cans_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $cans_Information;


							}fclose($cans_List);
						?>
					</table>
				</div>
			</div>	
	
			<div id="hidden_cereal">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$cereal_List = fopen("Products/Cereal.txt","r");
							while (!feof($cereal_List)) {
								$cereal_line = fgets($cereal_List);
								$cereal_Array = explode(",", $cereal_line);

								$cereal_Origin1=$cereal_Array[0];
								$cereal_Name1=$cereal_Array[1];
								$cereal_Img1=str_replace(" ", "_",$cereal_Name1);
								$cereal_Price1=$cereal_Array[2];
								$cereal_Note1=$cereal_Array[3];

								$cereal_Name1_NoSpace=str_replace(" ", "",$cereal_Name1);
								$cereal_Price1_NoDolla=str_replace("$","",$cereal_Price1);

								$cereal_Origin2=$cereal_Array[4];
								$cereal_Name2=$cereal_Array[5];
								$cereal_Img2=str_replace(" ", "_",$cereal_Name2);
								$cereal_Price2=$cereal_Array[6];
								$cereal_Note2=$cereal_Array[7];

								$cereal_Name2_NoSpace=str_replace(" ", "",$cereal_Name2);
								$cereal_Price2_NoDolla=str_replace("$","",$cereal_Price2);

								if (file_exists("images/Dry_Goods/Cereal/".$cereal_Img1.".jpg")) {
									$image= '<img src="images/Dry_Goods/Cereal/'.$cereal_Img1.'.jpg" alt="'.$cereal_Img1.'" id="'.$cereal_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$cereal_Name1_NoSpace.'\','.'\''.$cereal_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Dry_Goods/Cereal/".$cereal_Img2.".jpg")) {
									$image2= '<img src="images/Dry_Goods/Cereal/'.$cereal_Img2.'.jpg" alt="'.$cereal_Img2.'" id="'.$cereal_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$cereal_Name2_NoSpace.'\','.'\''.$cereal_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$cereal_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$cereal_Origin1.'
									</p>
									<p class="name">
										'.$cereal_Name1.'
									</p>
									<p class="Price">
										'.$cereal_Price1.'
									</p>
									<p class="note">
										'.$cereal_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$cereal_Origin2.'
									</p>
									<p class="name">
										'.$cereal_Name2.'
									</p>
									<p class="Price">
										'.$cereal_Price2.'
									</p>
									<p class="note">
										'.$cereal_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $cereal_Information;


							}fclose($cereal_List);
						?>

					</table>
					
				</div>
			</div>	

			<div id="hidden_spices">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$spices_List = fopen("Products/Spices.txt","r");
							while (!feof($spices_List)) {
								$spices_line = fgets($spices_List);
								$spices_Array = explode(",", $spices_line);

								$Spices_Origin1=$spices_Array[0];
								$Spices_Name1=$spices_Array[1];
								$Spices_Img1=str_replace(" ", "_",$Spices_Name1);
								$Spices_Price1=$spices_Array[2];
								$Spices_Note1=$spices_Array[3];

								$Spices_Name1_NoSpace=str_replace(" ", "",$Spices_Name1);
								$Spices_Price1_NoDolla=str_replace("$","",$Spices_Price1);


								$Spices_Origin2=$spices_Array[4];
								$Spices_Name2=$spices_Array[5];
								$Spices_Img2=str_replace(" ", "_",$Spices_Name2);
								$Spices_Price2=$spices_Array[6];
								$Spices_Note2=$spices_Array[7];

								$Spices_Name2_NoSpace=str_replace(" ", "",$Spices_Name2);
								$Spices_Price2_NoDolla=str_replace("$","",$Spices_Price2);

								if (file_exists("images/Dry_Goods/Spices/".$Spices_Img1.".jpg")) {
									$image= '<img src="images/Dry_Goods/Spices/'.$Spices_Img1.'.jpg" alt="'.$Spices_Img1.'" id="'.$Spices_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Sprices_Name1_NoSpace.'\','.'\''.$Sprices_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Dry_Goods/Spices/".$Spices_Img2.".jpg")) {
									$image2= '<img src="images/Dry_Goods/Spices/'.$Spices_Img2.'.jpg" alt="'.$Spices_Img2.'" id="'.$Spices_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$Sprices_Name2_NoSpace.'\','.'\''.$Sprices_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$Spices_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$Spices_Origin1.'
									</p>
									<p class="name">
										'.$Spices_Name1.'
									</p>
									<p class="Price">
										'.$Spices_Price1.'
									</p>
									<p class="note">
										'.$Spices_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$Spices_Origin2.'
									</p>
									<p class="name">
										'.$Spices_Name2.'
									</p>
									<p class="Price">
										'.$Spices_Price2.'
									</p>
									<p class="note">
										'.$Spices_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $Spices_Information;


							}fclose($spices_List);
						?>
					</table>
				</div>
			</div>	<center><?=$ShoppingCartViewer?></center>
		</div>
			<!--Calls Footer from Common.php-->
			<!--<?=$grocery_footer?>-->
	</div> <!--Closes Grocery_Div-->
	  

  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>