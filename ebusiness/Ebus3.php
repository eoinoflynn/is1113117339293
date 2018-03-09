<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        </br>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     
     </head>
    <body style="background-color: #bfbfbf;">
        
      <style>

   *{
    margin:0;
}
  form{
      position:absolute;
      left: 40%;
      top:20%;
  }

  #validate{
    position: absolute;
    left:40%;
    top:64%;
}

img{
    position: relative;
    z-index: -1;
    width:100%;
    height:100%;
}

.scroll{
    position:absolute;
    width: 700%;
    height: 300%;
    Left:-300%;
    top:-100%;
}

#link{
    position:absolute;
    left: 40%;
    top: 40%;
}

  </style>
  
           
       
       <form>
       
        <Stong><h1>Receipt</h1></Stong>
        </br>
        
        <div class= "scroll">
       <img src="https://images.vexels.com/media/users/3/139712/isolated/preview/8af258362339def1d2c8a5541ee722f7-blank-scroll-paper-by-vexels.png">
       </div>
                   

       
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("</br></br><strong>Email: </strong>". $email);
        echo "</br></br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    </br></br>
      
        </div>
             


            </form>
             <button class="button"><a href=" ../homepage.html" id="link">Home</a></button>
    </body>
    </html>