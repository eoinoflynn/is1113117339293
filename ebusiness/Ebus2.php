<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    </head>
    
    
    <body>
        
        
        
        
        <h2 id="header2">Please enter your payment details</h2>
        
        
            <form action="Ebus3.php" method="POST">

                    
                    <div id="pin">
                    <label for="user_pin">Pin:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    </div>

                <div id="proceed">
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </div>
           
            </form>
            
            <div id="validate">
            <br/>
            <button onClick="validateDetails()">Validate</button>
            </div>
            
            
            <?php
            // set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>