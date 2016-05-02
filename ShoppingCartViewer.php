    <?php   
        //Calls Common.php
        include "Common.php";
    ?>
    <!--Calls Header from Common.php-->
    <?=$head;?>

    <!--Calls Navigation Bar from Common.php-->
    <?=$NavigationBar;?>
   <?=$GroceryNavBar;?>

    <div class="right_div">
        
         <div class="innerproductsdiv">
            <div class="ShoppingCartView">
            <center><h2>Your Order Information</h2><div id="Shopping"></div>
            <button id="Cart" value="Cart" onclick="giveMeATable()">View Cart</button>
            <p id="Testy"></p>
            <br>
            <h2 id="Total">Your total is...</h2>  
            <p></p>
            <button id="Clear_all" value="Clear_all" onclick="clearHistory();">Clear Your Order!</button>
            <br><br>    
            <button  id="Checkout" onClick="parent.location='Checkout.php'" >Checkout</button></center>
            </div>      

                        
               
        </div>
    </div>
</div>
    
        <!--Calls html closer from Common.php-->
        <?=$htmlcloser?>