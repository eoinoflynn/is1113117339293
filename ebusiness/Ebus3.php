<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     
     </head>
    <body style="background-color:lightgrey;">
        
      <style>
      .container{
    display:inline;
}
.container1{
     top:0%;
  width:100%;
  height:250%;
  text-align: center;


}
/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
   
  }
  .container2{
      text-decoration:none;
      color:black;
      
  }
  .a{
  text-decoration:none;
      color:black;
  }
  </style>
   <div class="container1">
            <img src="https://www.surfertoday.com/images/stories/breakingwave.jpg" alt="wave" width="1440" height="250" >
           <div class="centered"><h1>Wave crest Communications</h1></div>
       
        
        <Stong><h1>Receipt</h1></Stong>
        
       
                   

       
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    
      
        </div>
             
            <div class="container2">
            <a href=" ../homepage.html">Home</a>
            </div>
    </body>
    </html>