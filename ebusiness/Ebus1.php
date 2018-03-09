<!DOCTYPE html>
<html>
    <head>
         <!-- Here the title is set for this web page -->
        <title>Select Product</title>

        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  
  <!-- the following is an inline style sheet --> 
 <style>

*{
    margin:0;
}
  form{
      position:absolute;
      left: 40%;
  }
  
  #clear{
    position: absolute;
    left:49%;
    top:60%;
}

  #calculate{
    position: absolute;
    left:40%;
    top:60%;
}
  
 
</style>
    </head>
    
    <body style="background-color: #bfbfbf;">
        
       
         <form name="myForm" method="POST" onsubmit="return validateForm()" action="Ebus2.php">
        
         <!-- Here the heading is set for this web page. -->
        <h1>Order Form</h1>
            
            <br>
            <!-- Here is another heading set for this web page. -->
            <h3>Select a product</h3>
            </br>
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
             <br>
              <br>
            
             <label for="cloud">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200s
            </label>
            
          
              <br>
                <br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            <br>
              <br>
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
              <br>
              <br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
             <br>
            <br>
            
             <label for="discount">
              Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              <br>
                <br>
              
            <label for="vat">
               Vat @ 10% 
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br>
              <br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            
            <br>
            <br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br>
    
            <button onClick="calcSub()" id ="calculate">Calculate Cost</button>
            <a role="button" href="Ebus1.php" id="clear">Clear Choice</a>
    
        
       
    </body>
</html>