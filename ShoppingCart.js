//create array that will hold all ordered products
    var shoppingCart = [];
    var beenHereBefore= 0;
    //this function manipulates DOM and displays content of our shopping cart
    function displayShoppingCart(){
        
        if (beenHereBefore==0) {localStorage.clear();};
        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
        //ensure we delete all previously added rows from ordered products table
        while(orderedProductsTblBody.rows.length>0) {
            orderedProductsTblBody.deleteRow(0);
         }

        //variable to hold total price of shopping cart
        var cart_total_price=0;
        //iterate over array of objects
        for(var product in shoppingCart){
            //add new row      
            var row=orderedProductsTblBody.appendChild(document.createElement('tr'));
            //create three cells for product properties 
            var cellName = row.appendChild(document.createElement('td'));
            var cellPrice = row.appendChild(document.createElement('td'));
            cellPrice.align="right";
            //fill cells with values from current product object of our array
            cellName.appendChild(document.createTextNode(shoppingCart[product].Name));
            console.log(cellName.innerHTML);
            cellPrice.appendChild(document.createTextNode(shoppingCart[product].Price));
            console.log(cellPrice.innerHTML);
            cart_total_price+=shoppingCart[product].Price;
        }
        //fill total cost of our shopping cart 
        document.getElementById("cart_total").innerHTML=cart_total_price;

        console.log(orderedProductsTblBody.innerHTML);
        var Testy= orderedProductsTblBody.innerHTML;
        
        console.log(window.location.pathname);
        if (window.location.pathname=="/csc435PHP/Final_Project/Dairy.php") {
          localStorage.setItem("DairyItem", orderedProductsTblBody.innerHTML);
          sessionStorage.setItem("DairyPrice", cart_total_price);
        }
        else if (window.location.pathname=="/csc435PHP/Final_Project/Dry_Foods.php") {
          localStorage.setItem("DryFoodItem", orderedProductsTblBody.innerHTML);
          sessionStorage.setItem("DryFooodPrice", cart_total_price);
        }
        else if (window.location.pathname=="/csc435PHP/Final_Project/Frozen.php") {
          localStorage.setItem("FrozenItem", orderedProductsTblBody.innerHTML);
          sessionStorage.setItem("FrozenPrice", cart_total_price);
        }
        else if (window.location.pathname=="/csc435PHP/Final_Project/Produce.php") {
          localStorage.setItem("ProduceItem", orderedProductsTblBody.innerHTML);
          sessionStorage.setItem("ProducePrice", cart_total_price);
        }
        else if (window.location.pathname=="/csc435PHP/Final_Project/Meat_Seafood.php") {
          localStorage.setItem("MeatItem", orderedProductsTblBody.innerHTML);
          sessionStorage.setItem("MeatPrice", cart_total_price);
        }
        else {
          localStorage.setItem("GenericItem", orderedProductsTblBody.innerHTML);
        }
    }


    function Add_to_Cart(name,price){
        beenHereBefore++;
       //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
       var singleProduct = {};
       //Fill the product object with data
       singleProduct.Name=name;
       singleProduct.Price=parseFloat(price,6);
       //Add newly created product to our shopping cart 
       shoppingCart.push(singleProduct);
       //call display function to show on screen
       displayShoppingCart();
       // console.log("Adding stuff"+singleProduct.Name+" "+singleProduct.Price);

    }  

    function giveMeATable(){
      var Total=0;
      for (var key in localStorage) {
          console.log(localStorage[key]);
         
          document.getElementById("Testy").innerHTML+="<center><table id='returntable' cellpadding='8' cellspacing='8' border='1'>"+localStorage[key]+"'"+"</table></center>";
         
      };

      for (var key in sessionStorage){
        
        
        Total+=parseFloat(sessionStorage[key]);
         document.getElementById("Total").innerHTML= "Your total is....$"+Total;

      }
      
      console.log(document.getElementById("Testy".innerHTML));
    }

    function clearHistory(){
      localStorage.clear();
      sessionStorage.clear();
    }

