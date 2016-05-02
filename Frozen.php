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
				<button  id="See_Frozen_Desserts" onclick="See_Frozen_Desserts()">Frozen Desserts</button> 
				<button  id="See_Frozen_Meals" onclick="See_Frozen_Meals()">Frozen Meals</button>
				<button  id="See_Frozen_FV" onclick="See_Frozen_FV()">Frozen Fruits and Vegetables</button>
			</center>
		</div>
		
		<script type="text/javascript">
			function See_Frozen_Desserts() {
				document.getElementById('hidden_meals').style = "display: none;";
				document.getElementById('hidden_fruit_veggie').style = "display: none;";
				document.getElementById('hidden_dessert').style = "display: block;";
			};
			function See_Frozen_Meals(){
					document.getElementById('hidden_meals').style = "display: block;";
					document.getElementById('hidden_fruit_veggie').style = "display: none;";
					document.getElementById('hidden_dessert').style = "display: none;";
			};
				
			function See_Frozen_FV(){
				document.getElementById('hidden_fruit_veggie').style = "display: block;";
				document.getElementById('hidden_dessert').style = "display: none;";
				document.getElementById('hidden_meals').style = "display: none;";
			};
		</script>
			<div class="right_div">
			<div id="hidden_dessert">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$dessert_List = fopen("Products/Frozen_Desserts.txt","r");
							while (!feof($dessert_List)) {
								$dessert_line = fgets($dessert_List);
								$dessert_Array = explode(",", $dessert_line);

								$dessert_Origin1=$dessert_Array[0];
								$dessert_Name1=$dessert_Array[1];
								$dessert_Img1=str_replace(" ", "_",$dessert_Name1);
								$dessert_Price1=$dessert_Array[2];
								$dessert_Note1=$dessert_Array[3];

								$dessert_Name1_NoSpace=str_replace(" ", "",$dessert_Name1);
								$dessert_Price1_NoDolla=str_replace("$","",$dessert_Price1);

								$dessert_Origin2=$dessert_Array[4];
								$dessert_Name2=$dessert_Array[5];
								$dessert_Img2=str_replace(" ", "_",$dessert_Name2);
								$dessert_Price2=$dessert_Array[6];
								$dessert_Note2=$dessert_Array[7];

								$dessert_Name2_NoSpace=str_replace(" ", "",$dessert_Name2);
								$dessert_Price2_NoDolla=str_replace("$","",$dessert_Price2);

								if (file_exists("images/Frozen_Food/Dessert/".$dessert_Img1.".jpg")) {
									$image= '<img src="images/Frozen_Food/Dessert/'.$dessert_Img1.'.jpg" alt="'.$dessert_Img1.'" id="'.$dessert_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$dessert_Name1_NoSpace.'\','.'\''.$dessert_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Frozen_Food/Dessert/".$dessert_Img2.".jpg")) {
									$image2= '<img src="images/Frozen_Food/Dessert/'.$dessert_Img2.'.jpg" alt="'.$dessert_Img2.'" id="'.$dessert_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$dessert_Name2_NoSpace.'\','.'\''.$dessert_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$dessert_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$dessert_Origin1.'
									</p>
									<p class="name">
										'.$dessert_Name1.'
									</p>
									<p class="Price">
										'.$dessert_Price1.'
									</p>
									<p class="note">
										'.$dessert_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$dessert_Origin2.'
									</p>
									<p class="name">
										'.$dessert_Name2.'
									</p>
									<p class="Price">
										'.$dessert_Price2.'
									</p>
									<p class="note">
										'.$dessert_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $dessert_Information;


							}fclose($dessert_List);
						?>
					</table>
				</div>
			</div>	
	
			<div id="hidden_meals">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$meals_List = fopen("Products/Frozen_Meals.txt","r");
							while (!feof($meals_List)) {
								$meals_line = fgets($meals_List);
								$meals_Array = explode(",", $meals_line);

								$meals_Origin1=$meals_Array[0];
								$meals_Name1=$meals_Array[1];
								$meals_Img1=str_replace(" ", "_",$meals_Name1);
								$meals_Price1=$meals_Array[2];
								$meals_Note1=$meals_Array[3];

								$meals_Name1_NoSpace=str_replace(" ", "",$meals_Name1);
								$meals_Price1_NoDolla=str_replace("$","",$meals_Price1);

								$meals_Origin2=$meals_Array[4];
								$meals_Name2=$meals_Array[5];
								$meals_Img2=str_replace(" ", "_",$meals_Name2);
								$meals_Price2=$meals_Array[6];
								$meals_Note2=$meals_Array[7];

								$meals_Name2_NoSpace=str_replace(" ", "",$meals_Name2);
								$meals_Price2_NoDolla=str_replace("$","",$meals_Price2);

								if (file_exists("images/Frozen_Food/Meals/".$meals_Img1.".jpg")) {
									$image= '<img src="images/Frozen_Food/Meals/'.$meals_Img1.'.jpg" alt="'.$meals_Img1.'" id="'.$meals_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$meals_Name1_NoSpace.'\','.'\''.$meals_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Frozen_Food/Meals/".$meals_Img2.".jpg")) {
									$image2= '<img src="images/Frozen_Food/Meals/'.$meals_Img2.'.jpg" alt="'.$meals_Img2.'" id="'.$meals_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$meals_Name2_NoSpace.'\','.'\''.$meals_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$meals_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$meals_Origin1.'
									</p>
									<p class="name">
										'.$meals_Name1.'
									</p>
									<p class="Price">
										'.$meals_Price1.'
									</p>
									<p class="note">
										'.$meals_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$meals_Origin2.'
									</p>
									<p class="name">
										'.$meals_Name2.'
									</p>
									<p class="Price">
										'.$meals_Price2.'
									</p>
									<p class="note">
										'.$meals_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $meals_Information;


							}fclose($meals_List);
						?>

					</table>
					
				</div>
			</div>	

			<div id="hidden_fruit_veggie">
				<div class="innerproductsdiv">
					<table style="width:100%">
						<?php
							$fruit_veggie_List = fopen("Products/Frozen_Fruits_Veggies.txt","r");
							while (!feof($fruit_veggie_List)) {
								$fruit_veggie_line = fgets($fruit_veggie_List);
								$fruit_veggie_Array = explode(",", $fruit_veggie_line);

								$fruit_veggie_Origin1=$fruit_veggie_Array[0];
								$fruit_veggie_Name1=$fruit_veggie_Array[1];
								$fruit_veggie_Img1=str_replace(" ", "_",$fruit_veggie_Name1);
								$fruit_veggie_Price1=$fruit_veggie_Array[2];
								$fruit_veggie_Note1=$fruit_veggie_Array[3];

								$fruit_veggie_Name1_NoSpace=str_replace(" ", "",$fruit_veggie_Name1);
								$fruit_Price1_NoDolla=str_replace("$","",$fruit_Price1);

								$fruit_veggie_Origin2=$fruit_veggie_Array[4];
								$fruit_veggie_Name2=$fruit_veggie_Array[5];
								$fruit_veggie_Img2=str_replace(" ", "_",$fruit_veggie_Name2);
								$fruit_veggie_Price2=$fruit_veggie_Array[6];
								$fruit_veggie_Note2=$fruit_veggie_Array[7];

								$fruit_veggie_Name2_NoSpace=str_replace(" ", "",$fruit_veggie_Name2);
								$fruit_Price2_NoDolla=str_replace("$","",$fruit_Price2);

								if (file_exists("images/Frozen_Food/Fruit_Veggies/".$fruit_veggie_Img1.".jpg")) {
									$image= '<img src="images/Frozen_Food/Fruit_Veggies/'.$fruit_veggie_Img1.'.jpg" alt="'.$fruit_veggie_Img1.'" id="'.$fruit_veggie_Img1.'">';
									$AddtoCart1='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$fruit_Name1_NoSpace.'\','.'\''.$fruit_Price1_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image="";
									$AddtoCart1="";
								}
								if (file_exists("images/Frozen_Food/Fruit_Veggies/".$fruit_veggie_Img2.".jpg")) {
									$image2= '<img src="images/Frozen_Food/Fruit_Veggies/'.$fruit_veggie_Img2.'.jpg" alt="'.$fruit_veggie_Img2.'" id="'.$fruit_veggie_Img2.'">';
									$AddtoCart2='<button class="Add_to_Cart" onclick="Add_to_Cart (\''.$fruit_Name2_NoSpace.'\','.'\''.$fruit_Price2_NoDolla.'\')">Add to Cart</button>';
								}
								else{
									$image2="";
									$AddtoCart2="";
								}

								$fruit_veggie_Information='
								<tr>
								<td>
									<p>
										'.$image.'
									<p class="origin">
										'.$fruit_veggie_Origin1.'
									</p>
									<p class="name">
										'.$fruit_veggie_Name1.'
									</p>
									<p class="Price">
										'.$fruit_veggie_Price1.'
									</p>
									<p class="note">
										'.$fruit_veggie_Note1.'<br><br>
									'.$AddtoCart1.'</p>
									<p>
								</td>
								<td>
									<p>
									'.$image2.'
									<p class="origin">
										'.$fruit_veggie_Origin2.'
									</p>
									<p class="name">
										'.$fruit_veggie_Name2.'
									</p>
									<p class="Price">
										'.$fruit_veggie_Price2.'
									</p>
									<p class="note">
										'.$fruit_veggie_Note2.'<br><br>
									'.$AddtoCart2.'</p>
									<p>

								</td>
								</tr>
								';
								echo $fruit_veggie_Information;


							}fclose($fruit_veggie_List);
						?>
						
					</table>
				</div>
			</div>	<center><?=$ShoppingCartViewer?></center>
		</div>

	</div> <!--Closes Grocery_Div-->
	  

  	  	<!--Calls html closer from Common.php-->
		<?=$htmlcloser?>