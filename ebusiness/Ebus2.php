<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body style="background-color: lightgrey;">
        
        <style>/* Centered text */
    .centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    
}
          
        </style>
          <div class="container1">
            <img src="https://www.surfertoday.com/images/stories/breakingwave.jpg" alt="wave" width="1440" height="250" >
           <div class="centered"><h1>Wave Crest Communations</h1></div>
       
       
     
            <br>
            <h3>Please enter your details</h3>
            <br>
            
            
            
            
             <form name = "myForm"  method="POST" action="Ebus3.php">
                    <br>
                    <label for = "name">
                        <strong>  Name:</strong>
                        <br>
                        <input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for = "email">
                        <strong> Email:</strong>
                        <br>
                        <input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    
                    <label for = "user_number">
                        <strong>Card Number</strong></label>
                    <br>
                     <input type = "text" id ="user_number" name="user_number" maxlength="16"/>
               
                <br><br>
                
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
           </div>
            
            <br>
            <button onClick="validateDetails()">Validate</button>
          
            <?php
            //set session variable 
            $_SESSION["total"]=$_POST["total"];
           
            ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
    </body>
    
    
    
</html>